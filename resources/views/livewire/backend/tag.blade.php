<div class="ms-content-wrapper box">

    <div class="row">

        <x-backend.page.breadcrumb title="{{ $page }}" />

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
                        @if($tag)
                        <input type="hidden" wire:model="tagId">
                        @endif

                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="name">Name</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="tag" id="name" wire:model="name">
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
                        @if($addData)
                        <button wire:click.prevent="store()" class="btn btn-secondary d-block" type="submit">Save</button>
                        @else
                        <div class="d-flex">
                            <button wire:click.prevent="update()" class="btn btn-secondary d-block" type="submit">Update</button>
                            <button wire:click.prevent="create()" class="btn btn-secondary d-block ml-2" type="button">Cancel</button>
                        </div>
                        @endif

                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="ms-card">
                <div class="ms-card-body ">
                    <div class="table-responsive">
                        <div class="d-flex justify-content-end mb-3">
                            <input type="text" class="form-control w-25" wire:model.live="search" placeholder="Search...">
                        </div>
                        <table class="table table-bordered thead-primary">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Slug</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($tags as $tag)
                                <tr>
                                    <th scope="row">{{ $loop->index + 1 }}</th>
                                    <td>{{ $tag->name }}</td>
                                    <td>{{ $tag->slug }}</td>
                                    <td>

                                        <a href="javascript:void(0)" wire:click="edit({{$tag->id}})"><i class="fas fa-pencil-alt text-secondary"></i></a>
                                        <a href="javascript:void(0)" wire:click="delete({{ $tag->id }})" wire:confirm="Are you sure you want to delete this post?"><i class="far fa-trash-alt ms-text-danger"></i></a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="4">No {{ $page }} Found!!</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $tags->links() }}
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>