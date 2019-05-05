<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Bds extends Model
{
    protected $table = 'bds';

    public static function getListBds($categoryId = 0, $phuongXaId = 0, $search = [])
    {
        $result = Bds::select([
            'bds.id as bdsId',
            'bds.name as bdsName',
            'bds.dien_tich as dienTich',
            'bds.price as price',
            'bds.images as images',
            'bds.updated_at as  ',
            'quan_huyen.name as quanHuyen',
            'quan_huyen.id as quanHuyenId',
            'phuong_xa.name as phuongXa',
            'phuong_xa.id as phuongXaId',
            'bds_ban.name as bdsBan',
            'bds_thue.name as bdsThue',
            'huong_nha.name as huongNha',
        ])
            ->leftJoin('quan_huyen', 'quan_huyen.id', 'bds.quan_huyen')
            ->leftJoin('phuong_xa', 'phuong_xa.id', 'bds.phuong_xa_id')
            ->leftJoin('bds_ban', 'bds_ban.id', 'bds.bds_ban_id')
            ->leftJoin('bds_thue', 'bds_thue.id', 'bds.bds_thue_id')
            ->leftJoin('huong_nha', 'huong_nha.id', 'bds.huong_nha')
            ->orderBy('bds.id', 'desc');
        if (!empty($categoryId)) {
            $result = $result->where('category_id', $categoryId);
        }
        if (!empty($phuongXaId)) {
            $result = $result->where('phuong_xa_id', $phuongXaId);
        }
        //search
        if (!empty($search->ban)) {
            $result = $result->where('bds_ban_id', $search->ban);
        }
        if (!empty($search->thue)) {
            $result = $result->where('bds_thue_id', $search->thue);
        }
        if (!empty($search->quanhuyen)) {
            $result = $result->where('bds.quan_huyen', $search->quanhuyen);
        }
        if (!empty($search->phuongxa)) {
            $result = $result->where('phuong_xa_id', $search->phuongxa);
        }
        if (!empty($search->huong)) {
            $result = $result->where('huong_nha', $search->huong);
        }
        if (!empty($search->dientich)) {
            $dientich = app('EntityCommon')->getDataById('dien_tich', $search->dientich);
            $result = $result->where('dien_tich', '>=', $dientich->start)
                ->where('dien_tich', '<=', $dientich->end);
        }
        if (!empty($search->price)) {
            $price = app('EntityCommon')->getDataById('khoang_gia', $search->price);
            $result = $result->where('price', '>=', $price->start)
                ->where('price', '<=', $price->end);
        }
        if (!empty($search->phongngu)) {
            $phongngu = app('EntityCommon')->getDataById('so_phong', $search->phongngu);
            $result = $result->where('so_phong_ngu', '>=', $phongngu->value);
        }
        if (!empty($search->mattien)) {
            $mattien = app('EntityCommon')->getDataById('mat_tien', $search->mattien);
            $result = $result->where('mat_tien', '>=', $mattien->value);
        }
        $result = $result->paginate(30);
        return $result;
    }

    public static function getBdsById($id = 0)
    {
        $result = Bds::select([
            'bds.id as bdsId',
            'bds.name as bdsName',
            'bds.*',
            'bds.updated_at as  ',
            'quan_huyen.name as quanHuyen',
            'quan_huyen.id as quanHuyenId',
            'phuong_xa.name as phuongXa',
            'phuong_xa.id as phuongXaId',
            'bds_ban.name as bdsBan',
            'bds_thue.name as bdsThue',
            'huong_nha.name as huongNha',
        ])
            ->leftJoin('quan_huyen', 'quan_huyen.id', 'bds.quan_huyen')
            ->leftJoin('phuong_xa', 'phuong_xa.id', 'bds.phuong_xa_id')
            ->leftJoin('bds_ban', 'bds_ban.id', 'bds.bds_ban_id')
            ->leftJoin('bds_thue', 'bds_thue.id', 'bds.bds_thue_id')
            ->leftJoin('huong_nha', 'huong_nha.id', 'bds.huong_nha')
            ->orderBy('bds.id', 'desc')
            ->find($id);
        return $result;
    }
}
