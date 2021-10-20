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
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="card-body">
                        <div class="form-group row d-flex justify-content-between">
                            <div class="row col-md-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">DNI:</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="" maxlength="8">
                                    <span class="input-group-append">
                                        <button type="button" class="btn btn-info bg-gradient-cyan text-light"><i class="fa fa-search mr-1"></i>Validar</button>
                                    </span>
                                </div>
                            </div>
                            <div class="row col-md-3">
                                <div class="input-group">
                                    <button id="validarReniec" class="btn btn-">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row d-flex justify-content-between">
                            <div class="row col-md-4">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Apellido Paterno">
                                </div>
                            </div>
                            <div class="row col-md-4">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Apellido Materno">
                                </div>
                            </div>
                            <div class="row col-md-4">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Nombres">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row d-flex justify-content-between">
                            <div class="row col-md-4">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Fecha Nacimiento">
                                </div>
                            </div>
                            <div class="row col-md-4">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-phone-square"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Teléfono/Celular">
                                </div>
                            </div>
                            <div class="row col-md-4">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">@</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Email">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row d-flex justify-content-between">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-location-arrow"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Direccion">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary bg-gradient-cyan">Registrar</button>
            </div>
        </div>
    </div>
</div>




<div class="modal fade modal-lg" id="" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header text-center">
                <h4 class="modal-title white-text w-100 font-weight-bold py-2">Subscribe</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">&times;</span>
                </button>
            </div>

            <!--Body-->
            <div class="modal-body">
                <div class="md-form mb-5">
                    <i class="fas fa-user prefix grey-text"></i>
                    <input type="text" id="form3" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="form3">Your name</label>
                </div>

                <div class="md-form">
                    <i class="fas fa-envelope prefix grey-text"></i>
                    <input type="email" id="form2" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="form2">Your email</label>
                </div>
            </div>

            <!--Footer-->
            <div class="modal-footer justify-content-center">
                <a type="button" class="btn btn-outline-warning waves-effect">Send <i class="fas fa-paper-plane-o ml-1"></i></a>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>

<div class="text-center">
    <a href="" class="btn btn-default btn-rounded" data-toggle="modal" data-target="#orangeModalSubscription">Launch
        modal Subscription</a>
</div>






