<div class="ms-content-wrapper">
    <div class="row">

        <x-backend.page.breadcrumb title="Add Category" />


        <div class="col-xl-6 col-md-12">
            <div class="ms-panel ms-panel-fh">
                <div class="ms-panel-header">
                    <h6>Add Category</h6>
                </div>
                <div class="ms-panel-body">
                    <form wire:submit.prevent="addCategory">
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="validationCustom18">Name</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Category Name" wire:model="name" wire:keyup="generateSlug">
                                    @error('name') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="validationCustom18">Slug</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Slug" wire:model="slug">
                                    @error('slug') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="validationCustom12">Image</label>
                                <div class="upload-image">
                                    @if($image)
                                    <img src="{{ $image->temporaryUrl() }}" />
                                    @else
                                    <h3>Image Preview</h3>
                                    @endif
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="form-control image-input" id="image" wire:model="image">
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