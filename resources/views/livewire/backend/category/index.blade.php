<div class="ms-content-wrapper box">

    <div class="row">

        <x-backend.page.breadcrumb title="Category" />

        <div class="col-lg-12">
            <div class="ms-card">
                <div class="ms-card-body ms-panel-header new m-0">
                    <h4 class="m-0">All Categories</h4>
                    <a href="{{ route('admin.category.create') }}" class="btn btn-success btn-md m-0" wire:navigate><i class="fas fa-plus fs-16 mr-2"></i>Add Category</a>
                </div>
            </div>

        </div>

        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="ms-card">
                <div class="ms-card-img">
                    <img src="{{ url('assets/backend/img/foodtech/food-1.jpg') }}" alt="card_img">
                </div>
                <div class="ms-card-body ">
                    <div class="wrapper-new2  m-0">
                        <h6>Pizza</h6>
                    </div>
                    <div class="d-flex">
                        <a href="#" class="btn btn-primary btn-md"><i class="fas fa-pencil-alt fs-16 mr-2"></i>Edit</a>
                        <a href="#" class="btn btn-danger btn-md ml-2"><i class="fas fa-trash fs-16 mr-2"></i>Delete</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-xl-12 col-md-12">
            <div class="load">
                <i class="fas fa-redo alt  space text-muted" aria-hidden="true"></i><span class="more">Load More</span>
            </div>
        </div>
    </div>

</div>