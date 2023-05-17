<?php

namespace App\Http\Controllers;

use App\Models\Todolist;
use Illuminate\Http\Request;

class TodolistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Todolist::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $todolist = new Todolist();
        //$todolist->something = $request->something;
        $todolist->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Todolist::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $todolist = Todolist::find($id);
        //$todolist->something = $request->something;
        $todolist->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $todolist = Todolist::find($id);
        return $todolist->delete();
    }
}
