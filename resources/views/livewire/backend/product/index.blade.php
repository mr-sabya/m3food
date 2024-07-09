<div class="ms-content-wrapper">

    <div class="row">

        <x-backend.page.breadcrumb title="{{ $page }}" />

        <div class="col-lg-12">
            <div class="ms-card">
                <div class="ms-card-body ms-panel-header new m-0">
                    <h4 class="m-0">All {{ $page }}s</h4>
                    <a href="{{ route('admin.product.create') }}" class="btn btn-success btn-md m-0" wire:navigate><i class="fas fa-plus fs-16 mr-2"></i>Add {{ $page }}</a>
                </div>
            </div>

        </div>
        <div class="col-md-12">
            <div class="row">
                @forelse($products as $product)
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="ms-card">
                        <div class="ms-card-img">
                            <a href="{{ route('admin.product.show', $product->id)}}" wire:navigate>
                                <img src="{{ getFileUrl($product->image) }}" alt="card_img">
                            </a>
                        </div>
                        <div class="ms-card-body">

                            <div class="new">
                                <h6 class="mb-0">{{ $product->name }} </h6>
                                <h6 class="ms-text-primary mb-0">$45.50</h6>
                            </div>
                            <div class="new meta">
                                <p>Qty:1467 </p>
                                <span class="badge badge-success">In Stock</span>
                            </div>
                            <p>{!! $product->heading !!}</p>
                            <div class="new mb-0">
                                <a href="#" class="btn grid-btn mt-0 btn-sm btn-primary">Remove</a>
                                <a href="{{ route('admin.product.edit', $product->id)}}" wire:navigate class="btn grid-btn mt-0 btn-sm btn-secondary">Edit</a>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-lg-12">
                    <div class="ms-card">
                        <div class="ms-card-body ">
                            <h4 class="text-center m-0">No {{ $page}} Found!!</h4>
                        </div>
                    </div>
                </div>
                @endforelse
            </div>
        </div>

        <div class="col-xl-12 col-md-12">
            {{ $products->links() }}
        </div>

    </div>
</div>