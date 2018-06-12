<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Infor;

class InforController extends Controller
{
    public function getInfor() {
        $infor = infor::all();
        return view('myInfor',['infor'=> $infor]);
    }
}
