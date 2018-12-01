@extends('admin.admin')

@section('content')
	<div><br>
		<ul class="list-group">
			<li class="list-group-item lead">Id: {{$user->id}}</li>
			<li class="list-group-item lead">Name: {{$user->name}}</li>
			<li class="list-group-item lead">Email: {{$user->email}}</li>
		</ul>
	</div>
	{{-- <div class="btn btn-info"><a href="/users">Users</a></div> --}}
@endsection