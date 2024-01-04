@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
    <h1 class="text-center">Treni in partenza oggi:</h1>
    <div class="container mt-5" >
        <ul class="d-flex align-items-center list-unstyled">
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
    </div>
    <div>
        @if($trains->isEmpty())
            <p>Nessun treno in partenza oggi.</p>
        @else
        <div class="container pt-5" >
            <h2 class="text-center">Tutti i treni in partenza:</h2>
            <div class="">
                <ul class="list-unstyled">
                    @foreach($allTrains as $train)
                        <li>
                            <strong>Azienda:</strong>  {{ $train->Azienda }} 
                        </li>
                        <li>
                            <strong>Partenza:</strong> {{ $train->Stazione_di_partenza }}  
                        </li>
                        <li>
                            <strong>Arrivo:</strong> {{ $train->Stazione_di_arrivo }}
                        </li>
                        <li>
                            <strong>Orario partenza:</strong> {{ $train->Orario_di_partenza }}
                        </li>
                        <li>
                            <strong>Orario arrivo:</strong> {{ $train->Orario_di_arrivo }}
                        </li>     
                    @endforeach
                </ul>
            </div>
            
        </div>
        @endif
    </div>
    
</main>

@endsection
