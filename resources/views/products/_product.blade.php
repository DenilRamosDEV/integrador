<div class="col-md-4 mb-4">
    <div class="card h-100 shadow-sm">
        @if(!empty($product->image))
            <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}"
                style="height:200px; object-fit:cover;">
        @else
            <img src="{{ asset('images/placeholder.png') }}" class="card-img-top" alt="Sin imagen"
                style="height:200px; object-fit:cover;">
        @endif

        <div class="card-body d-flex flex-column">
            <h5 class="card-title mb-1">{{ $product->name }}</h5>
            <small class="text-muted mb-2">{{ $product->category->name ?? 'Sin categoría' . $product->category_id }}</small>

            <p class="card-text text-secondary mb-3" style="flex:1;">
                {{ \Illuminate\Support\Str::limit($product->description, 120) }}
            </p>

            <div class="d-flex justify-content-between align-items-center">
                <div class="h5 mb-0">s/.{{ number_format($product->price, 2) }}</div>

                <div class="btn-group" role="group" aria-label="Acciones">
                    <form action="" method="POST" class="d-inline mx-1">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-success" title="Agregar al carrito">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                    </form>

                    @if(auth()->user()->isAdmin())
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-primary mx-1" title="Editar">
                            <i class="fas fa-edit"></i>
                        </a>

                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline mx-1"
                            onsubmit="return confirm('¿Está seguro que desea eliminar este producto?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" title="Eliminar">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
