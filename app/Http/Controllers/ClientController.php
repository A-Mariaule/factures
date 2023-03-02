<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Requests\CreatePostRequestClients;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Clients.index',['clients' => Client::latest()->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("Clients.create",["client" => new Client()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreatePostRequestClients $request)
    {
        Client::create([
            'Société'=>$request['Société'],
            'Téléphone'=>$request['Téléphone'],
            'Email'=>$request['Email'],
            'Adresse'=>$request['Adresse'],
            'TVA'=>$request['TVA'],
            'Factures'=>$request['Factures'],
            'created_at'=>$request['created_at'],
            'updated_at'=>$request['updated_at'],
        ]);
        return redirect()->route('Clients.index')->with('success','client created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('Clients.show', ['client' => Client::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('clients.edit',['client' => CLient::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreatePostRequestClients $request, string $id)
    {
        Client::findOrFail($id)->update([
            'Société'=>$request['Société'],
            'Téléphone'=>$request['Téléphone'],
            'Email'=>$request['Email'],
            'Adresse'=>$request['Adresse'],
            'TVA'=>$request['TVA'],
            'Factures'=>$request['Factures'],
            'created_at'=>$request['created_at'],
            'updated_at'=>$request['updated_at'],
        ]);
        return redirect()->route('Clients.index')->with('success','Client updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Client::findOrFail($id)->delete();
        return redirect()->route('clients.index')->with('success','Restaurant deleted successfully.');
    }
}
