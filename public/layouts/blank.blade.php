<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>{{ config('app.name', 'Laravel') }}</title>
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
		<link href="{{ asset('themes/hopper/css/AdminLTE-skin-blue-light.css') }}" rel="stylesheet">

		@yield('aftercss')

	</head>

	<body class="hold-transition skin-blue-light layout-boxed">
		
		<div class="wrapper">

		  <header class="main-header">
			<!-- Logo -->
			<a href="{{ url('/') }}" class="logo">
			  <!-- mini logo for sidebar mini 50x50 pixels -->
			  <span class="logo-mini"><b>T</b>b</span>
			  <!-- logo for regular state and mobile devices -->
			  <span class="logo-lg"><b>Tymr</b>BETA</span>
			</a>

			@component('components.topnav.blank')
			@endcomponent

		  </header>

		  <div class="content-wrapper" style="margin-left:0px">
			  <section class="content">

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
					<!-- /.box -->
				  	@yield('content')
			  </section>
		  </div>

          <footer class="main-footer" style="margin-left:0px">
            <div class="pull-right hidden-xs">
              Version <small>0.0.1</small>
              {!! SiteMap() !!}
            </div>
            <small>Copyright &copy; 2020 <a href="http://tymr.localhost">Tymr Corp</a>. All rights reserved.</small>
          </footer>


		</div>


		<!-- jQuery 2.2.3 -->
		<script src="{{ asset('themes/hopper/js/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>

		<!-- Bootstrap 3.3.6 -->
		<script src="{{ asset('themes/hopper/js/plugins/bootstrap/bootstrap.3.3.7.min.js') }}"></script>

		<!-- AdminLTE App -->
		<script src="{{ asset('themes/hopper/js/app.js') }}"></script>

		<!-- Connect the FrontEnd with the Server -->
		<script src="{{ asset('themes/hopper/js/connecter.js') }}"></script>

		@yield('afterjs')

	</body>
</html>
