<div class="col-md-12">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb pl-0">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')}}" wire:navigate><i class="material-icons">home</i> Dashboard</a></li>
            @if(isset($otherlink))
            <li class="breadcrumb-item"><a href="{{ $otherlink }}" wire:navigate>{{ $linkname }}</a></li>
            @endif
            <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
        </ol>
    </nav>
</div>

<div class="col-lg-12">
    @if (session()->has('success'))
    <div class="alert alert-success">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    @endif

    @if (session()->has('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    @endif
</div>