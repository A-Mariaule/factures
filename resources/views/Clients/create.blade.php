@include('includes.header')
<section>
    <form action="/client/create" method="POST">
        <h1>Création Client</h1>
        @csrf
        <div>
            <label for="Société">Société</label>
            <input type="text" name="Société" id="Société">
        </div>
        <div>
            <label for="Téléphone">Téléphone</label>
            <input type="text" name="Téléphone" id="Téléphone">
        </div>
        <div>
            <label for="Email">Email</label>
            <input type="email" name="Email" id="Email">
        </div>
        <div>
            <label for="Adresse">Adresse</label>
            <input type="text" name="Adresse" id="Adresse">
        </div>
        <div>
            <label for="TVA">TVA</label>
            <input type="text" name="TVA" id="TVA">
        </div>
        <div>
            <label for="Factures">Factures</label>
            <input type="text" name="Factures" id="Factures">
        </div>
        <input type="hidden" name="created_at" id="created_at" value="{{ date('Y-m-d H:i:s') }}">
        <input type="hidden" name="updated_at" id="updated_at" value="{{ date('Y-m-d H:i:s') }}">
        <input type="submit" name="submit" value="Créer">
    </form>
</section>
@include('includes.footer')