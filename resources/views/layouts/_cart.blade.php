<button class="btn btn-outline-primary position-relative">
    <i class="fas fa-shopping-cart"></i>
    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger cart-count">
        {{ cart()->count() }}
        <span class="visually-hidden">items en carrito</span>
    </span>
</button>
