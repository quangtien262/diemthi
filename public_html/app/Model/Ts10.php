<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Ts10 extends Model
{
    protected $table = 'tuyen_sinh_lop10';

    public static function search($request)
    {
        $data = new Ts10();
        if(!empty($request->sbd)) {
            $data = $data->where('sbd', 'like', '%'.$request->sbd.'%');
        }
        $data = $data->paginate(30);
        return $data;
    }
}
