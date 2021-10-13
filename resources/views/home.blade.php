@extends('layouts.app')

{{--@section('title', 'Dental Quevedo')--}}

@section('content_header')
    <h4>Dashboard</h4>
@stop

@section('content')
    <h5>Bienvenido al Sistema de Gestión {{ Auth::user()->name }}.</h5>
@stop
