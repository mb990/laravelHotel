@extends('layout/app')

<?php $title = 'Latest News'; ?>
@include('includes.pageheading')

@section('content')
<div class="row" style="min-height: 400px;">
	<ul>
		@foreach ($news as $newss)
		
			<li><a href="/news/{{ $newss->id }}" class="lead" style="color:white">{{ $newss->title }}</a></li>
			
		@endforeach
	</ul>
</div>
<div id="search">
		<form action="/all-news/search/" method="GET">
			<input type="text" name ="news" placeholder="Search News"/>
			<button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white">Search</i></button>
		</form>
</div>
<div class="lead pagination"> {{ $news->links() }} </div>
@endsection