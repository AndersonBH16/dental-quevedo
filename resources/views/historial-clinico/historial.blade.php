@extends('layouts.app')

@section('content_header')
    <div class="row ml-1">
        <h4 class="d-inline">HISTORIA CLÍNICA ODONTOLÓGICA -
        </h4>
    </div>
@stop

@section('content')
        @csrf
        @include('historial-clinico.i_anamnesis')
        @include('historial-clinico.ii_examen_clinico')
        <div class="card card-info card-outline mt-3">
            <div class="card-header">
                <h3 class="card-title"><b>III. DIAGNÓSTICO PRESUNTIVO</b></h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <textarea id="diag_pres" class="form-control" placeholder="Escribir detalle" rows="5"></textarea>
            </div>
        </div>

        @include('historial-clinico.iv_pruebas_complementarias')

        <div class="card card-info card-outline mt-3">
            <div class="card-header">
                <h3 class="card-title"><b>V. DIAGNÓSTICO DEFINITIVO</b></h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <textarea id="diagnostico_def" class="form-control" placeholder="Escribir pronóstico" rows="5"></textarea>
            </div>
        </div>
        <div class="card card-info card-outline mt-3">
            <div class="card-header">
                <h3 class="card-title"><b>VI. PRONÓSTICO</b></h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <textarea id="pronostico" class="form-control" placeholder="Escribir detalle" rows="5"></textarea>
            </div>
        </div>
        <div class="card card-info card-outline mt-3">
            <div class="card-header">
                <h3 class="card-title"><b>VII. PRESUPUESTO</b></h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <textarea id="presupuesto" class="form-control" placeholder="Escribir detalle" rows="5"></textarea>
            </div>
        </div>
        <div class="card card-info card-outline mt-3">
            <div class="card-header">
                <h3 class="card-title"><b>VIII. PLAN DE TRATAMIENTO Y RECOMENDACIONES</b></h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <textarea id="plan_tratamiento_recomendaciones" class="form-control" placeholder="Escribir detalle" rows="5"></textarea>
            </div>
        </div>
        <div class="card card-info card-outline mt-3">
            <div class="card-header">
                <h3 class="card-title"><b>IX. TRATAMIENTOS REALIZADOS</b></h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <textarea id="tratamiento" placeholder="Faltaaaaaaaaaa....."></textarea>
            </div>
        </div>
        <div class="card card-info card-outline mt-3">
            <div class="card-header">
                <h3 class="card-title"><b>X. CONTROL Y EVOLUCIÓN</b></h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <textarea id="control_evol" class="form-control" placeholder="Detallar" rows="5"></textarea>
            </div>
        </div>

        @include('historial-clinico.xi_consentimiento_informado')

        <div class="form-group text-center">
            <button id="btnGuardarHistorialMedico" class="btn btn-success btn-lg">Guardar</button>
        </div>

@stop
@section('js')
    <script src="{{ asset('dq-scripts/historial.js') }}"></script>
@stop

