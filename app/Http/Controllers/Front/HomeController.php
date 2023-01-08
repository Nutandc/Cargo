<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('front.home.index');
    }

    public function language($key)
    {
        if ($key == 'en') {
            session()->put('locale', 'en');
        } else {
            session()->put('locale', 'tm');
        }
        return redirect()->back();
    }
}
