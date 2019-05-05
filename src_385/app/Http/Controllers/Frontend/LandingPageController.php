<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\LandingPage;
use App\Model\LandingPageItem;

class LandingPageController extends Controller {

    public function singleLandingPage($name, $cateId) {
        // $category = app('EntityCommon')->getDataById('category', $cateId);
        $landingPage     = LandingPage::getLandingPageByCategoryId($cateId);
        $landingPageItem = LandingPageItem::getByLandingPageId($landingPage->landingPageId);

        return view('frontend.home', compact('landingPageItem'));
    }
}
