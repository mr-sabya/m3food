<div class="ms-content-wrapper">
    <div class="row">

        <x-backend.page.breadcrumb title="Edit {{ $page }}" otherlink="{{ route('admin.product.index') }}" linkname="{{ $page }}" />
    </div>
    <form wire:submit.prevent="update">
        <div class="row">

            <div class="col-xl-8 col-md-12">
                <div class="ms-panel h-100">
                    <div class="ms-panel-header">
                        <h6>Edit {{ $page }}</h6>
                    </div>
                    <div class="ms-panel-body">
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="name">Name</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="{{ $page }} Name" id="name" wire:model="name">
                                    @error('name') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="slug">Slug</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Slug" id="slug" wire:model="slug">
                                    @error('slug') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                                    <a class="d-block" href="javascript:void(0)" type="button" wire:click="generateSlug">
                                        <div class="generate-slug">
                                            <i class="flaticon-reuse ml-2"></i> Generate
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="title">Title For Details Page</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Title" id="title" wire:model="title">
                                    @error('title') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="tagline">Tagline</label>
                                <div class="input-group">
                                    <textarea class="form-control" placeholder="Tagline" id="tagline" wire:model="tagline"></textarea>
                                    @error('tagline') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label for="details">Details</label>
                                <div class="input-group">

                                    <livewire:quill-text-editor
                                        wire:model.live="details"
                                        theme="snow" />
                                    @error('details') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group mb-2">
                                    <label class="ms-checkbox-wrap ms-checkbox-primary">
                                        <input type="checkbox" value="1" id="is_new" wire:model="is_new"> <i class="ms-checkbox-check"></i>
                                    </label>
                                    <span> <label for="is_new">New</label></span>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group mb-2">
                                    <label class="ms-checkbox-wrap ms-checkbox-primary">
                                        <input type="checkbox" value="1" id="is_trending" wire:model="is_trending"> <i class="ms-checkbox-check"></i>
                                    </label>
                                    <span> <label for="is_trending">Trending?</label></span>
                                </div>
                            </div>



                        </div>

                        <button class="btn btn-secondary d-block" type="submit">Save</button>
                    </div>

                </div>

            </div>

            <div class="col-xl-4 col-md-12">
                <div class="ms-panel h-100">
                    <div class="ms-panel-header">
                        <h6>{{ $page }} Others</h6>
                    </div>
                    <div class="ms-panel-body">
                        <div class="form-row">

                            <div class="col-md-12 mb-3">
                                <label for="category_id">Category</label>
                                <div class="form-group mb-2">
                                    <select name="category_id" id="category_id" class="form-control" wire:model="category_id">
                                        <option value="">Select Category</option>
                                        @foreach($categories as $category)
                                        <option value="{{ $category->id }}"> {{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('tagline') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror

                                </div>
                            </div>


                            <div class="col-md-12 mb-3">
                                <label>Thumbnail</label>
                                <label class="upload-image" for="thumbnail">
                                    @if($uploadThumbnail)
                                    @if($thumbnail)
                                    <img src="{{ $thumbnail->temporaryUrl() }}" />
                                    @else
                                    <h3>Image Preview</h3>
                                    @endif
                                    @elseif(!$uploadThumbnail)
                                    <img src="{{ getFileUrl($product->thumbnail) }}" />
                                    @else
                                    <h3>Image Preview</h3>
                                    @endif
                                </label>
                                <div class="custom-file">
                                    <input type="file" class="form-control image-input" id="thumbnail" wire:model="thumbnail" wire:change="activeThumbnailUpload">
                                    @error('thumbnail') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
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
                                    <img src="{{ getFileUrl($product->image) }}" />
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


                    </div>
                </div>

            </div>
        </div>
    </form>


    <!-- facility -->
    <livewire:backend.product.facility productId="{{ $product_id }}" />
    <!-- facility -->
</div>