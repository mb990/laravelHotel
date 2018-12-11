@extends('layout/app')

<?php $title = 'Latest News'; ?>
@include('includes.pageheading')

@section('content')
	
	<p class="float-right">Sort by name <select id "sortByTitle" onchange="location = this.value;"></p>
		<option value="{{$title}}">Select</option>
		<option value="title">Title</option>
		<option value="date">Date</option>
	</select><br>
<div class="row" style="min-height: 400px;">
	<ul>
		@foreach ($news as $newss)
		
			<li><a href="news/{{ $newss->id }}" class="lead" style="color:white">{{ $newss->title }}</a></li>
			
		@endforeach
	</ul>
</div>
<div class="lead pagination"> {{ $news->links() }} </div>
@endsection