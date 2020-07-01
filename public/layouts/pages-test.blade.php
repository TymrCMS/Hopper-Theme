<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>{{ config('app.name', 'Laravel') }}</title>
		<!-- Tell the browser to be responsive to screen width -->
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<!-- Bootstrap 3.3.6 -->
		<link href="{{ asset('css/AdminLTE-Bootstrap.css') }}" rel="stylesheet">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
		<!-- Ionicons -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
		<!-- Theme style -->
		<link href="{{ asset('css/AdminLTE.min.css') }}" rel="stylesheet">
		<!-- AdminLTE Skins. Choose a skin from the css/skins
		   folder instead of downloading all of them to reduce the load. -->
		<link href="{{ asset('css/AdminLTE-skin-blue-light.css') }}" rel="stylesheet">


		@yield('aftercss')

	</head>

	<body class="hold-transition skin-blue-light layout-boxed sidebar-mini">
		
		<!-- Site wrapper -->
		<div class="wrapper">

		  <header class="main-header">
			<!-- Logo -->
			<a href="{{ url('/') }}" class="logo">
			  <!-- mini logo for sidebar mini 50x50 pixels -->
			  <span class="logo-mini"><b>T</b>b</span>
			  <!-- logo for regular state and mobile devices -->
			  <span class="logo-lg"><b>Tymr</b>BETA</span>
			</a>
			<!-- Header Navbar: style can be found in header.less -->

		  <!-- =============================================== -->
		  <!-- for public app, rmove the topbar!!! -->

					@component('components.topnav.default')
					@endcomponent

		  <!-- =============================================== -->
		  </header>

		  <!-- =============================================== -->

					@component('components.sidebar.default')
					@endcomponent

		  <!-- =============================================== -->

		  <!-- Content Wrapper. Contains page content -->
		  <div class="content-wrapper">
 



		  <!-- =============================================== -->

					{{-- @component('components.common.breadcrumbs')
					@endcomponent --}}

		  <!-- =============================================== -->

			  <!-- Main content -->
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


				  	@yield('content2')

				  	
				  	@yield('content3')

			  </section>
			  <!-- /.content -->

		  </div>
		  <!-- /.content-wrapper -->

		  <!-- =============================================== -->

					@component('components.footer.default')
					@endcomponent

		  <!-- =============================================== -->



		  <!-- =============================================== -->

					@component('components.settingsbar.default')
					@endcomponent

		  <!-- =============================================== -->
		  <!-- /.control-sidebar -->
		  <!-- Add the sidebar's background. This div must be placed
			   immediately after the control sidebar -->
		  <div class="control-sidebar-bg"></div>
		</div>
		<!-- ./wrapper -->


		<!-- jQuery 2.2.3 -->
		<script src="{{ asset('js/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>

		<!-- Bootstrap 3.3.6 -->
		<script src="{{ asset('js/AdminLTE/plugins/bootstrap/bootstrap.3.3.7.min.js') }}"></script>

		<!-- SlimScroll -->
		<script src="{{ asset('js/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>

		<!-- FastClick -->
		<script src="{{ asset('js/AdminLTE/plugins/fastclick/fastclick.js') }}"></script>

		<!-- AdminLTE App -->
		<script src="{{ asset('js/AdminLTE/app.js') }}"></script>

		<!-- Connect the FrontEnd with the Server -->
		<script src="{{ asset('js/AdminLTE/connecter.js') }}"></script>

		@yield('afterjs')


	</body>
</html>
