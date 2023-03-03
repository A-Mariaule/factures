@include('includes.header')
<main class="p-24">
    <div id="titre" class="bg-slate-50 text-3xl font-medium ">
        <h2 class="p-2">Modification du client : {{$client->Société}}</h2>
    </div>
    <p class="font-medium text-lg py-4">Dans cette section  , vous pouvez créer un nouveau client</p>
    <form action="/client/edit/{{$client->id}}" method="POST" class="flex flex-col space-y-4">
        @csrf
        @method('PATCH')
        <div class="flex flex-col">
            <label for="Société">Société</label>
            <input type="text" name="Société" id="Société" value="{{ $client->Société }}" class="border">
        </div>
        <div class="flex flex-col">
            <label for="Téléphone">Téléphone</label>
            <input type="text" name="Téléphone" id="Téléphone" value="{{ $client->Téléphone }}" class="border">
        </div>
        <div class="flex flex-col">
            <label for="Email">Email</label>
            <input type="text" name="Email" id="Email" value="{{ $client->Email }}" class="border">
        </div>
        <div class="flex flex-col">  
            <label for="Adresse">Adresse</label>
            <input type="text" name="Adresse" id="Adresse" value="{{ $client->Adresse }}" class="border">
        </div>
        <div class="flex flex-col">
            <label for="TVA">TVA</label>
            <input type="text" name="TVA" id="TVA" value="{{ $client->TVA }}" class="border">
        </div>
        <input type="hidden" name="Factures" id="Factures" value="{{ $client->Factures }}">
        <input type="hidden" name="created_at" id="created_at" value="{{ date('Y-m-d H:i:s')}}">
        <input type="hidden" name="updated_at" id="updated_at" value="{{ date('Y-m-d H:i:s') }}">
        <div class="flex justify-center">
            <input type="submit" name="submit" value="Modifier" class="text-red-800 p-2 text-white bg-red-700 rounded cursor-pointer">
        </div>
    </form>
    <form action="/clients" method="GET" class="mt-4">
        <div class="flex justify-center">
            <button type="submit" class="bg-red-700 text-white font-medium text-lg p-2 rounded">Retour</button>
        </div>
    </form>
</main>
@include('includes.footer')