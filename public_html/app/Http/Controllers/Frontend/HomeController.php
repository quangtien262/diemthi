<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\LandingPage;
use App\Model\LandingPageItem;
use App\Model\DiemThiThpt;
use App\Model\TuyenSinh;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;

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
        $adRight = app('EntityCommon')->getRowsByConditions('ad_right');
        $adTop = app('EntityCommon')->getDataById('ad_top', 1);
        $adBot = app('EntityCommon')->getDataById('ad_bot', 1);
        $news = app('EntityCommon')->getRowsByConditions('news_data', [], 10);
        $config = app('EntityCommon')->getDataById('configweb', 1);
        $phodiemCate =  app('EntityCommon')->getRowsByConditions('phodiem');
        $agent = new Agent();
        //get citys
        $citys = app('EntityCommon')->getRowsByConditions('citys');
        $htmlOptionCitys = '';
        foreach($citys as $city) {
            $htmlOptionCitys .= '<option value="'.$city->id.'">'.$city->name.'</option>';
        }
        //config mobile
        $classIconTab = '';
        $compact = compact('diemThiThpt', 'banner', 'adRight', 'adTop','adBot', 'news', 'config', 'agent', 'phodiem', 'classIconTab','htmlOptionCitys', 'phodiemCate');
        if($agent->isMobile()) {
            return view('frontend.pages.homeMobile', $compact);
            
        } 
        return view('frontend.pages.home', $compact);
        
    }
}
