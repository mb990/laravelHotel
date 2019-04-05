@extends('layout/app')

<?php $title = 'Latest News'; ?>
@include('includes.pageheading')

@section('content')
<div class="row" style="min-height: 400px;">
	<ul>
		@foreach ($news as $newss)
		
			<li><a href="news/{{ $newss->id }}" class="lead" style="color:white">{{ $newss->title }}</a></li>
			
		@endforeach
	</ul>
</div>
<div class="lead pagination"> {{ $news->links() }} </div>
@endsection