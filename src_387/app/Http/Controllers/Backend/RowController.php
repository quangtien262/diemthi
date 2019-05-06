<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\BackendController;
use Illuminate\Http\Request;

class RowController extends BackendController {
    public function deleteRow($tableId, $dataId) {
        $table = app('ClassTables')->getTable($tableId);
        if (!empty($table)) {
            app('EntityCommon')->deleteTable($table->name, $dataId);
        }

        return back();
    }

    public function listRow(Request $request, $tableId) {
        $table   = app('ClassTables')->getTable($tableId);
        $columns = app('ClassTables')->getColumnByTableId($tableId);
        if ($table->type_show == 0 || $table->type_show == 3) {
            $dataQuery = app('ClassTables')->getRowsByConditions($table, $columns, $request);
            //convert object 2 array
            $datas = json_decode(json_encode($dataQuery), true)['data'];

            return view('backend.row.listRowBasic', compact('tableId', 'table', 'columns', 'datas', 'dataQuery'));
        } elseif ($table->type_show == 1) {
            $htmlListDragDrop = app('ClassTables')->getHtmlListDragDrop($table);

            return view('backend.row.listRowDragDrop', compact('tableId', 'table', 'columns', 'datas', 'htmlListDragDrop'));
        } elseif ($table->type_show == 5) {
            return redirect(route('formRow', [$tableId, 1]));
        }
    }

    public function sortOrderRows(Request $request, $tableId) {
        $table   = app('ClassTables')->getTable($tableId);
        $columns = app('ClassTables')->getColumnByTableId($tableId);
        $ids     = json_decode($request->ids, true);
        if (!empty($table) && !empty($columns) && !empty($ids)) {
            app('EntityCommon')->updateSortOrder($table->name, $ids, $parentId = 0);
        }

        return response()->json([RETURN_SUCCESS, MSG_UPDATE_SORT_ORDER_SUCCESS]);
    }

    public function sortOrderColumn(Request $request, $tableId) {
        $table   = app('ClassTables')->getTable($tableId);
        $columns = app('ClassTables')->getColumnByTableId($tableId);
        $ids     = json_decode($request->ids, true);
        if (!empty($ids)) {
            app('EntityCommon')->updateSortOrder('table_column', $ids, $parentId = 0);
        }

        return response()->json([RETURN_SUCCESS, MSG_UPDATE_SORT_ORDER_SUCCESS]);
    }

    public function formRow(Request $request, $tableId, $dataId) {
        $table   = app('ClassTables')->getTable($tableId);
        $columns = app('ClassTables')->getColumnByTableId($tableId);
        $data    = json_decode(json_encode(app('EntityCommon')->getDataById($table->name, $dataId)), true);
        $layout  = 'backend';
        if (!empty($request->popup)) {
            $layout = 'popup';
        }

        return view('backend.row.formRow', compact('tableId', 'dataId', 'table', 'columns', 'data', 'layout'));
    }

    public function submitFormRow(Request $request, $tableId, $dataId = 0) {
        $table   = app('ClassTables')->getTable($tableId);
        $columns = app('ClassTables')->getColumnByTableId($tableId);
        $data    = [];
        foreach ($columns as $column) {
            if ($column->name == 'id') {
                continue;
            }
            if ($column->type_edit == 'encryption' && !empty($data[$column->name])) {
                $data[$column->name] = bcrypt($request->input($column->name));
                continue;
            }
            if ($column->type == 'INT') {
                $data[$column->name] = intval($request->input($column->name));
            } else {
                $data[$column->name] = $request->input($column->name);
            }

            //upload images if exist
            if ($column->type_edit == 'images') {
                $images = [];
                // create directory if not exist
                if (!empty($request->input('_images'))) {
                    $directoryUpload = 'imgs/' . $tableId;
                    if (!file_exists($directoryUpload)) {
                        mkdir($directoryUpload, 0777, true);
                    }
                    //loop images
                    foreach ($request->input('_images') as $idx => $img) {
                        if ($request->input('_images_type')[$idx] == 'base64') {
                            //case image is base64
                            $fileType = mime_content_type($img);
                            if (substr($fileType, 0, 5) == 'image') {
                                $fileName   = $idx . '-' . time() . '.' . str_replace('image/', '', $fileType);
                                $pathUpload = $directoryUpload . '/' . $fileName;
                                $result     = app('ClassCommon')->base64ToImage($img, $pathUpload);
                                $images[]   = '/' . $pathUpload;
                            }
                        } else {
                            //else not base64, save old path
                            $images[] = $img;
                        }
                    }
                }
                $data[$column->name] = json_encode($images);
            }
        }
        if ($dataId > 0) {
            $data = app('EntityCommon')->updateData($table->name, $dataId, $data);
        } else {
            $data = app('EntityCommon')->insertData($table->name, $data);
        }

        return redirect(route('listDataTbl', [$tableId]));
    }

    public function editCurrentRow(Request $request, $columnName, $tableId, $dataId = 0) {
        $table = app('ClassTables')->getTable($tableId);
        app('EntityCommon')->updateData($table->name, $dataId, [$columnName => $request->value]);
        return response()->json([RETURN_SUCCESS, MSG_UPDATE_COLUMN_DATA_SUCCESS]);
    }

    public function import2Excel(Request $request, $tableId) {
        return view('backend.row.import2Excel', compact('tableId'));
    }

    public function postImport2Excel(Request $request, $tableId) {
        $table = app('ClassTables')->getTable($tableId);
        $file = $request->file('import');
        $filename = $file->getClientOriginalName();
        //get data on import file
        $excelData = \Excel::load($file, function ($reader) {
                    config(['excel.import.startRow' => 1]);
                    $results = $reader->get();
                })->get();
        $data      = json_decode(json_encode($excelData), true);
     
        $result = app('EntityCommon')->insertData($table->name, $data, true);
        
        return back();
    }

    public function export2Excel(Request $request, $tableId) {
        $table     = app('ClassTables')->getTable($tableId);
        $columns   = app('ClassTables')->getColumnByTableId($tableId);
        $rowsQuery = app('ClassTables')->getRowsByConditions($table, $columns, $request, true);
        // dd($rowsQuery);
        //convert array protect to array
        $rows      = json_decode(json_encode($rowsQuery), true);
        $sheetData = [];
        //add header 2 data
        $header = ['STT'];
        foreach ($columns as $col) {
            if ($col->edit == 1) {
                $header[] = $col->display_name;
            }
        }
        $sheetData[] = $header;
        //add all row 2 data
        foreach ($rows as $index => $row) {
            $item = [];
            foreach ($columns as $col) {
                $item[] = $row[$col->name];
            }
            $sheetData[] = $item;
        }
        \Excel::create('Filename', function ($excel) use ($sheetData) {
            $excel->sheet('data', function ($sheet) use ($sheetData) {
                // Won't auto generate heading columns
                $sheet->fromArray($sheetData, null, 'A1', false, false);

                //config header
                $sheet->row(1, function ($row) {
                    // call cell manipulation methods
                    $row->setBackground('#247cba');
                    $row->setFontColor('#ffffff');
                    $row->setFontWeight('bold');
                });
                $sheet->setAutoSize(true);
            });

        })->export('xls');
    }
}
