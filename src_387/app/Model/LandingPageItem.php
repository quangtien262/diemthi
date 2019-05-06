<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class LandingPageItem extends Model
{
    protected $table = 'landing_page_item';

    public static function getByLandingPageId($landingPageId = 0)
    {
        return self::where('landing_page_id', $landingPageId)
            ->leftJoin('block', 'landing_page_item.block_id', '=', 'block.id')
            ->orderBy('landing_page_item.sort_order', 'asc')
            ->get();
    }
}
