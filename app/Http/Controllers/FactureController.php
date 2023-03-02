<?php

namespace App\Http\Controllers;

use App\Models\Facture;
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
        Facture::create([
            'Réf'=>$request['Réf'],
            'Titre'=>$request['Titre'],
            'Prix'=>$request['Prix'],
            'TVA'=>$request['TVA'],
            'Total'=>$request['Prix'] + (($request['Prix'] * $request['TVA'] / 100)),
            'Client'=>$request['Client'],
            'created_at'=>$request['created_at'],
            'updated_at'=>$request['updated_at'],
        ]);
        return redirect()->route('Factures.index')->with('success','Facture created successfully.');
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
        Facture::findOrFail($id)->update([
            'Réf'=>$request['Réf'],
            'Titre'=>$request['Titre'],
            'Prix'=>$request['Prix'],
            'TVA'=>$request['TVA'],
            'Total'=>$request['Prix'] + (($request['Prix'] * $request['TVA'] / 100)),
            'Client'=>$request['Client'],
            'created_at'=>$request['created_at'],
            'updated_at'=>$request['updated_at'],
        ]);
        return redirect()->route('Factures.index')->with('success','Restaurant updated successfully.');
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
