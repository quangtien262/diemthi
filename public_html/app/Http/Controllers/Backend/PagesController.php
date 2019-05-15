<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\BackendController;
use Illuminate\Http\Request;

class PagesController extends BackendController
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        // var_dump(\Auth::check());
        return view('backend.pages.home');
    }
}
