@include('includes.header')
<section>
    <form action="/client/edit/{{$client->id}}" method="POST">
        <h1>Modification Client</h1>
        @csrf
        @method('PATCH')
        <div>
            <label for="Société">Société</label>
            <input type="text" name="Société" id="Société" value="{{ $client->Société }}">
        </div>
        <div>
            <label for="Téléphone">Téléphone</label>
            <input type="text" name="Téléphone" id="Téléphone" value="{{ $client->Téléphone }}">
        </div>
        <div>
            <label for="Email">Email</label>
            <input type="text" name="Email" id="Email" value="{{ $client->Email }}">
        </div>
        <div>
            <label for="Adresse">Adresse</label>
            <input type="text" name="Adresse" id="Adresse" value="{{ $client->Adresse }}">
        </div>
        <div>
            <label for="TVA">TVA</label>
            <input type="text" name="TVA" id="TVA" value="{{ $client->TVA }}">
        </div>
        <input type="hidden" name="Factures" id="Factures" value="{{ $client->Factures }}">
        <input type="hidden" name="created_at" id="created_at" value="{{ date('Y-m-d H:i:s')}}">
        <input type="hidden" name="updated_at" id="updated_at" value="{{ date('Y-m-d H:i:s') }}">
        <input type="submit" name="submit" value="Modifier">
    </form>
</section>
@include('includes.footer')