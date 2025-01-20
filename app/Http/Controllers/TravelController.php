<?php

namespace App\Http\Controllers;

use App\Models\Travel;
use App\Models\Origin;
use App\Models\Destination;
use Illuminate\Http\Request;

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
    public function store(Request $request)
    {
        $data = $request->all();

        if(isset($data["imagen"])){
            //Cambiar el nombre del archivo a cargar
            $data["imagen"] = $filename = time(). ".".$data["imagen"]->extension();
            //Guardar imagen en la carpeta pùblica
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Travel $travel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Travel $travel)
    {
        //
    }

    public function delete(Travel $travel){
        echo view ('Dashboard/travels/delete', compact('product'));
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Travel $travel)
    {
        //
    }
}
