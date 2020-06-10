<!DOCTYPE html>
<html lang="fr">
<head>
	<title>@yield('titre')</title>
	<meta name="Description" content="Author: Sadek,
    Ecole: HOC, Category: Formation, Domaine: Développement d'applications, Niveau: Bac+2">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header>
		<img src="/img/logo.png" alt="Site HOC" async>
		<p>
			Menu: <a href="/">Accueil</a> - 
			<a href="/page1">Page1</a> - 
			<a href="/page2">Page2</a> - 
			<a href="/page3">Page3</a>
		</p>
	</header>

	@yield('contenu')

	<footer>
	<p>
	  <em>&copy;House Of Code 2020</em>
	</p>
	</footer>
	
	<script src="{{ URL::asset('js/app.js') }}" type="text/javascript" async></script>
	
</body>
</html>