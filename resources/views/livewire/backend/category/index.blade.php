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
        @forelse($categories as $category)
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="ms-card">
                <div class="ms-card-img category-image">
                    <img src="{{ getFileUrl($category->image) }}" alt="card_img">
                </div>
                <div class="ms-card-body ">
                    <div class="wrapper-new2  m-0">
                        <h6>{{ $category->name }}</h6>
                    </div>
                    <div class="d-flex">
                        <a href="{{ route('admin.category.edit', $category->id)}}" wire:navigate class="btn btn-primary btn-md"><i class="fas fa-pencil-alt fs-16 mr-2"></i>Edit</a>
                        <a href="javascript:void(0)" wire:click="remove({{$category->id}})" class="btn btn-danger btn-md ml-2"><i class="fas fa-trash fs-16 mr-2"></i>Delete</a>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="col-lg-12">
            <div class="ms-card">
                <div class="ms-card-body ">
                    <h4 class="text-center m-0">No Category Found!!</h4>
                </div>
            </div>
        </div>

        @endforelse

        <div class="col-xl-12 col-md-12">
            {{ $categories->links() }}
        </div>
    </div>

</div>