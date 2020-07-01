	<div class="box box-solid">
		<div class="box-header with-border">
			<h3 class="box-title">Profile</h3>
		</div>
		<div class="box-body box-profile">

			{!! Gravatar($person->email,['size'=>25,'class'=>"profile-user-img img-responsive img-circle", 'alt'=>'User profile picture']) !!}

			<h3 class="profile-username text-center">{!! $person->profile->display_name !!}</h3>

			<p class="text-muted text-center">{!! $person->profile->first_name !!}</p>

			<ul class="list-group list-group-unbordered">
				@if ( $person->profile->count_followers !== 0)
					<li class="list-group-item">
						<b>Followers</b> <a class="pull-right">{{ $person->profile->count_followers }}</a>
					</li>
				@endif
				@if ( $person->profile->count_following !== 0)
					<li class="list-group-item">
						<b>Following</b> <a class="pull-right">{{ $person->profile->count_following }}</a>
					</li>
				@endif
				@if ( $person->profile->count_likes !== 0)
					<li class="list-group-item">
						<b>Likes</b> <a class="pull-right">{{ $person->profile->count_likes }}</a>
					</li>
				@endif
				@if ( CountFriendships($person->id) !== 0)
					<li class="list-group-item">
						<b>Friends</b> <a class="pull-right">{{ CountFriendships($person->id) }}</a>
					</li>
				@endif
			</ul>

				@switch( FriendStatus($person->id) )

					@case(0)
						<a class="btn btn-primary btn-flat btn-block" href="{{ route( 'friends.add' ,$person->username ) }}"><b>Add as Friend</b></a>
						@break

					@case(10)
						<a class="btn btn-primary btn-flat btn-block" href="{{ route( 'friends.remove' , $person->username ) }}"><b>Cancel My Request</b></a>
						@break

					@case(20)
						<a class="btn btn-danger btn-flat btn-block" href="{{ route( 'friends.remove' , $person->username ) }}"><b>Deny Request</b></a>
						<a class="btn btn-primary btn-flat btn-block" href="{{ route( 'friends.confirm' ,$person->username ) }}"><b>Confirm Friend</b></a>
						@break

					@case(50)
						<a class="btn btn-primary btn-flat btn-block" href="{{ route( 'friends.remove' ,$person->username ) }}"><b>Remove Friend</b></a>
						@break		

					@case(90)
															
						@default
						
				@endswitch
		</div>
	</div>