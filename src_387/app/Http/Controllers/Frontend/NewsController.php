<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Model\News;

class NewsController extends Controller {

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function listNews($name, $id) {
        
        $listnews = news::where('category_id', '=', $id)->paginate(30);
        return view('frontend.news.listNews', [
            'listnews' => $listnews,
        ]);
    }

    public function detailNews($name, $id) {
        $detailNews = news::find($id);

        return view('frontend.news.detailNews', [
            'detailNews' => $detailNews,
        ]);

    }

}
