@extends('layouts.master')

@section('title')
Laravel Shopping Cart
@endsection

@section('content')
@foreach($products->chunk(3) as $productChunk)
<div class="row my-2">
	@foreach($productChunk as $product)
	<div class="col-sm-6 col-md-4">
		<div class="card" style="width: 18rem;">
			<img class="card-img-top img-responsive" src="{{ $product->imagePath }}">
			<div class="card-body">
				<h5 class="card-title">{{ $product->title }}</h5>
				<p class="card-text description">{{ $product->description }}</p>
				<div class="pull-left price">{{ $product->price }}</div>
				<a href="#" class="btn btn-success pull-right">Add to Cart</a>
			</div>
		</div>
	</div>
	@endforeach
</div>
@endforeach
@endsection