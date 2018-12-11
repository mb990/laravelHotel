@extends('layout.app')
@section ('content')
	
	<a class="btn btn-default center-block" href="/news">Back</a>
	<div class="container-fluid" style="margin-top: 30px;">
		<ul>
			<h3 class="text-center">{{ $news->title }}</h3><br>
			<li class="lead">{{ $news->content }}</li><br>
			<li>{{ $news->datetime }}</li>
		</ul>	
		
	</div>

@endsection