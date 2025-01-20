<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\Client;
use App\Models\Travel;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sales = Sale::paginate(4);
        return view('Dashboard/sales/index', compact('sales'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clients = Client::pluck('id');
        $travels = Travel::pluck('id');
        return view('Dashboard/sales/create', compact('clients', 'travels'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Sale::create($request->all());
        return to_route('sales.index')->with('status', 'Venta Registrada');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sale $sale)
    {
        return view('Dashboard/sales/show', compact('sale'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sale $sale)
    {
        $clients = Client::pluck('id');
        $travels = Travel::pluck('id');
        echo view ('Dashboard/sales/edit',compact('clients','travels','sale'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sale $sale)
    {

        $sale->update($request->all());
        return to_route('sales.index') -> with ('status' , 'Venta Actualizado');
    }

    public function delete(Sale $sale){
        echo view ('Dashboard/sales/delete', compact('sale'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sale $sale)
    {
        $sale->delete();
        return to_route('sales.index')->with('status', 'Venta Eliminada');
    }
}
