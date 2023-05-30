<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    //
    function index(){

        return view("halaman/index");

    }
    function about(){
        return view("halaman/index");
    }
    function contact(){
        return view("halaman/index");
    }
}