@extends('backend.layouts.app')
@section('content')
<livewire:backend.product.create />
@endsection

@section('scripts')
<script>
    $('.summernote').summernote({
        placeholder: 'Your content here....',
        tabsize: 2,
        height: 300
    });
</script>

@endsection