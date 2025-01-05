@extends('frontend.layouts.app')

@section('content')
<livewire:frontend.product.show productId="{{ $product->id }}" />
@endsection