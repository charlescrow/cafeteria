@extends('layouts.principal')
@section('content')

    <div class="">
        <div class="row">
            <div class="col-lg-10">
                <h3>Listado de productos</h3> <br><br>
            </div>
            <div class="col-2">
                <button class="btn btn-primary" data-toggle="modal" data-target="#modalProducto"> 
                    <i class="fa fa-plus"></i> Nuevo producto
                </button>
            </div>
        </div>
    </div>
    <div class="listadoProductos">
        @include('productos.listado')
    </div>

<!-- Modal de crear producto -->
@include('productos.crear')

<!-- Modal editar producto -->
<div class="modal fade" id="modalEditarProducto" tabindex="-1" role="dialog" aria-labelledby="modalProductoTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form id="formEditarProducto">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modalProductoTitle">Actualizar producto</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div id="infoProducto"></div>

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


<script src="{{mix('js/productos/principal.js')}}"></script>
@endsection

