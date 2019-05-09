<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\LandingPage;
use App\Model\LandingPageItem;
use App\Model\News;
use App\Model\Product;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::orderBy('sort_order', 'desc')->take(4)->get();
        $news = News::orderBy('sort_order', 'desc')->take(4)->get();
        $landingPage = LandingPage::getLandingPageByCategoryId(13);
        $landingPageItem = LandingPageItem::getByLandingPageId($landingPage->landingPageId);

        return view('frontend.pages.home', compact('landingPageItem', 'news', 'product'));
    }
}
