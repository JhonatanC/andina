@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Detalle producto</h3>
        </div>
        <div class="col-md-8 mt-3">
            <h3> <strong>Referencia:</strong> {{ $product->referencia }}</h3>
            <p> <strong>Descripción:</strong> {{ $product->description }}</p>
            <p> <strong>valor:</strong> {{ $product->valor }}</p>
        </div>
        <div class="col-md-8 mt-2">
            <a href="{{ route('products.index') }}" class="btn btn-danger">Regresar</a>
        </div>
    </div>
</div>
@endsection
