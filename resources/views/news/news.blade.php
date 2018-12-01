@extends('layout/app')

<?php $title = 'Latest News'; ?>
@include('includes.pageheading')

@section('content')
	
	<p class="float-right">Sort by name <select id "sortByTitle"></p>
		<option value="title">Select</option>
		<option value="title">Ascending</option>
		<option value="date">Descending</option>
	</select><br>
<div class="row" style="min-height: 400px;">
	<ul>
		@foreach ($news as $newss)
		
			<li><a href="news/{{ $newss->id }}" class="text-dark lead">{{ $newss->title }}</a></li>
			
		@endforeach
	</ul>
</div>
<div class="lead pagination"> {{ $news->links() }} </div>
@endsection