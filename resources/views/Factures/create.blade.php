@include('includes.header')
<section>
    <form action="/facture/create" method="POST">
        <h1>Création facture</h1>
        @csrf
        <div>
            <label for="Réf">Réf</label>
            <input type="text" name="Réf" id="Réf">
            @if($errors->has('Réf'))
                <span class="error">{{ $errors->first('Réf') }}</span>
            @endif
        </div>
        <div>
            <label for="Title">Title</label>
            <input type="text" name="Titre" id="Titre">
            @if($errors->has('Titre'))
                <span class="error">{{ $errors->first('Titre') }}</span>
            @endif
        </div>
        <div>
            <label for="Prix">Prix</label>
            <input type="number" name="Prix" id="Prix">
            @if($errors->has('Prix'))
                <span class="error">{{ $errors->first('Prix') }}</span>
            @endif
        </div>
        <div>
            <label for="TVA">TVA</label>
            <input type="number" name="TVA" id="TVA">
            @if($errors->has('TVA'))
                <span class="error">{{ $errors->first('TVA') }}</span>
            @endif
        </div>
        <div>
            <label for="Client">Client</label>
            <input type="text" name="Client" id="Client">
            @if($errors->has('Client'))
                <span class="error">{{ $errors->first('Client') }}</span>
            @endif
        </div>
        <input type="hidden" name="created_at" id="created_at" value="{{ date('Y-m-d H:i:s') }}">
        <input type="hidden" name="updated_at" id="updated_at" value="{{ date('Y-m-d H:i:s') }}">
        <input type="submit" name="submit" value="Créer">
    </form>
</section>
@include('includes.footer')