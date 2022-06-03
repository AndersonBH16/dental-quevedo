@extends('layouts.app')

@section('content_header')
    <div class="row ml-1">
        <h4 class="d-inline">Cronograma de Citas</h4>
    </div>
@stop

@section('content')
    {!! $calendar->calendar() !!}
    {!! $calendar->script() !!}

{{--    <div id='agenda'></div>--}}
    @include('citas.modal.crear-cita')
@stop
@section('js')
    <script src="{{ asset('dq-scripts/citas.js') }}"></script>
@stop

