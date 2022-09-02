<div class="modal fade" id="modalVenta" tabindex="-1" role="dialog" aria-labelledby="modalVentaTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form id="formVenta">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modalVentaTitle">Registrar venta</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="producto_id" class="col-form-label">Nombre:</label>
                                    <select name="producto_id" id="producto_id" class="form-control">
                                        <option selected disabled>Selecciona un producto</option>
                                        @foreach($productos as $producto)
                                            <option value="{{$producto?->id}}">{{$producto?->nombre}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="cantidad" class="col-form-label">Cantidad:</label>
                                    <input type="number"  class="form-control" name="cantidad" id="cantidad" placeholder="Cantidad a comprar" required>
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