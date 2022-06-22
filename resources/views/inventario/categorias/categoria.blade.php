@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
@endsection

@section('content_header')
    <div class="row ml-1">
        <h4 class="d-inline">Categorías</h4>
    </div>
@stop

@section('content')
    <div class="card card-info card-outline mt-3">
        @csrf
        <div class="card-header">
            <div class="row">
                <h3 class="card-title ml-2 mt-2">Lista de Categorias</h3>
                <div class="dt-buttons btn-group ml-3">
                    <button id="registrarNuevaCategoria" class="btn btn-outline-info" tabindex="0" data-toggle="modal" data-target="#nuevaCategoriaModal">
                        <i class="fa fa-plus-circle mr-2"></i>Nuevo
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table id="tablaCategorias" class="table table-bordered table-hover dt-responsive table-responsive-xl">
                <thead>
                    <tr>
                        <td><b>Nombre</b></td>
                        <td><b>Cantidad</b></td>
                        <td><b>Descripción</b></td>
                        <td><b>Acciones</b></td>
                    </tr>
                </thead>
                <tbody id="filasListaCategorias" style="display: none;">
                <tr>
                    <td colspan="14" class="text-center" style="padding: 5%;">
                        <div class="spinner-border text-muted big" role="status" style="width: 100px; height: 100px;">
                            <span class="sr-only"></span>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    @include('inventario.categorias.modal.nueva_categoria')
@stop
@section('js')
    <script src="{{ asset('dq-scripts/categorias.js') }}"></script>
@stop

