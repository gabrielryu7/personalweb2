<?php

namespace App\Http\Controllers;

use App\Models\halaman;
use Illuminate\Http\Request;

class depanController extends Controller
{
    public function index()
    {
        
        return view('haldepan.index');
    }
}