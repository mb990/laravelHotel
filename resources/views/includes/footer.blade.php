<?php

$phone = 123456789;
$address = 'Bulevar Oslobodjenja bb, Novi Sad';
$email = 'laravel@hotel.com';

?>
<footer class="footer_main">
      <div class="container">
      	<div class="row">
      		<div class="col-lg-4 col-md-4 col-sm-4 footer_content">
	        	<span class="text-muted">Our Address: {{$address}} </span>
	    	</div>
	      	<div class="col-lg-4 col-md-4 col-sm-4 footer_content">
	        	<span class="text-muted">Phone: {{$phone}} </span>
	    	</div>	    	
	    	<div class="col-lg-4 col-md-4 col-sm-4 footer_content">
	        	<span class="text-muted">Email: {{$email}} </span>
	    	</div>
    	</div>
      </div>
    </footer>