<div class="content {{ $class_name }}">
    @forelse($products as $product)
    <div class="product">
        <div class="img">
            @if($product->is_new)
            <div class="new">New</div>
            @endif
            <a href="{{ route('product.show', $product->slug) }}" wire:navigate class="d-block">
                <img src="{{ url('storage', $product->thumbnail) }}" alt="" loading="lazy">
            </a>
            <div class="cart-btn">
                <a href="{{ route('product.show', $product->slug) }}" wire:navigate class="single-link">
                    <span class="material-icons-outlined">
                        visibility
                    </span>
                </a>

                <button class="single-link">
                    <span class="material-icons-outlined">
                        shopping_cart
                    </span>
                </button>

            </div>
        </div>
        <div class="description">
            <a class="caption d-block" href="{{ route('product.show', $product->slug) }}" wire:navigate>
                {{ $product->name }}
            </a>
            <div class="price">
                Tk {{ $product->price}}
            </div>
        </div>
    </div>
    @empty

    @endforelse
</div>