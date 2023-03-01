@include('includes.header')
    <section>
        @foreach($factures as $facture)
            <p>{{ $facture->Réf }}</p>
            <p>{{$facture->Titre}}</p>
            <p>{{$facture->Prix}}</p>
            <p>{{$facture->TVA}}</p>
            <p>{{$facture->Total}}</p>
            <p>{{$facture->Client}}</p>
        @endforeach
    </section>  
@include('includes.footer')