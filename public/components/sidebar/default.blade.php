
		  <aside class="main-sidebar">


				<section class="sidebar">
					<form action="#" method="get" class="sidebar-form">
						<div class="input-group">
							<input type="text" name="q" class="form-control" placeholder="Search...">
							<span class="input-group-btn">
								<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
								</button>
							</span>
						</div>
					</form>

					<ul class="sidebar-menu">


						@if (isset($navs))

							@if ($user != null)
								@foreach ($navs as $nav)
									<li class="header">{!!$nav->title!!}</li>
									@foreach ($nav->links as $link)
										
											@if ( ($link->permission == '') || $user->hasPermission($link->permission) )
												@switch ( $link->type) 
													@case('route')
														<li><a href="{{ route($link->url) }}"><i class="{!!$link->icon!!}"></i> {!! $link->title !!}</a></li>
														@break
													@case('uri')
													<li><a href="{!! URL::to('/') !!}/{{ $link->url }}"><i class="{!!$link->icon!!}"></i> {!! $link->title !!}</a></li>
														@break											
													@case('url')
														<li><a href="{{ $link->url }}"><i class="{!!$link->icon!!}"></i> {!! $link->title !!}</a></li>
														@break
												@endswitch
											@endif
									
									@endforeach
								@endforeach
							@else 
								@foreach ($navs as $nav)
									<li class="header">{!!$nav->title!!}</li>
									@foreach ($nav->links as $link)
									
											@if ($link->permission == '')
												@switch ( $link->type) 
													@case('route')
														<li><a href="{{ route($link->url) }}"><i class="{!!$link->icon!!}"></i> {!! $link->title !!}</a></li>
														@break
													@case('uri')
													<li><a href="{!! URL::to('/') !!}/{{ $link->url }}"><i class="{!!$link->icon!!}"></i> {!! $link->title !!}</a></li>
														@break											
													@case('url')
														<li><a href="{{ $link->url }}"><i class="{!!$link->icon!!}"></i> {!! $link->title !!}</a></li>
														@break
												@endswitch
											@endif
										
									@endforeach
								@endforeach
							@endif

						@endif
						
					</ul>
				</section>

		</aside>