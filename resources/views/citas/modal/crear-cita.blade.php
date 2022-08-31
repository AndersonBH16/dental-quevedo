<!--=====================================
      REGISTRAR CITAS
======================================-->
<!-- Modal -->
<div id="accionCitas" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-gradient-cyan">
                <h5 class="modal-title" id="tituloModalCitas">REGISTRO DE CITAS</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" name="form_citas">
                    @csrf
                    <div class="card-body ml-3 mr-3">
                        <div class="form-group row d-flex justify-content-between">
                            <div class="row col-md-12">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Título:</span>
                                    </div>
                                    <input id="titulo" class="form-control" name="titulo">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row d-flex justify-content-between">
                            <div class="row col-md-12">
                                <div class="input-group">
                                    <label for="cita_descripcion" class="control-label">Descripción:</label>
                                    <div class="">
                                        <textarea id="cita_descripcion" name="descripcion" rows="5" cols="80"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row d-flex justify-content-between">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Fecha:</span>
                                        </div>
                                        <input id="fecha" name="fecha" type="date" class="form-control col-lg" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Ini:</span>
                                        </div>
                                        <input id="time_start" name="start" type="time" class="form-control col-lg" required>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Min:</span>
                                        </div>
                                        <input id="minutes" name="minutes" type="number" class="form-control col-lg" min="1" max="60" maxlength="2" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row d-flex justify-content-between">
                            <div class="row col-md-12">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Paciente:</span>
                                    </div>
                                    <input id="paciente" type="text" class="form-control" placeholder="" name="paciente">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnEliminar" class="btn btn-danger bg-gradient-red" value="Eliminar" hidden>Eliminar</button>
                <button type="button" id="btnRegistrarCita" class="btn btn-primary bg-gradient-cyan" value="Guardar">Registrar</button>
                <button type="button" id="btnActualizarCita" data-id="" class="btn btn-primary bg-gradient-cyan" value="Guardar" hidden>Actualizar</button>
                <button type="button" class="btn btn-secondary" data-id="" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>






