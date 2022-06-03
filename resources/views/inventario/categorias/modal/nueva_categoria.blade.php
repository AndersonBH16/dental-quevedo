<!--=====================================
      CREAR NUEVA CATEGORÍA
======================================-->
<!-- Modal -->
<div id="nuevaCategoriaModal" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-gradient-cyan">
                <h5 class="modal-title" id="exampleModalLabel">Registrar Nueva Categoria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="form-horizontal" action="{{ url('/categorias') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" name="nombreCategoria" id="name" class="form-control " required="">
                        </div>
                        <div class="form-group">
                            <label for="description">Descripción</label>
                            <input class="form-control" name="descripcionCategoria" id="description" rows="3">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary bg-gradient-cyan" value="Guardar">{{ __('Registrar') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>






