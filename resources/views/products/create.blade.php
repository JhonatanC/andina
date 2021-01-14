@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Crear producto</h3>
        </div>
        <div class="col-md-8">
            <form action="{{ route('products.store') }}" method="POST">

                @csrf

                <div class="form-group">
                    <label for="">Referencia:</label>
                    <input class="form-control" type="text" name="referencia">
                </div>

                <div class="form-group">
                    <label for="">Description:</label>
                    <input class="form-control" type="text" name="description">
                </div>

                <div class="form-group">
                    <label for="">Valor:</label>
                    <input class="form-control" type="text" name="valor">
                </div>

                <div class="form-group">
                    <input class="btn btn-primary" type="submit" value="Crear Producto">
                    <a href="{{ route('products.index') }}" class="btn btn-danger">Regresar</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
