<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class LandingPage extends Model
{
    protected $table = 'landing_page';

    public static function getLandingPageByCategoryId($categoryId = 0)
    {
        return self::select(
          'landing_page.name as landingPageName',
          'landing_page.id as landingPageId',
          'landing_page.image as landingPageImage'
          )
                ->where('landing_page.category_id', $categoryId)
                ->leftJoin('category', 'category.id', '=', 'landing_page.category_id')
                ->first();
    }
}
