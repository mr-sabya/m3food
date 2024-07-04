<div class="ms-content-wrapper">
    <div class="row">

        <x-backend.page.breadcrumb title="Edit Category" otherlink="{{ route('admin.category.index') }}" linkname="Category" />


        <div class="col-xl-6 col-md-12">
            <div class="ms-panel ms-panel-fh">
                <div class="ms-panel-header">
                    <h6>Edit Category</h6>
                </div>
                <div class="ms-panel-body">
                    <form wire:submit.prevent="updateCategory">

                        <input type="hidden" name="id" wire:model="category_id">

                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="validationCustom18">Name</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Category Name" wire:model="name">
                                    @error('name') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="slug">Slug</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Slug" wire:model="slug">
                                    @error('slug') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                                    <a class="d-block" href="javascript:void(0)" type="button" wire:click="generateSlug">
                                        <div class="generate-slug">
                                            <i class="flaticon-reuse ml-2"></i> Generate
                                        </div>
                                    </a>
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

                        <button class="btn btn-secondary d-block" type="submit">Save</button>

                    </form>

                </div>
            </div>

        </div>

    </div>
</div>


<script>
    document.addEventListener('livewire:init', () => {
        Livewire.on('post-created', (event) => {
            //
        });
    });
</script>