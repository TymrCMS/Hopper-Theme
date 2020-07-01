<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>{{ config('app.name', 'Laravel') }}</title>
		@yield('aftercss')
	</head>
	<body>
		
		@yield('content')


		@yield('afterjs')

	</body>
</html>
