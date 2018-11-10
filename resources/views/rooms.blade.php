@extends('layout/app')
<?php $title = 'Our Rooms' ?>
@include ('includes.pageheading')

@section('content')

<div class="container">
	<div class="col-lg-12 col-md-12 col-sm-12">
		<h2 class="text-center">Available rooms</h2>
	</div>
	<div class="row">
		<div class="float-left col-lg-4 col-md-12 col-sm-12">
			<img class="room_item" src="https://s-media-cache-ak0.pinimg.com/originals/1e/97/24/1e9724023761181bcb976a1eec850832.jpg">
			<p>Room Description</p>
			<p>Number of rooms</p>
			<p>Price</p>
			<button>Book</button>
		</div>
		<div class=" float-left col-lg-4 col-md-12 col-sm-12";>
			<img class="room_item" src="https://s-media-cache-ak0.pinimg.com/originals/1e/97/24/1e9724023761181bcb976a1eec850832.jpg">
			<p>Room Description</p>
			<p>Number of rooms</p>
			<p>Price</p>
			<button>Book</button>
		</div>
		<div class=" float-left col-lg-4 col-md-12 col-sm-12";>
			<img class="room_item" src="https://s-media-cache-ak0.pinimg.com/originals/1e/97/24/1e9724023761181bcb976a1eec850832.jpg">
			<p>Room Description</p>
			<p>Number of rooms</p>
			<p>Price</p>
			<button>Book</button>
		</div>
		<div class=" float-left col-lg-4 col-md-12 col-sm-12";>
			<img class="room_item" src="https://s-media-cache-ak0.pinimg.com/originals/1e/97/24/1e9724023761181bcb976a1eec850832.jpg">
			<p>Room Description</p>
			<p>Number of rooms</p>
			<p>Price</p>
			<button>Book</button>
		</div>
	</div>
</div>
@endsection