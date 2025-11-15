@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2>Productos</h2>
                <a href="{{ route('products.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Agregar Nuevo
                </a>
            </div>
            @each('products._product', $products, 'product')
        </div>
    </div>
@endsection
