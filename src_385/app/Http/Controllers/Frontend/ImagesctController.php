<?php

namespace App\Http\Controllers\Frontend;


use App\Model\Imagesct;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
//         $html = '<ul class="navbar-nav mr-auto">';
//         $category = category::where('parent_id', 0)
//                 ->leftJoin('route', 'category.route_id', '=', 'route.id')
//                 ->select('category.name as cateName', 'category.id as cateId', 'route.route_name')
//                 ->orderBy('category.sort_order', 'asc')
//                 ->get();
//
//         foreach ($category as $value) {
//             $html .= ' <li class="nav-item dropdown">
//                         <a class="nav-link" href="/">' . $value->cateName . ' </a>';
//
//             $subcategory = category::where('parent_id', '=', $value->cateId)
//                     ->leftJoin('route', 'category.route_id', '=', 'route.id')
//                    ->select('category.name as cateName', 'category.id as cateId', 'route.route_name')
//                     ->orderBy('category.sort_order', 'asc')
//                     ->get();
//             $html .= '<ul class="dropdown-content">';
//            foreach ($subcategory as $submenu) {
//                $html .= '<li class="dropdown-item"><a href="">' . $submenu->cateName . '</a></li>';
//             }
//
//
//
//             $html .= '</ul>';
//             $html .= '</li>';
//         }
//
//         $html .= '</ul>';
//       
//
//
////          dd($category);
//        //          check lại phần category ko nhận link đư ?ng dần


       

        return view('frontend.home');
    }

}
