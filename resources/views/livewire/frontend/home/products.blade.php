<section id="products">
    <div class="container">
        
        <livewire:frontend.home.product-grid class_name="grid"/>

        <div class="text-center">
            <a href="{{ route('shop')}}" class="btn more-btn" wire:navigate>
                More Product
                <span class="material-icons-outlined">
                    chevron_right
                </span>
            </a>
        </div>
    </div>
</section>