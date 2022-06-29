@extends('layouts.app')

@section('content_header')
    <div class="row ml-1">
        <h4 class="d-inline">Odontograma {{ $type == \App\Models\Odontogram::TYPE_INITIAL ? "Inicial" : "Final" }} - DNI: {{ $paciente->dni }}</h4>
    </div>
@stop

@section('content')
    <div class="">
        <iframe width="100%" height="860" src="{{ url('/odontograma') }}?dni={{ $paciente->dni }}&type={{ $type }}"></iframe>
    </div>
@stop
