<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{'csrf_token'}}">
        {{-- <title>{{config('app.name') . " - " . $pageTitle }}</title>   NA OVAJ NACIN ISTO MOZE DA SE NAPRAVI PAGE TITLE --}} 
        <title>{{config('app.name', 'Laravel Hotel') }}</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="{{ asset('css/style.css') }}" media="all" rel="stylesheet" type="text/css" />


        @if (Request::is('/'))
        <link rel="stylesheet" href="{{ asset ('css/js-image-slider') }}" media="all" type="text/css" />
        <link rel="stylesheet" href="{{ asset ('css/generic') }}" media="all" type="text/css"/>
        @endif
    </head>
    <body>
        @include('includes.navbar')
{{--         @include ('includes.pageheading')
 --}}
        <div class="container-fluid">
            <div id="main-content" class="row">
                <div class="col-lg-8 col-md-8 col-sm-8">
                    @yield('content')
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                     @include('includes.sidebar')
                </div> 
            </div>

        </div>
        @include('includes.footer')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>