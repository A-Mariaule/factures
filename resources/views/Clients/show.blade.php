@include('includes.header')

    <section>
        <p class="text-3xl font-bold underline">{{ $client->Société }}</p>
        <p>{{$client->Téléphone}}</p>
        <p>{{$client->Email}}</p>
        <p>{{$client->Adresse}}</p>
        <p>{{$client->TVA}}</p>
        <p>{{$client->Factures}}</p>
    </section>
    
@include('includes.footer')