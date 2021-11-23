
@extends('../layouts/plantilla_importaciones')
<!DOCTYPE HTML>

<html>

<head>
	<title>Login</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="/css/main.css" />
</head>

<body class="single is-preload">

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Header -->
		<header id="header">
			<a href="/">
				<img src="images/Captura.PNG" width="50px" height="50px">
			</a><a href="/">
				<h1> </h1>
			</a>
			<nav class="links">
				<ul>
					<li><a href="/Catalogo">Catalogo de Pizzas</a></li>
					<li><a href="/Promos">Promociones</a></li>
				</ul>
			</nav>
			<nav class="main">
				<ul>

					<li class="menu">
						<a class="fa-bars" href="#menu">Menu</a>
					</li>
				</ul>
			</nav>
		</header>

		<!-- Menu -->
		<section id="menu">

			<!-- Search -->
			<section>
				<form class="search" method="get" action="#">
					<input type="text" name="query" placeholder="Buscar" />
				</form>
			</section>

			<!-- Links -->
		 

			<!-- Actions -->
			<section>
				<ul class="actions stacked">
					<li><a href="/Login" class="button large fit">Iniciar Sesión</a></li>
				</ul>
			</section>

		</section>

		<!-- Main -->
		<div id="main">

			<!-- Post -->
			<article class="post">
				<header>
					<div class="title">
						<h2><a href="#">Formulario Login</a></h2>

					</div>
					<div class="meta">
						<time class="published" datetime="2015-11-01"></time>
						 
					</div>
				</header>
				<body>
                    @if ($errors->any())
                            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                                <strong>¡Revise los campos!</strong>
                                @foreach ($errors->all() as $error )
                                    <span class="badge badge-danger">{{ $error}}</span>
                                @endforeach
                                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif

                    {!! Form::open(array('route'=>'vistas.cliente.store', 'method'=>'POST')) !!}
                        
                    <label for="fname">Correo electronico:</label>
                        <input type="email" id="correo" name="correo" required><br>
                        <label for="name">Contraseña:</label>
                        <input type="password" id="password" name="password" required>
                        <br>
                        <div class="row">
                            <div class="col">

                                <button type="submit" class="btn btn-primary" >Iniciar sesión</button><br>
                            </div>
                            <div class="col">

                                <button type="submit" class="btn btn-info" >Registrarse</button><br><br>
                            </div>
                        </div>

                    {!! Form::close() !!}
				</body>

			</article>

		</div>

		<!-- Footer -->
			<section id="footer">
				<ul class="icons" ></ul>
					<a href="#" class="icon brands fa-twitter"><span class="label"></span>Twitter&nbsp;</span></a>
					<a href="#" class="icon brands fa-facebook-f"><span class="label"></span>Facebook&nbsp;</span></a>
					<a href="#" class="icon brands fa-instagram"><span class="label"></span>Instagram&nbsp;</span></a>
				<a href="#" class="icon solid fa-rss"><span class="label">RSS </span></a>
					<a href="#" class="icon solid fa-envelope"><span class="label"></span>Email</span></a>
				</ul>
				<p class="copyright">&copy; Derechos de copyright <a><br>La buena pizza.</a>&nbsp;
					<a href="/Terminos y Condiciones">Terminos y condiciones.</a></p>
			</section>

	</div>

	<!-- Scripts -->
	<script src="/js/jquery.min.js"></script>
	<script src="/js/browser.min.js"></script>
	<script src="/js/breakpoints.min.js"></script>
	<script src="/js/util.js"></script>
	<script src="/js/main.js"></script>

</body>

</html>
