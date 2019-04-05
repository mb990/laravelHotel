@extends('admin.admin')
@section ('content')
	<br>
	<a class="btn btn-default center-block" href="/admin/news">Back</a><br><br>
			<a class="btn btn-info center-block">Latest</a><br><br>
		{!! Form::open(['action' => ['AdminNewsController@destroy', $news->id], 'method' => 'POST']) !!}
	        {{ Form::hidden('_method', 'DELETE') }}
	        {{ Form::bsSubmit('Delete', ['class' => 'btn btn-xs btn-danger']) }}
	    {!! Form::close() !!}</a>
	<div class="container-fluid" style="margin-top: 30px; min-height: 400px;">
		<ul>
			<h2 class="text-center">{{ $news->title }}</h2><br>
			<li class="lead" style="min-height: 200px;">{{ $news->content }}</li>
			<li>{{ $news->datetime }}</li>
		</ul>	
		
	</div>
	

@endsection