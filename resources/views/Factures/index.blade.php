<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
?>
@include('includes.header')
    <main class="p-24">
        <div id="titre" class="bg-slate-50 text-3xl font-medium ">
            <h2 class="p-2">Mes factures</h2>
        </div>
        <p class="font-medium text-lg py-4">Dans cette section  , vous pouvez voir la liste de toutes vos factures</p>
        <table>
            <thead class="text-xl py-1">
                <hr>
                <th class="px-4 py-2">#</th>
                <th class="px-4 py-2">Réf</th>
                <th class="px-4 py-2">Titre</th>
                <th class="px-4 py-2">Prix</th>
                <th class="px-4 py-2">TVA</th>
                <th class="px-4 py-2">Total</th>
                <th class="px-4 py-2">Client</th>
                <th class="px-4 py-2">Opérations</th>
                <th class="px-4 py-2"></th>
            </thead>
            <tbody>
                @foreach($factures as $facture)
                    <tr class="text-center font-medium">
                        <td class="px-4 py-2">{{$facture->id}}</td>
                        <td class="text-red-800 px-4 py-2"><a href="/facture/show/{{$facture->id}}">{{$facture->Réf}}</a></td>
                        <td class="px-4 py-2">{{$facture->Titre}}</td>
                        <td class="px-4 py-2">{{$facture->Prix}} €</td>
                        <td class="px-4 py-2">{{$facture->TVA}} %</td>
                        <td class="px-4 py-2">{{$facture->Total}} €</td>
                        <?php
                         $id_client_objet = DB::select('SELECT id FROM clients WHERE Société =\''.$facture->Client.'\'');
                        $id_client = $id_client_objet[0] -> id;
                        ?>
                        <td class="text-red-800 px-4 py-2"><a href="/client/show/{{$id_client}}">{{$facture->Client}}</a></td>
                        <td class="text-red-800 px-4 py-2"><a href="/facture/edit/{{$facture->id}}">Modifier</a></td>
                        <td class="px-4 py-2">
                            <form action="/facture/destroy/{{$facture->id}}" method="POST">
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
