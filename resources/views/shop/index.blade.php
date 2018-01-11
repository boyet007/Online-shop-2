@extends('layouts.master')

@section('title')
Laravel Shopping Cart
@endsection

@section('content')
<div class="my-2">
	<div class="col-sm-6 col-md-4">
		<div class="card" style="width: 18rem;">
			<img class="card-img-top img-responsive" src="https://images-na.ssl-images-amazon.com/images/I/71Ui-NwYUmL.jpg" alt="Card image cap">
			<div class="card-body">
				<h5 class="card-title">Product Title</h5>
				<p class="card-text description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore.</p>
				<div class="pull-left price">$12</div>
				<a href="#" class="btn btn-success pull-right">Add to Cart</a>
			</div>
		</div>
	</div>
</div>
@endsection