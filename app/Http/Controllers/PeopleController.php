<?php

namespace App\Http\Controllers;

use App\Models\people;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$data = people::all();
        $data = people::orderBy('telephone', 'desc')->paginate(5);
        return view('people/index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('people/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('name', $request->name);
        Session::flash('telephone', $request->telephone);
        Session::flash('email', $request->email);
        $request->validate([
            'name'=>'required',
            'telephone' => 'required|numeric',
            'email' => 'required',
        ]);
        $data = [
            'name'=> $request->input('name'),
            'telephone'=> $request->input('telephone'),
            'email'=> $request->input('email'),
        ];
        people::create($data);
        return redirect('people')->with('success', 'Success add data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = people::where('telephone', $id)->first();
        return view('people/show')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = people::where('telephone', $id)->first();
        return view('people/edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'telephone' => 'required|numeric',
            'email' => 'required',
        ]); 
        $data = [
            'telephone' => $request->input('telephone'),
            'email' => $request->input('email'),
        ];
        people::where('name', $id)->update($data);
        return redirect('/people')->with('success', 'Success update data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        people::where('name', $id)->delete();
        return redirect('/people')->with('success', 'Success delete data');
    }
}
