<div class="ms-content-wrapper">
    <div class="row">

        <x-backend.page.breadcrumb title="Edit {{ $page }}" otherlink="{{ route('admin.product.index') }}" linkname="{{ $page }}" />
    </div>
    <form wire:submit.prevent="update">
        <div class="row">

            <div class="col-xl-8 col-md-12">
                <div class="ms-panel">
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

                        </div>
                    </div>

                </div>
                <div class="ms-panel">
                    <div class="ms-panel-body">
                        <div class="form-row">

                            <div class="col-md-12 mb-3">
                                <label for="heading">Heading</label>
                                <div class="input-group">
                                    <textarea class="form-control" placeholder="Heading" id="heading" wire:model="heading"></textarea>
                                    @error('heading') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="tag_line_1">Tagline (Before Video)</label>
                                <div class="input-group">
                                    <textarea class="form-control" placeholder="Tag Line" id="tag_line_1" wire:model="tag_line_1"></textarea>
                                    @error('tag_line_1') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="video">Video</label>
                                <div class="input-group">
                                    <textarea class="form-control" placeholder="Youtube Video" id="video" wire:model="video"></textarea>
                                    @error('video') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label for="tag_line_2">Tagline (After Video)</label>
                                <div class="input-group">
                                    <textarea class="form-control" placeholder="Tag Line" id="tag_line_2" wire:model="tag_line_2"></textarea>
                                    @error('tag_line_2') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="ms-panel">
                    <div class="ms-panel-body">
                        <div class="form-row">

                            <div class="col-md-12 mb-3">
                                <label for="benifit_title">Title for Benifit Section</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Title for Benifit Section" id="benifit_title" wire:model="benifit_title">
                                    @error('benifit_title') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                                </div>
                            </div>


                            <div class="col-md-12">
                                <label>Image for Benifit Section</label>
                                <label class="upload-image" for="benifit_image">
                                    @if($benifit_image)
                                    <img src="{{ $benifit_image->temporaryUrl() }}" />
                                    @else
                                    <h3>Image Preview</h3>
                                    @endif
                                </label>
                                <div class="custom-file">
                                    <input type="file" class="form-control image-input" id="benifit_image" wire:model="benifit_image">
                                    @error('benifit_image') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="ms-panel">
                    <div class="ms-panel-body">
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="para_1">Paragraph (Before Order Button)</label>
                                <div class="input-group">
                                    <textarea class="form-control" placeholder="Parahraph" id="para_1" wire:model="para_1"></textarea>
                                    @error('para_1') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label for="para_2">Paragraph (Before After Button)</label>
                                <div class="input-group">
                                    <textarea class="form-control" placeholder="Paragraph" id="para_2" wire:model="para_2"></textarea>
                                    @error('para_2') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="ms-panel">
                    <div class="ms-panel-body">
                        <div class="form-row">

                            <div class="col-md-12 mb-3">
                                <label for="use_title">Title for Uses Section</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Title for Benifit Section" id="use_title" wire:model="use_title">
                                    @error('use_title') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label for="use_title">Text for Uses Section</label>
                                <div class="input-group">
                                    <textarea name="use_text" id="use_text" class="form-control summernote" wire:model="use_text"></textarea>
                                    @error('use_text') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="ms-panel">
                    <div class="ms-panel-body">
                        <div class="form-row">

                            <div class="col-md-12 mb-3">
                                <label for="warning_title">Title for Warning Section</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Title for warning Section" id="warning_title" wire:model="warning_title">
                                    @error('warning_title') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label for="warning_text">Text for Uses Section</label>
                                <div class="input-group">
                                    <textarea name="warning_text" id="use_text" class="form-control summernote" wire:model="warning_text"></textarea>
                                    @error('warning_text') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="ms-panel">
                    <div class="ms-panel-body">
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="facility_title">Title for Facility Section</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Title for Facility Section" id="facility_title" wire:model="facility_title">
                                    @error('facility_title') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                                </div>
                            </div>

                        </div>

                        <button class="btn btn-secondary d-block" type="submit">Save</button>
                    </div>
                </div>

            </div>

            <div class="col-xl-4 col-md-12">
                <div class="ms-panel">
                    <div class="ms-panel-header">
                        <h6>{{ $page }} Others</h6>
                    </div>
                    <div class="ms-panel-body">
                        <div class="form-row">

                            <div class="col-md-12 mb-3">
                                <label for="category">Category</label>
                                @foreach($categories as $category)
                                <div class="form-group mb-2">
                                    <label class="ms-checkbox-wrap ms-checkbox-primary">
                                        @if($product->getCategory($category->id))
                                        <input type="checkbox" value="{{ $category->id }}" id="category_{{ $category->id }}" wire:model="category.{{ $category->id }}" checked> <i class="ms-checkbox-check"></i>
                                        @else
                                        <input type="checkbox" value="{{ $category->id }}" id="category_{{ $category->id }}" wire:model="category.{{ $category->id }}" checked> <i class="ms-checkbox-check"></i>
                                        @endif
                                    </label>
                                    <span> <label for="category_{{ $category->id }}">{{ $category->name }} </label></span>
                                </div>
                                @endforeach
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
    </form>
</div>