<?php

namespace App\Http\Controllers;

use App\Models\people;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    function index()
    {
        //$data = people::all();
        $data = people::orderBy('telephone', 'desc')->paginate(1);
        return view('people/index')->with('data', $data);
    }
    function detail($id)
    {
        //return"<h1> ini adalah test coba id $id</h1>";
        $data = people::where('telephone', $id)->first();
        return view('people/show')->with('data', $data);
    }

    function create(){

    }

    function delete(){
        
    }
}
