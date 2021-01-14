@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 10px">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-7">
                        <h4>Productos</h4>
                    </div>
                </div>
                <hr>
                <div class="row">
                    @foreach($products as $pro)
                        <div class="col-lg-3">
                            <div class="card" style="margin-bottom: 20px; height: auto;">
                                <div class="card-body">
                                    <a href=""><h6 class="card-title">Referencia: {{ $pro->referencia }}</h6></a>
                                    <p>{{ $pro->description }}</p>
                                    <p>${{ $pro->valor }}</p>
                                    <form action="{{ route('cart.store') }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" value="{{ $pro->id }}" id="id" name="id">
                                        <input type="hidden" value="{{ $pro->referencia }}" id="referencia" name="referencia">
                                        <input type="hidden" value="{{ $pro->description }}" id="description" name="description">
                                        <input type="hidden" value="{{ $pro->valor }}" id="valor" name="valor">
                                        <!-- <input type="hidden" value="{{ $pro->slug }}" id="slug" name="slug"> -->
                                        <input type="hidden" value="1" id="quantity" name="quantity">
                                        <div class="card-footer" style="background-color: white;">
                                              <div class="row">
                                                <button class="btn btn-secondary btn-sm" class="tooltip-test" title="add to cart">
                                                    <i class="fa fa-shopping-cart"></i> Agregar
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection