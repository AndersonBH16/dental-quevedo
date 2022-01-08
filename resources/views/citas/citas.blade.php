@extends('layouts.app')

@section('content_header')
    <div class="row ml-1">
        <h4 class="d-inline">Cronograma de Citas</h4>
    </div>
@stop

@section('content')
    <div class="card card-info card-outline mt-3">
        @csrf
        <div class="card-header">
            <div class="row">
                <div class="dt-buttons btn-group ml-3">
                    <button id="registrarNuevoPaciente" class="btn btn-outline-info" tabindex="0" data-toggle="modal" data-target="#nuevoPacienteModal">
                        <i class="fa fa-plus-circle mr-2"></i>Nueva Cita
                    </button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card-body">
                <div class="card border-info mb-3" style="max-width: 18rem;">
                    <div class="card-header">Cita</div>
                    <div class="card-body text-info">
                        <h5 class="card-title">Hora: 5pm - 5.30pm</h5>
                        <p class="card-text">Descripción de la cita.</p>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="card border-info mb-3" style="max-width: 18rem;">
                    <div class="card-header">Cita</div>
                    <div class="card-body text-info">
                        <h5 class="card-title">Hora: 5pm - 5.30pm</h5>
                        <p class="card-text">Descripción de la cita.</p>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="card border-info mb-3" style="max-width: 18rem;">
                    <div class="card-header">Cita</div>
                    <div class="card-body text-info">
                        <h5 class="card-title">Hora: 5pm - 5.30pm</h5>
                        <p class="card-text">Descripción de la cita.</p>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="card border-info mb-3" style="max-width: 18rem;">
                    <div class="card-header">Cita</div>
                    <div class="card-body text-info">
                        <h5 class="card-title">Hora: 5pm - 5.30pm</h5>
                        <p class="card-text">Descripción de la cita.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card-body">
                <div class="card border-info mb-3" style="max-width: 18rem;">
                    <div class="card-header">Cita</div>
                    <div class="card-body text-info">
                        <h5 class="card-title">Hora: 5pm - 5.30pm</h5>
                        <p class="card-text">Descripción de la cita.</p>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="card border-info mb-3" style="max-width: 18rem;">
                    <div class="card-header">Cita</div>
                    <div class="card-body text-info">
                        <h5 class="card-title">Hora: 5pm - 5.30pm</h5>
                        <p class="card-text">Descripción de la cita.</p>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="card border-info mb-3" style="max-width: 18rem;">
                    <div class="card-header">Cita</div>
                    <div class="card-body text-info">
                        <h5 class="card-title">Hora: 5pm - 5.30pm</h5>
                        <p class="card-text">Descripción de la cita.</p>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="card border-info mb-3" style="max-width: 18rem;">
                    <div class="card-header">Cita</div>
                    <div class="card-body text-info">
                        <h5 class="card-title">Hora: 5pm - 5.30pm</h5>
                        <p class="card-text">Descripción de la cita.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('pacientes.modal.nuevo_paciente')
@stop
@section('js')
    <script src="{{ asset('dq-scripts/pacientes.js') }}"></script>
@stop

