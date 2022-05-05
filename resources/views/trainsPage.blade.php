<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css/app.css">
    <title>Trains Page</title>
</head>
<body>
    <ul>
        <h1>Treni</h1>
        @foreach ($myTrains as $train)
        <li>
            <h2>Treno: {{ $train->azienda }}</h2>
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
    </ul>
    
</body>
</html>