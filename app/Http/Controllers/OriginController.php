<?php

namespace App\Http\Controllers;

use App\Models\Origin;
use Illuminate\Http\Request;

class OriginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $origins = Origin::paginate(4);
        return view('Dashboard/origins/index', compact('origins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dashboard/origins/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Origin::create($request->all());
        return to_route('origins.index')->with('status', 'Origen Registrado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Origin $origin)
    {
        return view('Dashboard/origins/show', compact('origin'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Origin $origin)
    {
        echo view ('Dashboard/origins/edit',compact('origin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Origin $origin)
    {
        $origin->update($request->all());
        return to_route('origins.index') -> with ('status' , 'Origen Actualizado');
    }

    public function delete(Origin $origin){
        echo view ('Dashboard/origins/delete', compact('origin'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Origin $origin)
    {
        $origin->delete();
        return to_route('origins.index')->with('status', 'Origen Eliminado');
    }
}
