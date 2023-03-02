@include('includes.header')
    <main class="pl-24 pt-12">
        <div id="titre" class="bg-slate-50">
            <h2>Mes clients</h2>
        </div>
        <p>Dans cette section  , vous pouvez voir la liste de tous vos clients</p>
    </main>
<!--
        @foreach($clients as $client)
            <p class="text-3xl font-bold underline">{{ $client->Société }}</p>
            <p>{{$client->Téléphone}}</p>
            <p>{{$client->Email}}</p>
            <p>{{$client->Adresse}}</p>
            <p>{{$client->TVA}}</p>
            <p>{{$client->Factures}}</p>
        @endforeach
-->
@include('includes.footer')