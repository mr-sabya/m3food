<div class="container">
    <div class="content py-5">
        <h3>Comments</h3>

        <div class="card">
            <div class="card-body">

                <div class="d-flex gap-2">
                    <input type="text" class="form-control" wire:model.lazy="body">
                    <button class="btn btn-primary" wire:click="addComment">Save</button>
                </div>
                @error('body')
                <span class="text-danger">{{ $message }}</span>
                @enderror

            </div>
        </div>

        @foreach($comments as $comment)
        <div class="card">
            <div class="card-body">
                <div class="d-flex">
                    <div class="w-100">
                        <div class="title d-flex align-items-center gap-2">
                            <h3>{{ $comment->user['name'] }}</h3>
                            <p class="m-0">{{ $comment->created_at->diffForHumans() }}</p>
                        </div>
                        <p>{{ $comment->body }}</p>
                    </div>
                    <div>
                        <button type="button" class="btn btn-danger" wire:click="remove({{$comment->id}})">Delete</button>
                    </div>
                </div>

            </div>
        </div>
        @endforeach

        {{ $comments->links() }}
    </div>

</div>