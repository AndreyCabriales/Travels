<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::paginate(4);
        return view('Dashboard/clients/index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dashboard/clients/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        if(isset($data["identify"])){
            $data["identify"] = $filename = time(). ".".$data["identify"]->extension();
            $request->identify->move(public_path("image/clients"), $filename);
        }

        Client::create($data);
        return to_route('clients.index')->with('status', 'Cliente Registrado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        return view('Dashboard/clients/show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        echo view ('Dashboard/clients/edit',compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        $data = $request->all();

        if(isset($data["identify"])){
            $data["identify"] = $filename = time(). ".".$data["identify"]->extension();
            $request->identify->move(public_path("image/clients"), $filename);
        }

        $client->update($data);
        return to_route('clients.index') -> with ('status' , 'Cliente Actualizado');
    }

    public function delete(Client $client){
        echo view ('Dashboard/clients/delete', compact('client'));
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return to_route('clients.index')->with('status', 'Cliente Eliminado');
    }
}
