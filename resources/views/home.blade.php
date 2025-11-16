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
            <div class="row">
                @each('products._product', $products, 'product')
            </div>
            <div class="d-flex justify-content-center mt-4">
                {{ $products->links() }}
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const buttons = document.querySelectorAll('.add-to-cart');

            buttons.forEach(button => {
                button.addEventListener('click', function () {
                    const productId = this.getAttribute('data-id');

                    fetch(`add-to-cart`, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({ product_id: productId })
                    })
                        .then(response => response.json())
                        .then(data => {
                            // Actualizar el contador del carrito
                            document.querySelector('.cart-count').innerHTML = data;
                        })
                        .catch(error => {
                            console.error('Error:', error);
                        });
                    // console.log('holas');

                });
            });
        });
    </script>
@endpush
