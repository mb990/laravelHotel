<div class="container-fluid">
	<div class="row">
		<div class="col-lg-10 col-md-9 col-sm- col-xs-6">
				<h1 class="text-center" style="background-color: #FFE8D4"><?php echo $title ?></h1>
		</div>
		<div class="col-lg-2 col-sm-6 col-md-3 col-xs-6">
			<nav class="navbar navbar-expand-lg navbar-light bg-light float-right ">
				<ul class="navbar-nav ml-auto" style="height:33px; ">
					@auth('admin')
					{{-- @auth('user') --}}
					  	<li class="nav-item {{ Request::is('admin.admin') ? 'active' : '' }}">
					    	<a class="nav-link" href="/admin">Admin Panel</a>
						</li>
					{{-- @endauth --}}
					
					@else
					@auth(!'user')
					  	<li class="nav-item">
					        <a class="nav-link" href="{{ route('admin.login') }}">{{ __('Admin Login') }}</a>
					   	</li>
					@endauth
					@endauth
					
				</ul>
			</nav>
			
		</div>	
	</div>	
</div>