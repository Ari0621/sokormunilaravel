<?php

namespace App\Http\Controllers;

use App\material;
use Illuminate\Http\Request;

class MaterialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materials = Materials::all();
        return view(' materials.index')->with(compact("materials"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('materials.create');
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

        Materials::create($request->all()); 

        return redirect()->route('materials.index')
            ->with('success', 'materials created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\material  $material
     * @return \Illuminate\Http\Response
     */
    public function show(material $material)
    {
        return view('materials.detail', compact('materials'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\material  $material
     * @return \Illuminate\Http\Response
     */
    public function edit(material $material)
    {
        return view('materials.edit', compact('materials'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\material  $material
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, material $material)
    {
        $request->validate([
            'name' => 'required', 
        ]); 

        $materials->update($request->all()); 

        return redirect()->route('materials.index')
            ->with('success', 'materials updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\material  $material
     * @return \Illuminate\Http\Response
     */
    public function destroy(material $material)
    {
        $materials->delete(); 
        return redirect()->route('materials.index')
            ->with('success', 'materials deleted successfully'); 
    }
}
