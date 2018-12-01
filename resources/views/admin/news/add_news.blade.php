@extends ('admin.admin')

@section('content')
	<div class="row">
    	<div class="col-lg-4 col-md-4 col-sm-4">
		    <div class="panel panel-default">
		        <div class="panel-heading text-center"><h3 class="text-info">Create new news</h3>
		        	{{ Form::open (['action' =>'AdminNewsController@store', 'method' => 'POST']) }}
		        		{{ Form::bsText('title')}}
		        		{{ Form::bsTextarea('content')}}
		        		{{ Form::bsText('date') }}
		        		{{ Form::bsSubmit('Create', ['class' => 'center-block btn btn-primary']) }}
		        	{{ Form::close () }}
		        </div>
		    </div>
		</div>    
    </div>
@endsection
