<div class="modal fade" id="modalProducto" tabindex="-1" role="dialog" aria-labelledby="modalProductoTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form id="formProducto">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modalProductoTitle">Registrar producto</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="nombre" class="col-form-label">Nombre:</label>
                                    <input type="text"  class="form-control" id="nombre" name="nombre" placeholder="Nombre del producto" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="referencia" class="col-form-label">Referencia:</label>
                                    <input type="text"  class="form-control" name="referencia" id="referencia" placeholder="Referencia del producto" required>
                                </div>
                                <div class="col-md-6 ml-auto">
                                    <label for="precio" class="col-form-label">Precio:</label>
                                    <input type="number"  class="form-control" name="precio" id="precio" placeholder="Precio del producto" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="peso" class="col-form-label">Peso:</label>
                                    <input type="number"  class="form-control" name="peso" id="peso" placeholder="Peso del producto" required>
                                </div>
                                <div class="col-md-6 ml-auto">
                                    <label for="categoria" class="col-form-label">Categoria:</label>
                                    <input type="number"  class="form-control" name="categoria" id="categoria" placeholder="Categoria del producto" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="stock" class="col-form-label">Stock:</label>
                                    <input type="number"  class="form-control" name="stock" id="stock" placeholder="Cantidad en stock" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </form>   
    </div>
</div>