@extends('layouts.app')

@section('content')
    <div class="row d-flex justify-content-center">
        <div class="col-sm-8">
            <div class="card">
                <div class="card-body">
                    <h3>Create Product</h3>
                    <form action="{{ route('products.update', $product->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        @include('products._form',['product'=>$product])
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
