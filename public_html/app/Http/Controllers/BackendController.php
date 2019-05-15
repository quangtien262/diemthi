<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
// use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class BackendController extends Controller
{
    use AuthorizesRequests, DispatchesJobs;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
           if(\Auth::check()) {
               return $next($request);
           }
           \Redirect::to(route('login'))->send();
        });
    }
}
