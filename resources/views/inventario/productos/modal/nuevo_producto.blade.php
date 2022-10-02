<!--=====================================
      CREAR NUEVO PRODUCTO
======================================-->
<!-- Modal -->
<div id="nuevoProductoModal" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-gradient-cyan">
                <h5 class="modal-title" id="exampleModalLabel">Registrar Nuevo Producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="form-horizontal" action="{{ url('/inventario') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="card-body">
                        <div class="form-group row d-flex justify-content-between">
                            <div class="row col-md-6">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-box"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Nombre del Producto" name="nombreProducto">
                                </div>
                            </div>
                            <div class="row col-md-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-cube"></i></span>
                                    </div>
                                    <input type="number" class="form-control" placeholder="Stock" name="stock">
                                </div>
                            </div>
                            <div class="row col-md-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><b>S/.</b></span>
                                    </div>
                                    <input type="number" class="form-control" placeholder="Precio" name="precio">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row d-flex justify-content-between">
                            <div class="row col-md-4">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-cube"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Marca" name="marca">
                                </div>
                            </div>
                            <div class="row col-md-4">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-cube"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Modelo" name="modelo" style="-webkit-appearance: none; margin: 0;">
                                </div>
                            </div>
                            <div class="row col-md-4">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-cube"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Serie" name="serie">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row d-flex justify-content-between">
                            <div class="row col-md-12">
                                <div class="input-group">
                                    <label for="cita_descripcion" class="control-label">Descripción:</label>
                                    <div class="form-group">
                                        <textarea id="cita_descripcion" name="descripcion" rows="3" cols="90"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row d-flex justify-content-between">
                            <div class="row col-md-12">
                                <select id="selectCategoria" class="form-control" name="categoria">
                                    <option value="-1">Seleccionar Categoría</option>
                                    @foreach($categorias as $categoria)
                                        <option value="{{ $categoria->id }}">{{ $categoria->nombre_categoria }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="file-upload-wrapper">
                            <input type="file" id="input-file-now" class="file-upload" />
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






