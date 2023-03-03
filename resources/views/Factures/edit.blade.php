@include('includes.header')
<main class="p-24">
    <div id="titre" class="bg-slate-50 text-3xl font-medium">
        <h2 class="p-2">Modification de la facture : {{$facture->Réf}}</h2>
    </div>
    <p class="font-medium text-lg py-4">Dans cette section, vous pouvez créer une nouvelle facture</p>
    <form action="/facture/edit/{{$facture->id}}" method="POST" class="flex flex-col space-y-4">
        @csrf
        @method('Patch')
        <div class="flex flex-col">
            <label for="Réf">Réf :</label>
            <input type="text" name="Réf" id="Réf" class="border" value="{{$facture->Réf}}">
            @if($errors->has('Réf'))
                <span class="error">{{ $errors->first('Réf') }}</span>
            @endif
        </div>
        <div class="flex flex-col">
            <label for="Titre">Titre :</label>
            <input type="text" name="Titre" id="Titre" class="border" value="{{$facture->Titre}}">
            @if($errors->has('Titre'))
                <span class="error">{{ $errors->first('Titre') }}</span>
            @endif
        </div>
        <div class="flex flex-col">
            <label for="Prix">Prix :</label>
            <input type="number" name="Prix" id="Prix" class="border" value="{{$facture->Prix}}">
            @if ($errors->has('Prix'))
                <span class="error">{{ $errors->first('Prix') }}</span>
            @endif
        </div>
        <div class="flex flex-col">
            <label for="TVA">TVA :</label>
            <input type="number" name="TVA" id="TVA" class="border" value="{{$facture->TVA}}">
            @if ($errors->has('TVA'))
                <span class="error">{{ $errors->first('TVA') }}</span>
            @endif
        </div>
        <div class="flex flex-col">
            <label for="Client">Clients :</label>
            <input type="text" name="Client" id="Client" class="border" value="BeCode" value="{{$facture->Clients}}">
            @if ($errors->has('Clients'))
                <span class="error">{{ $errors->first('Client') }}</span>
            @endif
        </div>
        <input type="hidden" name="created_at" id="created_at" value="{{ date('Y-m-d H:i:s') }}">
        <input type="hidden" name="updated_at" id="updated_at" value="{{ date('Y-m-d H:i:s') }}">
        <div class="flex justify-center">
            <input type="submit" name="submit" value="Modifier" class="text-red-800 p-2 text-white bg-red-700 rounded cursor-pointer">
        </div>
    </form>
    <form action="/factures" method="GET" class="mt-4">
        <div class="flex justify-center">
            <button type="submit" class="bg-red-700 text-white font-medium text-lg p-2 rounded">Retour</button>
        </div>
    </form>
</main>
@include('includes.footer')