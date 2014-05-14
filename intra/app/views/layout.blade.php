<!DOCTYPE html>
<html>

	<head>

		<meta http-equiv="Content-Type" content="text/html;charset=utf-8">

		{{ HTML::style('css/style.css'); }}

		<style type="text/css">
			@font-face {
				font-family: "batch";
				src: url({{ asset('font/batch.ttf') }}) format("truetype");
			}
		</style>

		<title>{{ $title }}</title>

	</head>

	<body>

		<div class="center">

			<div class="leftMenu">

				<ul>

					<li><span class="icon link"></span></li>

					<li><a href="#"><span class="icon me"></span></a></li>

					<li><a href="#"><span class="icon forum"></span></a></li>

					<li><a href="#"><span class="icon search"></span></a></li>

					<li><a href="#"><span class="icon module"></span></a></li>

					<li><a href="#"><span class="icon calendar"></span></a></li>

				</ul>

			</div>

			@yield('content') <!-- Permet d'ajouter du contenu -->

		</div>

	</body>

	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

	{{ HTML::script('js/script.js'); }}

	@yield('script') <!-- Permet d'ajouter des scripts pour chacune des pages -->

</html>
