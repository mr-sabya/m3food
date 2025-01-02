<div class="row mt-4">
    <div class="col-lg-12">
        <div class="ms-panel h-100">
            <div class="ms-panel-header">
                <h6>{{ $page }}</h6>
            </div>
            <div class="ms-panel-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card mb-4">
                            <div class="card-body">
                                <form wire:submit.prevent="{{ $facilityEdit ? 'updateFacility' : 'saveFacility'}}">
                                    <div class="mb-3">
                                        <label for="title">{{ $page }} Title</label>
                                        <div class="input-group">
                                            <textarea class="form-control" placeholder="{{ $page }} title" id="title" wire:model="title"></textarea>
                                            @error('title') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                                        </div>
                                    </div>
                                    <button class="btn btn-secondary d-block" type="submit">{{ $facilityEdit ? 'Update' : 'Save' }}</button>
                                </form>
                            </div>
                        </div>


                        <div class="card mb-4 {{ $isItemAdd == true ? '' : 'd-none' }}">
                            <div class="card-body">
                                <form wire:submit.prevent="{{ $itemEditMode ? 'updateItem' : 'saveItem' }}">
                                    <p>For: {{ $facility_title }}</p>
                                    <input type="hidden" name="facility_id" id="facility_id" wire:model="facility_id">
                                    <div class="mb-3">
                                        <label for="text">Text</label>
                                        <div class="input-group">
                                            <textarea class="form-control" placeholder="Text" id="text" wire:model="text"></textarea>
                                            @error('text') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <button class="btn btn-secondary d-block" type="submit">{{ $itemEditMode ? 'Update' : 'Save' }}</button>
                                        <button class="btn btn-primary d-block ml-2" wire:click="cancelItemForm" type="button">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        @foreach($facilities as $facility)
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start">
                                    <h4 class="m-0">{{ $loop->iteration }}. {{ $facility->title }}</h4>

                                    <div class="d-flex ">
                                        <button style="min-width: 0;" class="btn btn-primary btn-sm mt-0" wire:click="editFacility({{ $facility->id }})"><i class="fas fa-pencil-alt"></i></button>
                                        <button style="min-width: 0;" class="btn btn-danger btn-sm mt-0 ml-2" wire:click=""><i class="fas fa-trash"></i></button>
                                        <button class="btn btn-secondary btn-sm mt-0 ml-2" wire:click="addItem({{ $facility->id }})">Add Item</button>

                                    </div>
                                </div>
                                <hr>
                                <ol>
                                    @forelse($facility->items as $item)
                                    <li class="border-bottom pb-3 pt-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span>
                                                {{ $item->text }}

                                            </span>
                                            <div class="d-flex">

                                                <button style="min-width: 0;" class="btn btn-primary btn-sm mt-0 ml-2" wire:click="editItem({{ $item->id }})"><i class="fas fa-pencil-alt"></i></button>
                                                <button style="min-width: 0;" class="btn btn-danger btn-sm mt-0 ml-2" wire:click=""><i class="fas fa-trash"></i></button>
                                            </div>
                                        </div>
                                    </li>
                                    @empty
                                    <li>No items added</li>
                                    @endforelse
                                </ol>
                            </div>
                        </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>

    </div>
</div>