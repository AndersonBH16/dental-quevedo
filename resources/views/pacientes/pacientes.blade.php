@extends('layouts.app')

@section('content_header')
    <div class="row ml-1">
        <h4 class="d-inline">Pacientes</h4>
    </div>
@stop

@section('content')
    <div class="card card-info card-outline mt-3">
        @csrf
        <div class="card-header">
            <div class="row">
                <h3 class="card-title ml-2 mt-2">Lista de Pacientes</h3>
                <div class="dt-buttons btn-group ml-3">
                    <button id="registrarNuevoPaciente" class="btn btn-outline-info" tabindex="0" data-toggle="modal" data-target="#nuevoPacienteModal">
                        <i class="fa fa-plus-circle mr-2"></i>Nuevo
                    </button>
                    <button class="btn btn-outline-info" tabindex="0" aria-controls="listaProformas" data-toggle="modal" data-target="#filtrosModal">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> button
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                Launch Default Modal
            </button>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-primary">
                Launch Primary Modal
            </button>
            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modal-secondary">
                Launch Secondary Modal
            </button>
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-info">
                Launch Info Modal
            </button>
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger">
                Launch Danger Modal
            </button>
            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-warning">
                Launch Warning Modal
            </button>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-success">
                Launch Success Modal
            </button>
            <br>
            <br>
            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-sm">
                Launch Small Modal
            </button>
            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-lg">
                Launch Large Modal
            </button>
            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-xl">
                Launch Extra Large Modal
            </button>
            <br>
            <br>
            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-overlay">
                Launch Modal with Overlay
            </button>
            <div class="text-muted mt-3">
                Instructions for how to use modals are available on the
                <a href="https://getbootstrap.com/docs/4.4/components/modal/">Bootstrap documentation</a>
            </div>
        </div>
        <!-- /.card -->
    </div>

    @include('pacientes.modal.nuevo_paciente')
@stop

