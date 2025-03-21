@extends('layouts.app')

@section('title','Editar producto')
    
@section('content')

<form action="{{route('producto.update', $producto)}}" method="POST" class="producto_nuevo">
@csrf
@method('PATCH')
    <fieldset>
        <legend>Url de la imagen del producto</legend>
        <input value="{{old('imagen', $producto['imagen'])}}" name="imagen" id="url">
    </fieldset>
    <fieldset>
        <legend>Nombre del producto</legend>
        <input value="{{old('nombre', $producto['nombre'])}}" name="nombre" id="nombre">
    </fieldset>
    <fieldset>
        <legend>Descripcion del producto</legend>
        <input value="{{old('descripcion', $producto['descripcion'])}}" name="descripcion" id="descripcion">
    </fieldset>
    <fieldset>
        <legend>stock del producto</legend>
        <input value="{{old('stock', $producto['stock'])}}" name="stock" id="stock">
    </fieldset>
    <fieldset>
        <legend>categoria del producto</legend>
        
        <select name="categoria_id" id="categoria" autocomplete="off">
            @foreach($categorias as $categoria)
            <option value="{{$categoria->id}}" @if(old('categoria_id', $producto['categoria_id']) == $categoria->id) selected @endif>{{$categoria->nombre}}</option>
            @endforeach
        </select>
    </fieldset>
    <fieldset>
        <legend>Precio del producto</legend>
        <input value="{{old('stock', $producto['stock'])}}" type="number" name="precio" id="precio">
    </fieldset>
    <button>Agregar producto</button>
    
</form>
@if($errors->any())
    <div class="erorrs">
        @foreach($errors->all() as $error)
            <p class="error">{{$error}}</p>
        @endforeach
    </div>
@endif
@endsection