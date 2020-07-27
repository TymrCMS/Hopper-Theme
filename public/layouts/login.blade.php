<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>{{ config('app.name', 'TymrCMS') }} | Login</title>
		<!-- Tell the browser to be responsive to screen width -->
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<!-- Bootstrap 3.3.6 -->
		<link href="{{ asset('themes/hopper/css/AdminLTE-Bootstrap.css') }}" rel="stylesheet">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
		<!-- Ionicons -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
		<!-- Theme style -->
		<link href="{{ asset('themes/hopper/css/AdminLTE.min.css') }}" rel="stylesheet">
		<!-- AdminLTE Skins. Choose a skin from the css/skins
		   folder instead of downloading all of them to reduce the load. -->
		<link href="{{ asset('themes/hopper/css/AdminLTE-skin-black-light.css') }}" rel="stylesheet">

		<link href="{{ asset('themes/hopper/js/plugins/iCheck/square/blue.css') }}" rel="stylesheet">

</head>
<body class="hold-transition login-page">

	<div class="login-box">
	  <div class="login-logo">
		<a href="/"><b>Tymr</b>BETA</a>
	  </div>

                    @if (session('info'))
                        <div class="alert alert-info">
                            {{ session('message') }}
                        </div>
                    @endif               			  
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif 
                    @if (session('error'))
                        <div class="alert alert-error">
                            {{ session('error') }}
                        </div>
                    @endif              


					@if ($errors->any())
					    <div class="alert alert-error">
					        <ul>
					            @foreach ($errors->all() as $error)
					                <li>{{ $error }}</li>
					            @endforeach
					        </ul>
					    </div>
					@endif
					
	  @yield('content')

	</div>


		<!-- jQuery 2.2.3 -->
		<script src="{{ asset('themes/hopper/js/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>

		<!-- Bootstrap 3.3.6 -->
		<script src="{{ asset('themes/hopper/js/plugins/bootstrap/bootstrap.3.3.7.min.js') }}"></script>


		<script src="{{ asset('themes/hopper/js/plugins/iCheck/icheck.min.js') }}"></script>

		<!-- AdminLTE App -->
		<script src="{{ asset('themes/hopper/js/app.js') }}"></script>

		<!-- Connect the FrontEnd with the Server -->
		<script src="{{ asset('themes/hopper/js/connecter.js') }}"></script>

		<script>
		  $(function () {
			$('input').iCheck({
			  checkboxClass: 'icheckbox_square-blue',
			  radioClass: 'iradio_square-blue',
			  increaseArea: '20%' // optional
			});
		  });
		</script>
	</body>
</html>