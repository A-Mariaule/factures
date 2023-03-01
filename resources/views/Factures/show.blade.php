@include('includes.header')

    <section>
        <p>{{ $facture->Réf }}</p>
        <p>{{$facture->Titre}}</p>
        <p>{{$facture->Prix}}</p>
        <p>{{$facture->TVA}}</p>
        <p>{{$facture->Total}}</p>
        <p>{{$facture->Client}}</p>
    </section>
    
@include('includes.footer')