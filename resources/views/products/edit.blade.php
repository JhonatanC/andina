@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Editar producto</h3>
        </div>
        <div class="col-md-8">
            <form action="{{ route('products.update',$product->id) }}" method="POST">

                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="">Referencia:</label>
                    <input class="form-control" type="text" value="{{ $product->referencia }}" name="referencia">
                </div>

                <div class="form-group">
                    <label for="">Description:</label>
                    <input class="form-control" type="text" value="{{ $product->description }}" name="description">
                </div>

                <div class="form-group">
                    <label for="">Valor:</label>
                    <input class="form-control" type="text" value="{{ $product->valor }}" name="valor">
                </div>

                <div class="form-group">
                    <input class="btn btn-primary" type="submit" value="Actualizar Producto">
                    <a href="{{ route('products.index') }}" class="btn btn-danger">Regresar</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
