<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use App\Models\Travel;
use App\Http\Requests\Expenses\StoreRequest;
use App\Http\Requests\Expenses\UpdateRequest;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $expenses = Expense::paginate(4);
        return view('Dashboard/expenses/index', compact('expenses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $travels = Travel::pluck('id');
        return view('Dashboard/expenses/create',  compact('travels'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        Expense::create($request->all());
        return to_route('expenses.index')->with('status', 'Gasto Registrado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Expense $expense)
    {
        return view('Dashboard/expenses/show', compact('expense'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Expense $expense)
    {
        $travels = Travel::pluck('id');
        echo view ('Dashboard/expenses/edit',compact('expense', 'travels'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Expense $expense)
    {
        $expense->update($request->all());
        return to_route('expenses.index') -> with ('status' , 'Gasto Actualizado');
    }

    public function delete(Expense $expense)
    {
        echo view ('Dashboard/expenses/delete', compact('expense'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Expense $expense)
    {
        $expense->delete();
        return to_route('expenses.index')->with('status', 'Gasto Eliminado');
    }
}
