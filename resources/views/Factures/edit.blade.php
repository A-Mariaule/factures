@include('includes.header')
<section>
    <form action="/facture/edit/{{$facture->id}}" method="POST">
        <h1>Modification facture</h1>
        @csrf
        @method('PATCH')
        <div>
            <label for="Réf">Réf</label>
            <input type="text" name="Réf" id="Réf" value="{{$facture->Réf}}">
            @if($errors->has('Réf'))
                <span class="error">{{ $errors->first('Réf') }}</span>
            @endif
        </div>
        <div>
            <label for="Titre">Titre</label>
            <input type="text" name="Titre" id="Titre" value="{{$facture->Titre}}">
            @if($errors->has('Titre'))
                <span class="error">{{ $errors->first('Titre') }}</span>
            @endif
        </div>
        <div>
            <label for="Prix">Prix</label>
            <input type="number" name="Prix" id="Prix" value="{{$facture->Prix}}">
            @if($errors->has('Prix'))
                <span class="error">{{ $errors->first('Prix') }}</span>
            @endif
        </div>
        <div>
            <label for="TVA">TVA</label>
            <input type="number" name="TVA" id="TVA" value="{{$facture->TVA}}">
            @if($errors->has('TVA'))
                <span class="error">{{ $errors->first('TVA') }}</span>
            @endif
        </div>
        <input type="hidden" name="Client" id="Client" value="{{$facture->Client}}">
        <input type="hidden" name="created_at" id="created_at" value="{{ date('Y-m-d H:i:s')}}">
        <input type="hidden" name="updated_at" id="updated_at" value="{{ date('Y-m-d H:i:s') }}">
        <input type="submit" name="submit" value="Modifier">
    </form>
</section>
@include('includes.footer')