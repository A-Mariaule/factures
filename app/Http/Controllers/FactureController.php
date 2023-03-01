<?php

namespace App\Http\Controllers;

use App\Models\Facture;
use Illuminate\Http\Request;
use App\Http\Requests\CreatePostRequest;

class FactureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Factures.index',['factures' => Facture::latest()->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("Factures.create",["facture" => new Facture()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreatePostRequest $request)
    {
        Facture::create($request->all());
        return redirect()->route('Factures.index')->with('success','Restaurant created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('Factures.show', ['facture' => Facture::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('factures.edit',['facture' => Facture::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreatePostRequest $request, string $id)
    {
        Facture::findOrFail($id)->update($request->all());
        return redirect()->route('factures.index')->with('success','Restaurant updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Facture::findOrFail($id)->delete();
        return redirect()->route('factures.index')->with('success','Restaurant deleted successfully.');
    }
}
