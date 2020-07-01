
<nav class="navbar navbar-static-top">

	<a href="#" class="sidebar-toggle hidden-md hidden-lg hidden-xl" data-toggle="offcanvas" role="button">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
	</a>
	<div class="navbar-custom-menu">
		<ul class="nav navbar-nav">
			@if(Auth::guard('web')->check())


				<li class="dropdown messages-menu">
					<a class="dropdown-toggle" href="#" data-toggle="dropdown">
						<i class="fa fa-user-plus"></i>
						<span class="label label-success">{}</span>
					</a>
					<ul class="dropdown-menu">
						<li>
							<ul class="menu">
								<li>
									<a href="{{route('users.profile','admin')}}">
										<div class="pull-left">
											{!! Gravatar('s.mcdonald@outlook.com.au',['size'=>'25','class'=>'img-circle']) !!}
										</div>
										<h4>
											Admin Master
											<small><i class="fa fa-clock-o"></i> 2 hours</small>
										</h4>
										<p>View Profile</p>
									</a>
								</li>
							</ul>
						</li>
						<li class="footer"><a href="#">See All Requests</a></li>
					</ul>
				</li>


				<li class="dropdown user user-menu">			  	
					<a href="#" class="dropdown-toggle" data-toggle="control-sidebar">
						{!! Gravatar($user->email,['size'=>25,'class'=>"user-image", 'alt'=>'User Image']) !!}
						<span class="hidden-xs">{!! $user->username !!}</span>
					</a>
				</li>
			@else
				<li>
					<a href="#" ><i class="fa fa-user"></i></a>
				</li>
			@endif
		</ul>
	</div>
</nav>