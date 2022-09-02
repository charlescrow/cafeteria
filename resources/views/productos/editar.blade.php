<div class="form-group">
    <input type="hidden" value="{{$producto?->id}}" name="id">
    <div class="row">
        <div class="col-md-12">
            <label for="nombre" class="col-form-label">Nombre:</label>
            <input type="text" value="{{$producto?->nombre}}" class="form-control" id="nombre" name="nombre" placeholder="Nombre del producto" required>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-md-6">
            <label for="referencia" class="col-form-label">Referencia:</label>
            <input type="text" value="{{$producto?->referencia}}" class="form-control" name="referencia" id="referencia" placeholder="Referencia del producto" required>
        </div>
        <div class="col-md-6 ml-auto">
            <label for="precio" class="col-form-label">Precio:</label>
            <input type="number" value="{{$producto?->precio}}" class="form-control" name="precio" id="precio" placeholder="Precio del producto" required>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-md-6">
            <label for="peso" class="col-form-label">Peso:</label>
            <input type="number" value="{{$producto?->peso}}" class="form-control" name="peso" id="peso" placeholder="Peso del producto" required>
        </div>
        <div class="col-md-6 ml-auto">
            <label for="categoria" class="col-form-label">Categoria:</label>
            <input type="number" value="{{$producto?->categoria}}" class="form-control" name="categoria" id="categoria" placeholder="Categoria del producto" required>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-md-6">
            <label for="stock" class="col-form-label">Stock:</label>
            <input type="number" value="{{$producto?->stock}}" class="form-control" name="stock" id="stock" placeholder="Cantidad en stock" required>
        </div>
    </div>
</div>



