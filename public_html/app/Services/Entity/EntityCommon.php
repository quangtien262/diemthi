<?php

namespace App\Services\Entity;

use Illuminate\Support\Facades\DB;

class EntityCommon
{
    public function getCountData($tblName)
    {
        return DB::table($tblName)->count();
    }

    /*
     * get data of table
     * $tblName: table name
     * $conditions: array condition, ex: ['id' => 1,]
     * $limit:  $limit = 0: get all item
     *          $limit = 1: get first item
     *          $limit > 1: get by $limit
     * $order: sort order
     */

    public function getRowsByConditions($tblName, $conditions = [], $limit = 0, $order = ['sort_order', 'asc'], $whereInConditions = [])
    {
        //select table
        $data = DB::table($tblName);
        //where condition if exist conditions
        foreach ($conditions as $colName => $colValue) {
            $data = $data->where($colName, $colValue);
        }
        //wherein conditions if exist conditions
        if (!empty($whereInConditions)) {
            foreach ($whereInConditions as $key => $val) {
                $data = $data->whereIn($key, $val);
            }
        }
        $data = $data->orderBy($order[0], $order[1]);
        //Check for the count of data
        if ($limit == 0) {
            $data = $data->get();
        } elseif ($limit == 1) {
            $data = $data->first();
        } else {
            $data = $data->paginate($limit);
        }

        return $data;
    }

    public function getDataById($tblName, $id)
    {
        $tableData = DB::table($tblName)->where('id', $id)->first();

        return $tableData;
    }

    public function getDataByIds($tblName, $ids)
    {
        $tableData = DB::table($tblName)->whereIn('id', $ids)->get();

        return $tableData;
    }

    public function getAllDataPaginate($tblName, $columnOrder = 'sort_order', $orderBy = 'asc', $limit = 30)
    {
        $tableData = DB::table($tblName)->orderBy($columnOrder, $orderBy)->paginate($limit);

        return $tableData;
    }

    public function getIdAndNameTable($tblName, $collumnName = 'name')
    {
        $result = [];
        $tableData = DB::table($tblName)->orderBy('sort_order', 'asc')->get();
        foreach ($tableData as $data) {
            $result[$data->id] = $data->$collumnName;
        }

        return $result;
    }

    public function deleteTable($tblName, $id)
    {
        try {
            DB::table($tblName)->where('id', $id)->delete();

            return RETURN_SUCCESS;
        } catch (\Exception $e) {
            return RETURN_ERROR;
        }
    }

    public function searchDataByKeyword($tblName, $columnName, $keyword)
    {
        $result = [];
        if (!empty($keyword)) {
            $result = DB::table($tblName)->where($columnName, 'like', "%{$keyword}%")
                ->limit(20)
                ->orderBy($columnName, 'asc')
                ->get();
        }

        return $result;
    }

    public function getCountByConditions($tblName, $conditions)
    {
        $result = DB::table($tblName);

        if (!empty($conditions)) {
            foreach ($conditions as $key => $val) {
                $result = $result->where($key, $val);
            }
        }

        $result = $result->count();

        return $result;
    }

    public function getFirstDataByColumnName($tblName, $columnName, $columnValue, $orderBy = 'desc', $columnOrder = 'id')
    {
        $result = DB::table($tblName)->where($columnName, $columnValue)
            ->orderBy($columnOrder, $orderBy)
            ->first();

        return $result;
    }

    /*
     * insert
     * $tblName: table name
     * $data: data insert, ex: ['column_name' => 'value insert',]
     */

    public function insertData($tblName, $data, $multipleData = false)
    {
        if(!$multipleData) {
            $data['created_at'] = date('Y-m-d h:i:s');
            $data['updated_at'] = $data['created_at'];
        }
        $result = DB::table($tblName)->insert($data);

        return $result;
    }

    public function updateData($tblName, $dataId, $data)
    {
        $data['updated_at'] = date('Y-m-d h:i:s');
        $result = DB::table($tblName)->where('id', $dataId)->update($data);

        return $result;
    }

    public function updateSortOrder($tblName, $listId, $parentId = 0)
    {
        $idx = 0;
        try {
            \DB::beginTransaction();
            foreach ($listId as $i => $id) {
                ++$idx;
                $result = DB::table($tblName)
                    ->where('id', $id['id'])
                    ->update([
                        'sort_order' => $idx,
                        'parent_id' => intval($parentId),
                    ]);
                if (isset($id['children'])) {
                    self::updateSortOrder($tblName, $id['children'], $id['id']);
                }
            }
            \DB::commit();

            return RETURN_SUCCESS;
        } catch (\Exception $exc) {
            \DB::rollback();
            echo $exc->getTraceAsString();

            return RETURN_ERROR;
        }
    }

    public function htmlListData($tblName, $routeEdit, $routeDelete, $parentId = 0, $popup = true, $conditions = [])
    {
        $list = DB::table($tblName)->where('parent_id', $parentId);
        if (!empty($conditions)) {
            foreach ($conditions as $collumn => $value) {
                $list = $list->where($collumn, $value);
            }
        }
        $list = $list->orderBy('sort_order', 'asc')->get();
        $htmlList = '';
        if (count($list) > 0) {
            $htmlList .= '<ol class="dd-list">';
            foreach ($list as $item) {
                $img = '';

                if ($tblName != \TblName::BLOCK_LANDINGPAGE) {
                    $tblData = DB::table($tblName.'_data')->where($tblName.'_id', $item->id)->get();
                    $name_arr = [];
                    foreach ($tblData as $data) {
                        $name_arr[] = $data->name;
                    }
                    $name = implode(' - ', $name_arr);
                } else {
                    $name = $item->name;
                    $img = '<a href="/img/template/'.$item->landing_page_id.'.png" data-gallery="" title="Block 01"><i data-pack="default" class="ion-image"></i></a>&nbsp;&nbsp;';
                }

                if ($routeEdit == 'editLandingPage') {
                    $urlEdit = route($routeEdit, [$item->news_id, $item->landing_page_id, $item->id]);
                } else {
                    $urlEdit = route($routeEdit, [$item->id]);
                }

                if ($popup == true) {
                    $even = ' onclick="loadPopupLarge(\''.$urlEdit.'\')" data-toggle="modal" data-target=".bs-modal-lg" ';
                } else {
                    $even = ' href="'.$urlEdit.'" ';
                }

                $manager = '';
                $linkManager = '';
                if (isset($item->route_name)) {
                    if ($item->route_name == 'landingPage01') {
                        $linkManager = route('editLandingPage', [$item->id]);
                    } elseif ($item->route_name == 'listNews' || $item->route_name == 'listNews02') {
                        $linkManager = route('adminListNews').'?categoryID='.$item->id;
                    } elseif ($item->route_name == 'singleNews') {
                        $news = app('ClassNews')->getFirstRowByCategoryId($item->id);
                        if (isset($news->id)) {
                            $newsId = $news->id;
                        } else {
                            $newsId = 0;
                        }
                        $linkManager = route('editNews', [$newsId]).'?cateID='.$item->id;
                    }
                }
                if ($linkManager != '') {
                    $manager = '<a href="'.$linkManager.'" title="Quản lý nội dung"><i data-pack="default" class="ion-gear-b"></i></a>&nbsp;&nbsp;';
                }

                $htmlList .= '<li data-id="'.$item->id.'" class="dd-item">'
                .'<div class="option-menu">'
                .'<a '.$even.' title="Sửa"><i data-pack="default" class="ion-edit"></i></a>&nbsp;&nbsp;'
                .$manager
                .$img
                .'<a onclick="deleteRow(\''.url(route($routeDelete, [$item->id])).'\')"  tabindex="-1"  title="Xóa"><i data-pack="default" class="ion-trash-a"></i></a>&nbsp;&nbsp;</div>'
                    .'<div class="card b0 dd-handle"><div class="mda-list">'
                    .'<div class="mda-list-item"><div class="mda-list-item-icon item-grab"><em class="ion-drag icon-lg"></em></div>'
                    .'<div class="mda-list-item-text mda-2-line">';
                $htmlList .= '<h4>'.$name.' </h4>';
                $htmlList .= '</div><div class="_right">'.'</div></div></div></div>';
                $subMenu = DB::table($tblName)->where('parent_id', $item->id)->count();
                if ($subMenu > 0) {
                    $htmlList .= self::htmlListData($tblName, $routeEdit, $routeDelete, $item->id, $popup, $conditions);
                }
                $htmlList .= '</li>';
            }
            $htmlList .= '</ol>';
        }

        return $htmlList;
    }

    public function getHtmpOptionByTable($tableName, $keyword = '')
    {
        $html = '';
        if (!empty($keyword)) {
            $html .= '<option value="0">'.$keyword.'</option>';
        }

        $data = DB::table($tableName)->orderBy('sort_order', 'asc')->get();
        foreach ($data as $d) {
            $html .= '<option value="'.$d->id.'">'.$d->name.'</option>';
        }

        return $html;
    }



}
