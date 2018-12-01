@extends ('admin.admin')

@section('content')
 <div class="row">
    <div class="col-md-4">
        <div class="panel panel-default">
            	<a class="btn btn-default center-block" style="margin-left: 20px"; href="/admin/view-news/{{$news->id}}">Back</a>
            <div class="panel-body">
            	<div class="panel-heading text-center"><h3 class="text-info">Edit news</h3>
	                {{ Form::open(['action' => ['AdminNewsController@update', $news->id], 'method' => 'POST']) }}   
	                {{ Form::bsText('title', $news->title) }}
	                {{ Form::bsTextarea('content', $news->content) }}
	                {{ Form::hidden('_method', 'PUT') }}            
	                {{ Form::bsSubmit('Confirm', ['class' => 'btn btn-primary center-block']) }}
	            	{!! Form::close() !!}
        		</div>
            </div>
        </div>
    </div>
</div>
@endsection