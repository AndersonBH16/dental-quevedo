@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
@endsection

@section('content_header')
    <div class="row ml-1">
        <h4 class="d-inline">Inventario</h4>
    </div>
@stop

@section('content')
    <div class="card card-info card-outline mt-3">
        @csrf
        <div class="card-header">
            <div class="row">
                <h3 class="card-title ml-2 mt-2">Lista de Productos</h3>
                <div class="dt-buttons btn-group ml-3">
                    <button id="registrarNuevoPaciente" class="btn btn-outline-info" tabindex="0" data-toggle="modal" data-target="#nuevoPacienteModal">
                        <i class="fa fa-plus-circle mr-2"></i>Nuevo
                    </button>
                    {{--                    <button class="btn btn-outline-info" tabindex="0" aria-controls="listaProformas" data-toggle="modal" data-target="#filtrosModal">--}}
                    {{--                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> button--}}
                    {{--                    </button>--}}
                </div>
            </div>
        </div>
        <div class="card-body">
            <table id="tablaPacientes" class="table table-bordered table-hover dt-responsive table-responsive-xl">
                <thead>
                <tr>
                    {{--                        <td><b>#</b></td>--}}
                    <td><b>DNI</b></td>
                    <td><b>Apellido paterno</b></td>
                    <td><b>Apellido Materno</b></td>
                    <td><b>Nombres</b></td>
                    <td><b>Fecha Nac.</b></td>
                    <td><b>Email</b></td>
                    <td><b>Teléfono</b></td>
                    <td><b>Opciones</b></td>
                </tr>
                </thead>
                <tbody id="filasListaPacientes" style="display: none;">
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

    @include('pacientes.modal.nuevo_paciente')
    @include('pacientes.modal.odontograma')
@stop
@section('js')
    <script src="{{ asset('dq-scripts/pacientes.js') }}"></script>

    <script>
        $(document).on('click', '.btnOpenOdontogram', function () {
            let dni = $(this).attr('data-dni');
            $('#odontogramModal iframe').attr('src', '{{ url('/odontograma') }}?dni=' + dni);
            $('#odontogramModal').modal('show');
        });

        function closeOdontogramModal() {
            $('#odontogramModal').modal('hide');
        }
    </script>
@stop

