@extends('admin.admin')

@section('content')
	<div style="min-height: 400px;">
		<h3 class="text-center text-info">List of news</h3>
		@foreach($news as $newss) 
			{{-- zbog paginacije morao sam da promenim ime druge varijable --}}
				
			<ul>
				<li class="lead"><a href="/admin/view-news/{{$newss->id}}"> {{ $newss->title }}</li></a>
			</ul>

		@endforeach
	</div>
	<div class="lead pagination" style="padding-left: auto;"> {{ $news->links() }} </div>
@endsection