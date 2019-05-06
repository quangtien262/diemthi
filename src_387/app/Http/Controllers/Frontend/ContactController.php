<?php

namespace App\Http\Controllers\Frontend;


use App\Model\category;
use App\Model\contact;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller {

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
    public function contact() {
        return view('frontend.Contact.contact');
    }

}
