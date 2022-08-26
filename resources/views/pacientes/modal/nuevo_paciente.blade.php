<!--=====================================
      CREAR NUEVO PACIENTE
======================================-->
<!-- Modal -->
<div id="nuevoPacienteModal" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-gradient-cyan">
                <h5 class="modal-title" id="exampleModalLabel">Registrar Nuevo Paciente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="form-horizontal" action="{{ url('/pacientes') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="card-body">
                        <div class="form-group row d-flex justify-content-between">
                            <div class="row col-md-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">DNI:</span>
                                    </div>
                                    <input type="number" class="form-control" placeholder="" maxlength="8" name="dni">
{{--                                    <span class="input-group-append">--}}
{{--                                        <button type="button" class="btn btn-info bg-gradient-cyan text-light"><i class="fa fa-search mr-1"></i>Validar</button>--}}
{{--                                    </span>--}}
                                </div>
                            </div>
                        </div>
                        <div class="form-group row d-flex justify-content-between">
                            <div class="row col-md-4">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Apellido Paterno" name="apellidoPaternoPaciente">
                                </div>
                            </div>
                            <div class="row col-md-4">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Apellido Materno" name="apellidoMaternoPaciente">
                                </div>
                            </div>
                            <div class="row col-md-4">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Nombres" name="nombresPaciente">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row d-flex justify-content-between">
                            <div class="row col-md-4">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Fecha Nacimiento" name="fechaNacimientoPaciente">
                                </div>
                            </div>
                            <div class="row col-md-4">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-phone-square"></i></span>
                                    </div>
                                    <input type="number" class="form-control" placeholder="Teléfono/Celular" name="telefonoPaciente" style="-webkit-appearance: none; margin: 0;">
                                </div>
                            </div>
                            <div class="row col-md-4">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">@</span>
                                    </div>
                                    <input type="email" class="form-control" placeholder="Email" name="emailPaciente">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row d-flex justify-content-between">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-location-arrow"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Direccion" name="direccionPaciente">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary bg-gradient-cyan" value="Guardar">Registrar</button>
                </div>
            </form>
        </div>
    </div>
</div>






