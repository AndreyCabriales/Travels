<?php

namespace App\Http\Controllers;

use App\Models\Travel;
use App\Models\Origin;
use App\Models\Destination;
use App\Http\Requests\Travels\StoreRequest;
use App\Http\Requests\Travels\UpdateRequest;

class TravelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $travels = Travel::paginate(4);
        return view('Dashboard/travels/index', compact('travels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $origins = Origin::pluck('id','origin_city', 'origin_state', 'origin_country');
        $destinations = Destination::pluck('id','destination_city', 'destination_state', 'destination_country');
        return view('Dashboard/travels/create', compact('origins', 'destinations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $data = $request->all();

        if(isset($data["imagen"])){
            $data["imagen"] = $filename = time(). ".".$data["imagen"]->extension();
            $request->imagen->move(public_path("image/travels"), $filename);
        }

        Travel::create($data);
        return to_route('travels.index')->with('status', 'Viaje Registrado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Travel $travel)
    {
        return view('Dashboard/travels/show', compact('travel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Travel $travel)
    {
        $origins = Origin::pluck('id','origin_city', 'origin_state', 'origin_country');
        $destinations = Destination::pluck('id','destination_city', 'destination_state', 'destination_country');
        echo view ('Dashboard/travels/edit',compact('origins','destinations','travel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Travel $travel)
    {
        $data = $request->all();

        if(isset($data["imagen"])){
            $data["imagen"] = $filename = time(). ".".$data["imagen"]->extension();
            $request->imagen->move(public_path("image/travels"), $filename);
        }

        $travel->update($data);
        return to_route('travels.index') -> with ('status' , 'Viaje Actualizado');
    }

    public function delete(Travel $travel){
        echo view ('Dashboard/travels/delete', compact('travel'));
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Travel $travel)
    {
        $travel->delete();
        return to_route('travels.index')->with('status', 'Viaje Eliminado');
    }
}
