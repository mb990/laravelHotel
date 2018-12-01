<div class="container-fluid">
	<div class="row">
		<div id = "pageheading" class="offset-2 col-lg-8 col-md-9 col-sm- col-xs-6">
				<h1 class="text-center" style="background-color: #E5E4E2"><?php echo $title ?></h1>
		</div>
			@auth('admin')
				<div class="col-lg-2 col-sm-6 col-md-3 col-xs-6">
					<nav class="navbar navbar-expand-lg navbar-light bg-light float-right ">
						<ul class="navbar-nav ml-auto" style="height:33px; ">
						  	<li class="nav-item {{ Request::is('admin.admin') ? 'active' : '' }}">
						    	<a class="nav-link" href="/admin">Admin Panel</a>
							</li>
						</ul>
					</nav>
			@endauth	
		</div>	
	</div>	
</div>