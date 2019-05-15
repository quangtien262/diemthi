<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';

    public function  getCategoryByParentId(){
        return self::where('parent_id', 0)
                ->leftJoin('route', 'category.route_id', '=', 'route.id')
                ->select('category.name as categoryName', 'category.id as categoryId', 'route.route_name as routeName')
                ->orderBy('category.sort_order', 'asc')
                ->get();
    }
}
