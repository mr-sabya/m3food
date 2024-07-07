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

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="ms-card">
                        <div class="ms-card-img">
                            <img src="{{ url('assets/backend/img/foodtech/food-1.jpg') }}" alt="card_img">
                        </div>
                        <div class="ms-card-body">

                            <div class="new">
                                <h6 class="mb-0">Veggies </h6>
                                <h6 class="ms-text-primary mb-0">$45.50</h6>
                            </div>
                            <div class="new meta">
                                <p>Qty:1467 </p>
                                <span class="badge badge-success">In Stock</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, dolor sit amet, consectetur adipiscing</p>
                            <div class="new mb-0">
                                <a href="#" class="btn grid-btn mt-0 btn-sm btn-primary">Remove</a>
                                <a href="#" class="btn grid-btn mt-0 btn-sm btn-secondary">Edit</a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

    </div>
</div>