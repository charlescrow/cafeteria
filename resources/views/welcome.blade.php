@extends('layouts.principal')
@section('content')

@php
    $mayor = $mayorStock[0];
    $masVendido = $masVendido[0];
@endphp

<h2>
    Cafeteria
</h2>
<br> <br> <br>
<div class="row">
    <div class="col-12">
        <h3>Producto con mayor stock:</h3>  <br>
        <b> Nombre: </b> {{$mayor?->nombre}} <br><br>
        <b> Stock: </b> {{$mayor?->nombre}}
    </div> <br>
    <hr>
    <div class="col-12">
        <h3>Producto más vendido:</h3>  <br>
        <b> Nombre: </b> {{$masVendido?->nombre}} <br><br>
        <b> Unidades vendidas: </b> {{$masVendido?->cantidadMayor}}
    </div>
</div>

@endsection