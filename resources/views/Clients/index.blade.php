<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
?>
@include('includes.header')
    <main class="p-24">
        <div id="titre" class="bg-slate-50 text-3xl font-medium ">
            <h2 class="p-2">Mes clients</h2>
        </div>
        <p class="font-medium text-lg py-4">Dans cette section  , vous pouvez voir la liste de tous vos clients</p>
        <table>
            <thead class="text-xl py-1">
                <hr>
                <th class="px-4 py-2">#</th>
                <th class="px-4 py-2">Société</th>
                <th class="px-4 py-2">Téléphone</th>
                <th class="px-4 py-2">Email</th>
                <th class="px-4 py-2">Adresse</th>
                <th class="px-4 py-2">TVA</th>
                <th class="px-4 py-2">Factures</th>
                <th class="px-4 py-2">Opérations</th>
                <th class="px-4 py-2"></th>
            </thead>
            <tbody>
                @foreach($clients as $client)
                    <tr class="text-center font-medium">
                        <td class="px-4 py-2">{{$client->id}}</td>
                        <td class="text-red-800 px-4 py-2"><a href="/client/show/{{$client->id}}">{{$client->Société}}</a></td>
                        <td class="px-4 py-2">{{$client->Téléphone}}</td>
                        <td class="px-4 py-2">{{$client->Email}}</td>
                        <td class="px-4 py-2">{{$client->Adresse}}</td>
                        <td class="px-4 py-2">{{$client->TVA}}</td>
                        <?php
                         $id_facture_objet = DB::select('SELECT id FROM factures WHERE Réf =\''.$client->Factures.'\'');
                        $id_facture = $id_facture_objet[0] -> id;
                        ?>
                        <td class="text-red-800 px-4 py-2"><a href="/facture/show/{{$id_facture}}">{{$client->Factures}}</a></td>
                        <td class="text-red-800 px-4 py-2"><a href="/client/edit/{{$client->id}}">Modifier</a></td>
                        <td class="px-4 py-2">
                            <form action="/client/destroy/{{$client->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-800 p-2 text-white bg-red-700 rounded">Supprimer</button>
                            </form>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <form action="/home" method="GET">
            <button type="submit" class="bg-red-700 text-white font-medium text-lg p-2 rounded">Retour</button>
        </form>
    </main>
@include('includes.footer')