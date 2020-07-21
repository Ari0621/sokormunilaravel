<?php

namespace App\Http\Controllers;

use App\size;
use Illuminate\Http\Request;

class SizessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sizes = Sizess::all();
        return view('sizes.index')->with(compact("sizes"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sizes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',  
        ]); 

        Sizes::create($request->all()); 

        return redirect()->route('sizes.index')
            ->with('success', 'sizes created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\size  $size
     * @return \Illuminate\Http\Response
     */
    public function show(size $size)
    {
        return view('sizes.detail', compact('sizes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\size  $size
     * @return \Illuminate\Http\Response
     */
    public function edit(size $size)
    {
        return view('sizes.edit', compact('sizes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\size  $size
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, size $size)
    {
        $request->validate([
            'name' => 'required',  
        ]); 

        $sizes->update($request->all()); 

        return redirect()->route('sizes.index')
            ->with('success', 'sizes updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\size  $size
     * @return \Illuminate\Http\Response
     */
    public function destroy(size $size)
    {
        $sizes->delete(); 
        return redirect()->route('sizes.index')
            ->with('success', 'sizes deleted successfully'); 
    }
}
