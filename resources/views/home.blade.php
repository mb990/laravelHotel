@extends('layout.app')
<?php $title = 'Dashboard' ?>
@include ('includes.pageheading')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card"  style="margin-top: 20px;">
                <div class="card-header text-center"><span>Dashboard</span>

                </div>

                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <p class="lead">Your rooms:

                    You currently dont have a room. Why dont you <a href="/rooms">choose</a> one? <p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
