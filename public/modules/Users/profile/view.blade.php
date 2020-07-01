@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-12">
			@component('modules.Users.components.profile.header-widget')
			@endcomponent
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			@component('modules.Users.components.profile.info-widget',['person'=>$person])
			@endcomponent
			@component('modules.Users.components.profile.aboutme-widget',['person'=>$person])
			@endcomponent
		</div>
		<div class="col-md-8">
			@if( IsFriendOrMyself($person->id))		
				@component('modules.Users.components.profile.stream-widget',['person'=>$person])
				@endcomponent
			@else
				@permission('admin-users|manage-users')
					@component('modules.Users.components.profile.view-stream-widget',['person'=>$person])
					@endcomponent
				@endpermission
				@component('modules.Users.components.profile.non-stream-widget',['person'=>$person])
				@endcomponent
			@endif
		</div>
	</div>
@endsection