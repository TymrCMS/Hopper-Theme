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
			@component('modules.Users.components.profile.edit-form-widget',['person'=>$person])
			@endcomponent
		</div>		
	</div>
@endsection