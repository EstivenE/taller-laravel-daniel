@extends('layouts.app')

@section('title','Productos')
    
@section('content')
<div class="producto_detalle">
    <img src="{{$producto->imagen}}" alt="">
    <h2>{{$producto->nombre}}</h2>
    <p>{{$producto->descripcion}}</p>
    <p class="stock"><b>Disponible:</b> {{ $producto->stock }} </p>
    <p class="categoria"><b>Categoria:</b> {{ $producto->categoria->nombre }} </p>
    <p class="precio"><b>Precio:</b> {{ $producto->precio }} </p>
    <button title="añadir al carrito" class="agregar-compra">🛒</button>
    <div class="detalles">
        <a href="{{ route('producto.edit', $producto) }}"> 
            <button title="editar producto">🖋️</button>
        </a>
        <form action="{{ route('producto.delete', $producto) }}" method="POST">
            @csrf
            @method('DELETE')
            <button title="Eliminar producto">🗑️</button>
        </form>
    </div>
</div>
@endsection('content')


