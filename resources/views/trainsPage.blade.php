@extends('base')
@section('pageTitle')
    LISTA TRENI
@endsection

@section('pageMain')
    

    <ul>
        <h1>Treni del giorno</h1>
        @foreach ($myTrains as $train)
        <li>
            <h2>Treno: {{ $train->azienda }}</h2>
            <h2>Data treno: {{ $train->data_treno }}</h2>
            <h2>Stazione partenza: {{ $train->stazione_di_partenza }}</h2>
            <h2>Stazione arrivo: {{ $train->stazione_di_arrivo }}</h2>
            <h2>Orario partenza: {{ $train->orario_di_partenza }}</h2>
            <h2>Orario arrivo:{{ $train->orario_di_arrivo }}</h2>
            <h2>Codice treno: {{ $train->codice_treno }}</h2>
            <h2>Numero di carrozze: {{ $train->numero_carrozze }}</h2>
            <h2>Treno in orario: {{ $train->in_orario }}</h2>
            <h2>Treno cancellato: {{ $train->cancellato }}</h2>
            <h2>Prezzo biglietto: {{ $train->prezzo_biglietto }}€</h2>
        </li>
        @endforeach
        <h3>Pagine Treni: {{ $myTrains->links() }}</h3>
    </ul>

@endsection



    