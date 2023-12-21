@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
    <h1>Treni in partenza oggi:</h1>
<ul>
    @foreach($trains as $train)
        <li>
            Azienda: {{ $train->Azienda }} -
            Partenza: {{ $train->Stazione_di_partenza }} -
            Arrivo: {{ $train->Stazione_di_arrivo }} -
            Orario partenza: {{ $train->Orario_di_partenza }} -
            Orario arrivo: {{ $train->Orario_di_arrivo }}
        </li>
    @endforeach
</ul>
</main>

@endsection
