<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $destinations = Destination::paginate(4);
        return view('Dashboard/destinations/index', compact('destinations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dashboard/destinations/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Destination::create($request->all());
        return to_route('destinations.index')->with('status', 'Destino Registrado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Destination $destination)
    {
        return view('Dashboard/destinations/show', compact('destination'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Destination $destination)
    {
        echo view ('Dashboard/destinations/edit',compact('destination'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Destination $destination)
    {
        $destination->update($request->all());
        return to_route('destinations.index') -> with ('status' , 'Destino Actualizado');
    }

    public function delete(Destination $destination){
        echo view ('Dashboard/destinations/delete', compact('destination'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Destination $destination)
    {
        $destination->delete();
        return to_route('destinations.index')->with('status', 'Destino Eliminado');
    }
}
