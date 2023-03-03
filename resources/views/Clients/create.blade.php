@include('includes.header')
<main class="p-24">
    <div id="titre" class="bg-slate-50 text-3xl font-medium">
        <h2 class="p-2">Création d'un client</h2>
    </div>
    <p class="font-medium text-lg py-4">Dans cette section, vous pouvez créer un nouveau client</p>
    <form action="/client/create" method="POST" class="flex flex-col space-y-4">
        @csrf
        <div class="flex flex-col">
            <label for="Société">Société :</label>
            <input type="text" name="Société" id="Société" class="border">
            @if($errors->has('Société'))
                <span class="error">{{ $errors->first('Société') }}</span>
            @endif
        </div>
        <div class="flex flex-col">
            <label for="Téléphone">Téléphone :</label>
            <input type="text" name="Téléphone" id="Téléphone" class="border">
            @if ($errors->has('Téléphone'))
                <span class="error">{{ $errors->first('Téléphone') }}</span>
            @endif
        </div>
        <div class="flex flex-col">
            <label for="Email">Email :</label>
            <input type="email" name="Email" id="Email" class="border">
            @if ($errors->has('Email'))
                <span class="error">{{ $errors->first('Email') }}</span>
            @endif
        </div>
        <div class="flex flex-col">
            <label for="Adresse">Adresse :</label>
            <input type="text" name="Adresse" id="Adresse" class="border">
            @if ($errors->has('Adresse'))
                <span class="error">{{ $errors->first('Adresse') }}</span>
            @endif
        </div>
        <div class="flex flex-col">
            <label for="TVA">TVA :</label>
            <input type="text" name="TVA" id="TVA" class="border">
            @if ($errors->has('TVA'))
                <span class="error">{{ $errors->first('TVA') }}</span>
            @endif
        </div>
        <div class="flex flex-col">
            <label for="Factures">Factures :</label>
            <input type="text" name="Factures" id="Factures" class="border" value="REF-002-114-25">
            @if ($errors->has('Factures'))
                <span class="error">{{ $errors->first('Factures') }}</span>
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