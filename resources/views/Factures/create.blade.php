@include('includes.header')
<main class="p-24">
    <div id="titre" class="bg-slate-50 text-3xl font-medium">
        <h2 class="p-2">Création d'une facture</h2>
    </div>
    <p class="font-medium text-lg py-4">Dans cette section, vous pouvez créer une nouvelle facture</p>
    <form action="/facture/create" method="POST" class="flex flex-col space-y-4">
        @csrf
        <div class="flex flex-col">
            <label for="Réf">Réf :</label>
            <input type="text" name="Réf" id="Réf" class="border">
            @if($errors->has('Réf'))
                <span class="error">{{ $errors->first('Réf') }}</span>
            @endif
        </div>
        <div class="flex flex-col">
            <label for="Titre">Titre :</label>
            <input type="text" name="Titre" id="Titre" class="border">
            @if($errors->has('Titre'))
                <span class="error">{{ $errors->first('Titre') }}</span>
            @endif
        </div>
        <div class="flex flex-col">
            <label for="Prix">Prix :</label>
            <input type="number" name="Prix" id="Prix" class="border">
            @if ($errors->has('Prix'))
                <span class="error">{{ $errors->first('Prix') }}</span>
            @endif
        </div>
        <div class="flex flex-col">
            <label for="TVA">TVA :</label>
            <input type="number" name="TVA" id="TVA" class="border">
            @if ($errors->has('TVA'))
                <span class="error">{{ $errors->first('TVA') }}</span>
            @endif
        </div>
        <div class="flex flex-col">
            <label for="Client">Clients :</label>
            <input type="text" name="Client" id="Client" class="border" value="BeCode">
            @if ($errors->has('Clients'))
                <span class="error">{{ $errors->first('Client') }}</span>
            @endif
        </div>
        <input type="hidden" name="created_at" id="created_at" value="{{ date('Y-m-d H:i:s') }}">
        <input type="hidden" name="updated_at" id="updated_at" value="{{ date('Y-m-d H:i:s') }}">
        <div class="flex justify-center">
            <input type="submit" name="submit" value="Créer" class="text-red-800 p-2 text-white bg-red-700 rounded cursor-pointer">
        </div>
    </form>
    <form action="/home" method="GET" class="mt-4">
        <div class="flex justify-center">
            <button type="submit" class="bg-red-700 text-white font-medium text-lg p-2 rounded">Retour</button>
        </div>
    </form>
</main>
@include('includes.footer')