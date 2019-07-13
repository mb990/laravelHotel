@extends('layout/app')
<?php $title = "Contact"; ?>
@include ('includes.pageheading')
@section('content')
<h3 class="text-center" style="height:100px;">CONTACT US<br></h3>
<style>
    .invalid-feedback{
        display: block;
    }
</style>
{{-- @include('inc.errors') --}}
{!! Form::open(['url' => 'contact/send']) !!}
{{ csrf_field() }}
@if (Session::has('flash_message'))
    <div class="alert alert-success">{{ Session::get('flash_message') }}</div>
@endif
<div class="form-group">
    {!! Form::label('name', 'Name') !!} *</br>
    {{ Form::text('name', '', ['class' => 'form-control','placeholder' => 'Name']) }}
    @if($errors->has('name'))
        <p class="text-warning invalid-feedback"><strong>{{ $errors->first('name') }}</strong></p>
    @endif
</div>
<div>
    {!! Form::label('email', 'Email') !!} *<br>
    {!! Form::email('email', '', ['class' => 'form-control','placeholder' => 'Email']) !!}
    @if($errors->has('email'))
        <p class="text-warning invalid-feedback"><strong>{{ $errors->first('email') }}</strong></p>
    @endif <br>
</div>
<div class="form-group">
    {!! Form::label('phone', 'Phone') !!} *</br>
    {{ Form::text('phone', '', ['class' => 'form-control','placeholder' => 'Phone']) }}
    @if($errors->has('phone'))
        <p class="text-warning invalid-feedback"><strong>{{ $errors->first('phone') }}</strong></p>
    @endif
</div>
<div class="form-group">
    {!! Form::label('subject', 'Subject') !!} *</br>
    {{ Form::text('subject', '', ['class' => 'form-control','placeholder' => 'Subject']) }}
    @if($errors->has('subject'))
        <p class="text-warning invalid-feedback"><strong>{{ $errors->first('subject') }}</strong></p>
    @endif
</div>
<div>
    {!! Form::label('content', 'Message') !!} *<br>
    {!! Form::textarea('content', '', ['class' => 'form-control','placeholder' => 'Message']) !!}
    @if($errors->has('content'))
        <p class="text-warning invalid-feedback"><strong>{{ $errors->first('content') }}</strong></p>
    @endif
</div> <br>
<div>
    {{ Form::submit('Send', ['class' => 'btn btn-primary']) }}
</div>
{!! Form::close() !!}

@endsection