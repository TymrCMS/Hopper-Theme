<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head> 
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name') }}</title>

	
	<!-- Scripts -->
	<script>
		window.Laravel = {!! json_encode([
		'csrfToken' => csrf_token(),
		]) !!};
	</script>
	
</head>
	
<body>
@yield('content')

You received a message from : {{ $name }}
<p>
Name: {{ $name }}
</p>
<p>
Email: {{ $email }}
</p>
<p>
Message: {{ $user_message }}

</body>