@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mb-3">
            <h3 class="text-center">Listado de productos</h3>
        </div>

        @foreach ($products as $product)
            <div class="col-md-4">
                <h4>Referencia - {{ $product->referencia }}</h4>
                <p>{{ $product->description }}</p>
                <p>{{ $product->valor }}</p>
            </div>
        @endforeach

    </div>
</div>
@endsection
