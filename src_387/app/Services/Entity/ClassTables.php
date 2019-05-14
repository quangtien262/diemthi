<?php

namespace App\Services\Entity;

use App\Model\Tables;
use App\Model\TablesColumn;
use Illuminate\Support\Facades\DB;

class ClassTables
{
    public function getAllTables()
    {
        return Tables::all();
    }

    public function getTable($id)
    {
        return Tables::find($id);
    }

    public function getTableByName($name)
    {
        return Tables::where('name', $name)->first();
    }

    public function getColumn($id)
    {
        return TablesColumn::find($id);
    }

    public function getColumnByTableId($tableId)
    {
        return TablesColumn::where('table_id', $tableId)->orderBy('sort_order', 'asc')->get();
    }

    public function saveTable($id, $request)
    {
        if ($id > 0) {
            $tables = Tables::find($id);
        } else {
            $tables = new Tables();
        }
        if (isset($request['import'])) {
            $tables->import = $request['import'];
        }
        if (isset($request['export'])) {
            $tables->export = $request['export'];
        }
        $tables->count_item_of_page = $request['count_item_of_page'];
        $tables->display_name = $request['display_name'];
        $tables->model_name = $request['model_name'];
        $tables->type_show = $request['table_type_show'];
        $tables->is_edit = $request['table_edit'];
        $tables->name = $request['table_name'];
        $tables->form_data_type = $request['form_data_type'];
        $tables->save();

        return $tables;
    }

    public function saveColumn($request)
    {
        if (!empty($request['column_id'])) {
            $block = TablesColumn::find($request['column_id']);
        } else {
            $block = new TablesColumn();
        } 
        
        $block->name = $request['column_name'];
        $block->display_name = $request['display_name'];
        $block->type = $request['column_type'];
        $block->type_edit = $request['type_edit'];
        $block->max_length = $request['max_length'];
        $block->fast_edit = isset($request['fast_edit']) ? $request['fast_edit'] : 0;
        $block->require = isset($request['require']) ? $request['require'] : 0;
        $block->edit = isset($request['edit']) ? $request['edit'] : 0;
        $block->show_in_list = isset($request['show_in_list']) ? $request['show_in_list'] : 0;
        $block->add2search = isset($request['add2search']) ? $request['add2search'] : 0;
        $block->table_id = intval($request['table_id']);
        $block->select_table_id = intval($request['select_table_id']);
        $block->value_default = $request['value_default'];
        $block->conditions = $request['conditions'];
        $block->save();

        return $block;
    }

    public function createDefaultColumn($tableId)
    {
        $datas = [
            [
                'name' => 'id',
                'table_id' => $tableId,
                'display_name' => 'ID',
                'type_edit' => 'text',
                'edit' => 0,
                'type' => 'INT',
                'value_default' => '',
                'show_in_list' => 0,
                'require' => 0,
                'is_null' => 1,
                'add2search' => 0,
                'search_type' => 1,
                'parent_id' => 0,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
                'select_table_id' => 0,
            ],
            [
                'name' => 'name',
                'table_id' => $tableId,
                'display_name' => 'Tiêu đề',
                'type_edit' => 'text',
                'edit' => 1,
                'type' => 'VARCHAR',
                'value_default' => '',
                'max_length' => 255,
                'show_in_list' => 1,
                'require' => 0,
                'is_null' => 1,
                'add2search' => 0,
                'search_type' => 1,
                'parent_id' => 0,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
                'select_table_id' => 0,
            ],
            [
                'name' => 'parent_id',
                'table_id' => $tableId,
                'display_name' => 'Danh mục cha',
                'type_edit' => 'text',
                'edit' => 0,
                'type' => 'INT',
                'value_default' => 0,
                'show_in_list' => 0,
                'require' => 0,
                'is_null' => 1,
                'add2search' => 0,
                'search_type' => 1,
                'parent_id' => 0,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
                'select_table_id' => 0,
            ],
            [
                'name' => 'sort_order',
                'table_id' => $tableId,
                'display_name' => 'Thứ tự sắp sếp',
                'type_edit' => 'text',
                'edit' => 0,
                'type' => 'INT',
                'value_default' => 0,
                'show_in_list' => 0,
                'require' => 0,
                'is_null' => 1,
                'add2search' => 0,
                'search_type' => 1,
                'parent_id' => 0,
                'select_table_id' => 0,
            ],
        ];
        foreach ($datas as $data) {
            $result = app('EntityCommon')->insertData('table_column', $data);
        }

        return $result;
    }

    public function deleteTable($tableId)
    {
        return Tables::find($tableId)->delete();
    }

    public function deleteColumn($columnId)
    {
        return TablesColumn::find($columnId)->delete();
    }

    public function getRowsByConditions($table, $columns, $request, $unlimit = false)
    {
        //select table
        $data = DB::table($table->name);
        //where condition if exist conditions
        foreach ($columns as $col) {
            if ($col['add2search'] == 1 && !empty($request[$col->name])) {
                // $conditions[$col->name] = $request[$col->name];
                switch ($col->search_type) {
                    case '2':
                        $data = $data->where($col->name, '=', $request[$col->name]);
                        break;
                    case '3':
                        $data = $data->where($col->name, '!=', $request[$col->name]);
                        break;
                    case '4':
                        $data = $data->where($col->name, 'like', '%'.$request[$col->name]);
                        break;
                    case '5':
                        $data = $data->where($col->name, 'like', $request[$col->name].'%');
                        break;
                    case '6':
                        $data = $data->whereBetween($col->name, [$request[$col->name.'01'], $request[$col->name.'02']]);
                        break;
                    default:
                        //case = 1 or other
                        $data = $data->where($col->name, 'like', '%'.$request[$col->name].'%');
                        break;
                }
            }
        }
        //The count of data
        if($unlimit) {
            $data = $data->get();
        } else {
            $data = $data->paginate($table->count_item_of_page);
        }

        return $data;
    }

    public function getHtmlMenuAdmin($parentId = 0)
    {
        $html = '';
        $conditions = [
            'is_edit' => 1,
            'parent_id' => $parentId,
        ];
        $order = ['sort_order', 'asc'];
        $tables = app('EntityCommon')->getRowsByConditions('tables', $conditions, 0, $order);
        if (count($tables) > 0) {
            $html .= '<ul>';
            foreach ($tables as $table) {
                
                $subdata = self::getHtmlMenuAdmin($table->id);
                if ($subdata != '') {
                    $icon = '<span class="nav-icon"><em class="ion-android-arrow-dropdown" style="font-size: 18px;line-height: 25px;"></em></span>';
                    $countData = '';
                } else {
                    $icon = '<span class="nav-icon"><em class="ion-arrow-right-b" style="font-size: 12px;line-height: 25px;"></em></span>';
                    $countData = app('EntityCommon')->getCountData($table->name);  
                }
                $html .= '<li>
                        <a class="ripple" href="'.route('listDataTbl', [$table->id]).'">
                            <span class="pull-right nav-label">
                                <span class="badge bg-success">'.$countData.'</span>
                            </span>
                            '.$icon.'
                            <span>'.$table->display_name.'</span>
                        </a>';

                $html .= $subdata;

                $html .= '</li>';
            }
            $html .= '</ul>';
        }

        return $html;
    }

    public function getHtmlSelectForTable($name, $tblRowId, $selectedId = 0, $multiple = false, $conditionsJson = '')
    {
        if ($multiple) {
            $html = '<select multiple class="form-control" name="'.$name.'">';
        } else {
            $html = '<select class="form-control" name="'.$name.'"><option value="0">Chọn</option>';
        }
        $conditions = [];
        if (!empty($conditionsJson)) {
            $conditions = json_decode($conditionsJson);
        }
        // dd( $conditions);
        $table = self::getTable($tblRowId);
        if (!empty($table)) {
            $tableData = app('EntityCommon')->getRowsByConditions($table->name, $conditions, 0, $order = ['sort_order', 'asc']);
            foreach ($tableData as $data) {
                $selected = '';
                if ($data->id == $selectedId) {
                    $selected = 'selected="selected"';
                }
                $html .= '<option '.$selected.' value="'.$data->id.'">'.$data->name.'</option>';
            }
        }
        $html .= '</select>';

        return $html;
    }

    ////apply for all table have config in table tables
    public function getHtmlListDragDrop($table, $parentId = 0, $conditions = [], $type = 'default')
    {
        $html = '';
        $conditions['parent_id'] = $parentId;
        $order = ['sort_order', 'asc'];
        $tableData = app('EntityCommon')->getRowsByConditions($table->name, $conditions, $limit = 0, $order);

        if (!empty($tableData)) {
            $html = '<ol class="dd-list">';
            foreach ($tableData as $td) {
                $img = '';
                if (!empty($td->image)) {
                    $img = '<div class="mda-list-item-icon"><img style="height:40px" src="'.$td->image.'"/></div>';
                }
                switch ($type) {
                    case 'landingPage':
                        $edit = '<a onclick="loadDataPopup(\''.route('adminEditBlock', [$td->landing_page_id, $td->block_id, $td->id]).'\')" data-toggle="modal" data-target=".bs-modal-lg"><i class="ion-edit"></i></a>';
                        break;
                    default:
                        $edit = '<a onclick="loadDataPopup(\''.route('formRow', [$table->id, $td->id]).'\')" data-toggle="modal" data-target=".bs-modal-lg"><i class="ion-edit"></i></a>';
                        if ($table->form_data_type == 1) {
                            $edit = '<a href="'.route('formRow', [$table->id, $td->id]).'"><i class="ion-edit"></i></a>';
                        }
                        break;
                }

                $html .= '<li class="dd-item" data-id="'.$td->id.'">
                            <div class="card b0 dd-handle">
                                <div class="mda-list">
                                    <div class="mda-list-item">
                                        <div class="mda-list-item-icon item-grab" style="padding-top: 9px;">
                                            <em class="ion-drag icon-lg"></em>
                                        </div>
                                        '.$img.'
                                        <div class="mda-list-item-text mda-2-line">
                                            <h3>'.$td->name.'</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="option-dd">
                                &nbsp;
                                '.$edit.'
                                &nbsp;
                                <a href="'.route('deleteRow', [$table->id, $td->id]).'"><i class="ion-trash-a"></i></a>
                            </div>';
                // check sub data
                $subData = DB::table($table->name)->where('parent_id', $td->id)->count();
                if ($subData > 0) {
                    $html .= self::getHtmlListDragDrop($table, $td->id);
                }
                $html .= '</li>';
            }
            $html .= '</ol>';
        }

        return $html;
    }

    //apply for table tables
    public function getHtmlListTable($parentId = 0)
    {
        $html = '';
        $conditions = ['parent_id' => $parentId];
        $order = ['sort_order', 'asc'];
        $tableData = app('EntityCommon')->getRowsByConditions('tables', $conditions, 0, $order);

        if (!empty($tableData)) {
            $html = '<ol class="dd-list">';
            foreach ($tableData as $td) {
                $img = '';
                if (!empty($td->image)) {
                    $img = '<div class="mda-list-item-icon"><img style="height:40px" src="'.$td->image.'"/></div>';
                }
                $html .= '<li class="dd-item" data-id="'.$td->id.'">
                            <div class="card b0 dd-handle">
                                <div class="mda-list">
                                    <div class="mda-list-item">
                                        <div class="mda-list-item-icon item-grab" style="padding-top: 9px;">
                                            <em class="ion-drag icon-lg"></em>
                                        </div>
                                        '.$img.'
                                        <div class="mda-list-item-text mda-2-line">
                                            <h3>'.$td->name.' - '.$td->display_name.'</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="option-dd">
                                &nbsp;
                                <a href="'.route('configTbl_edit', [$td->id]).'"><i class="ion-edit"></i></a>
                                &nbsp;
                                <a href="'.route('deleteTable', ['table' => $td->id]).'"><i class="ion-trash-a"></i></a>
                            </div>';
                // check sub data
                $subData = DB::table('tables')->where('parent_id', $td->id)->count();
                if ($subData > 0) {
                    $html .= self::getHtmlListTable($td->id);
                }
                $html .= '</li>';
            }
            $html .= '</ol>';
        }

        return $html;
    }

    //apply for table table_column
    public function getHtmlListColumn($tableId, $parentId = 0)
    {
        $html = '';
        $conditions = ['parent_id' => $parentId, 'table_id' => $tableId];
        $order = ['sort_order', 'asc'];
        $tableData = app('EntityCommon')->getRowsByConditions('table_column', $conditions, 0, $order);

        if (!empty($tableData)) {
            $html = '<ol class="dd-list">';
            foreach ($tableData as $td) {
                $img = '';
                if (!empty($td->image)) {
                    $img = '<div class="mda-list-item-icon"><img style="height:40px" src="'.$td->image.'"/></div>';
                }
                $html .= '<li class="dd-item" data-id="'.$td->id.'">
                            <div class="card b0 dd-handle">
                                <div class="mda-list">
                                    <div class="mda-list-item">
                                        <div class="mda-list-item-icon item-grab" style="padding-top: 9px;">
                                            <em class="ion-drag icon-lg"></em>
                                        </div>
                                        '.$img.'
                                        <div class="mda-list-item-text mda-2-line">
                                            <h3>'.$td->name.' - '.$td->display_name.'</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="option-dd">
                                &nbsp;
                                <a href="'.route('configTbl_edit', [$tableId, 'column' => $td->id]).'"><i class="ion-edit"></i></a>
                                &nbsp;
                                <a href="'.route('deleteColumn', ['table' => $tableId, 'column' => $td->id]).'"><i class="ion-trash-a"></i></a>
                            </div>';
                // check sub data
                $subData = DB::table('table_column')
                    ->where('parent_id', $td->id)
                    ->where('table_id', $tableId)
                    ->count();
                if ($subData > 0) {
                    $html .= self::getHtmlListTable($tableId, $td->id);
                }
                $html .= '</li>';
            }
            $html .= '</ol>';
        }

        return $html;
    }
}
