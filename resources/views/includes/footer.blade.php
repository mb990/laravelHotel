<?php

$phone = 123456789;
$address = 'Bulevar Oslobodjenja bb, Novi Sad';
$email = 'laravel@hotel.com';

?>
<footer class="footer_main">
     <div class="container">
      	<div class="row">
      		<div class="col-lg-12 col-md-12 col-sm-2">
	      		<ul class="list-inline">
	      		    <li class="blockquote list-inline-item"><span class="text-muted"><strong>Our Address:</strong> {{$address}} </span></li>
	      		    <li class="blockquote list-inline-item"><span class="text-muted"><strong>Phone:</strong>{{$phone}} </span></li>
	      		    <li class="blockquote list-inline-item"><span class="text-muted"><strong>Email:</strong>{{$email}} </span></li>
	      		    <li></li>
	      		</ul>
      		{{-- <div class="col-lg-4 col-md-4 col-sm-4 footer_content">
	        	<span class="text-muted">Our Address: {{$address}} </span>
	    	</div>
	      	<div class="col-lg-4 col-md-4 col-sm-4 footer_content">
	        	<span class="text-muted">Phone: {{$phone}} </span>
	    	</div>	    	
	    	<div class="col-lg-4 col-md-4 col-sm-4 footer_content">
	        	<span class="text-muted">Email: {{$email}} </span>
	    	</div> --}}
	    	</div>
    	</div>
     </div>
    </footer>