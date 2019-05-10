<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\LandingPage;
use App\Model\LandingPageItem;
use App\Model\DiemThiThpt;
use App\Model\TuyenSinh;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(!empty($request->sbd)) {
            $diemThiThpt = DiemThiThpt::search($request);
        }
        $banner = app('EntityCommon')->getDataById('banner', 1);
        $adTop = app('EntityCommon')->getDataById('ad_top', 1);
        $adRight = app('EntityCommon')->getRowsByConditions('ad_right');
        $news = app('EntityCommon')->getRowsByConditions('news_data');
        $config = app('EntityCommon')->getDataById('configweb', 1);

        return view('frontend.pages.home', compact('diemThiThpt', 'banner', 'adRight', 'adTop', 'news', 'config'));
    }
}
