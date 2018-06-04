<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function cook() {
        return view('cook');
    }
    public function about() {
        return view('about');
    }
    public function contact_cook() {
        return view('contact_cook');
    }
}
