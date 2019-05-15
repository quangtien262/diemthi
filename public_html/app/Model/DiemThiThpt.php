<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DiemThiThpt extends Model
{
    protected $table = 'diem_thi_thpt';

    public static function search($request)
    {
        $data = new DiemThiThpt();
        if(!empty($request->sbd)) {
            $data = $data->where('sobaodanh', 'like', '%'.$request->sbd.'%');
        }
        $data = $data->paginate(30);
        return $data;
    }
}
