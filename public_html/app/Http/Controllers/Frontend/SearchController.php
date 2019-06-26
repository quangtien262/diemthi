<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\LandingPage;
use App\Model\LandingPageItem;
use App\Model\DiemThiThpt;
use App\Model\Ts10;
use App\Model\TuyenSinh;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;

class SearchController extends Controller
{
    public function searchThpt(Request $request)
    {
        $data = DiemThiThpt::search($request);
        return view('frontend.pages.searchThpt', compact('data'));
        
    }
    public function searchTs10(Request $request)
    {
        $data = Ts10::search($request);
        return view('frontend.pages.search10',  compact('data'));
        
    }
    public function phoDiem(Request $request, $pId = 0)
    {
        $phodiem = app('EntityCommon')->getDataById('phodiem', intval($pId));
        $agent = new Agent();
        if($agent->isMobile()) {
            return view('frontend.element.home.phodiemMobile',  compact('phodiem'));
        } 
        return view('frontend.element.home.phodiem',  compact('phodiem'));
        
    }
}
