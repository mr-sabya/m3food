<div class="ms-content-wrapper box">

    <div class="row">

        <x-backend.page.breadcrumb title="Banner" />

        <div class="col-lg-12">
            <div class="ms-card">
                <div class="ms-card-body ms-panel-header new m-0">
                    <h4 class="m-0">All {{ $page }}s</h4>

                </div>
            </div>

        </div>

        <div class="col-lg-4">
            <div class="ms-card">
                <div class="ms-card-body">
                    <form enctype="multipart/form-data">
                        @if($banner)
                        <input type="hidden" wire:model="bannerId">
                        @endif
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="validationCustom18">Name</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Banner Name" id="name" wire:model="name">
                                    @error('name') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label>Image</label>
                                <label class="upload-image" for="image">

                                    @if($uploadImage)
                                    @if($image)
                                    <img src="{{ $image->temporaryUrl() }}" />
                                    @else
                                    <h3>Image Preview</h3>
                                    @endif
                                    @elseif(!$uploadImage)
                                    <img src="{{ getFileUrl($banner->image) }}" />
                                    @else
                                    <h3>Image Preview</h3>
                                    @endif
                                </label>
                                <div class="custom-file">
                                    <input type="file" class="form-control image-input" id="image" wire:model="image" wire:change="activeImageUpload">
                                    @error('image') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                                </div>
                            </div>
                        </div>
                        @if($addBanner)
                        <button wire:click.prevent="storeBanner()" class="btn btn-secondary d-block" type="submit">Save</button>
                        @else
                        <div class="d-flex">
                            <button wire:click.prevent="updateBanner()" class="btn btn-secondary d-block" type="submit">Update</button>
                            <button wire:click.prevent="addPost()" class="btn btn-secondary d-block ml-2" type="button">Cancel</button>
                        </div>
                        @endif

                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="row">
                @forelse($banners as $banner)
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="ms-card">
                        <div class="ms-card-img category-image">
                            <img src="{{ getFileUrl($banner->image) }}" alt="card_img">
                        </div>
                        <div class="ms-card-body ">
                            <div class="wrapper-new2  m-0">
                                <h6>{{ $banner->name }}</h6>
                            </div>
                            <div class="d-flex">
                                <a href="javascript:void(0)" wire:click="editBanner({{$banner->id}})" class="btn btn-primary btn-md"><i class="fas fa-pencil-alt fs-16 mr-2"></i>Edit</a>
                                <a href="javascript:void(0)" wire:click="delete({{ $banner->id }})" wire:confirm="Are you sure you want to delete this post?" class="btn btn-danger btn-md ml-2"><i class="fas fa-trash fs-16 mr-2"></i>Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-lg-12">
                    <div class="ms-card">
                        <div class="ms-card-body ">
                            <h4 class="text-center m-0">No {{ $page }} Found!!</h4>
                        </div>
                    </div>
                </div>

                @endforelse

                <div class="col-xl-12 col-md-12">
                    {{ $banners->links() }}
                </div>
            </div>
        </div>

    </div>

</div>