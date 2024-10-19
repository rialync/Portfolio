<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('home');
    }

    public function about() {
        return view('about');
    }

    public function contact() {
        return view('contact');
    }

    public function framework() {
        return view('laboratory.framework');
    }

    public function routing() {
        return view('laboratory.routing');
    }

    public function layout() {
        return view('laboratory.layout');
    }

    public function middleware() {
        return view('laboratory.middleware');
    }
}
