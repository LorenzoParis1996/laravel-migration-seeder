@extends('layouts.app')

@section('main-content')

@foreach ($trains as $train)

<ul>
    <li>Azienda: {{$train['azienda']}}</li>
    <li>Stazione di partenza: {{$train['stazione_partenza']}}</li>
    <li>Stazione d'arrivo: {{$train['stazione_arrivo']}}</li>
    <li>Orario di partenza: {{$train['orario_partenza']}}</li>
    <li>Orario d'arrivo: {{$train['orario_arrivo']}}</li>
    <li>Numero treno: {{$train['codice_treno']}}</li>
    <li>Carrozze: {{$train['numero_carrozze']}}</li>
    <li>In orario: {{$train->in_orario ? 'Si' : 'No'}}</li>
    <li>Cancellato: {{$train->cancellato ? 'Si' : 'No'}}</li>
</ul>

@endforeach

@endsection
