
@extends('../layouts/plantilla_importaciones')

<!DOCTYPE HTML>
<html>
<head>
	@section('titulo')
		Index
	@endsection

	@section('importar_css_arriba')

	@endsection

</head>



@section('cuerpo_seccion')

	<div id="wrapper">
		<!-- Header -->


		<!-- Main -->
		<div id="main">

			<!-- Post -->
			<article class="post">
				<header>
					<div class="title">
						<h2><a href="">Productos Tecnológicos</a></h2>
						<p> </p>
					</div>
					<div class="meta">
						<time class="published" style="font-size:1em">{{---$lista---}}
						</time>
					</div>
				</header>
                <div class="container" style="width: 400px;height: 400px;">
                    <a href="#" class="image featured"><img src="{{asset('images/products/ch1-9.png')}}" alt=""  /></a>

                </div>
				<footer>
					<ul class="actions">
						<li>
							{{-- {{link_to('CatalogoPizzas', $title = "Ver en Catalogo", $attributes = array("class"=>"button large"), $secure = null)}} --}}
						</li>
					</ul>
				</footer>
			</article>

			<!-- Post -->
			<article class="post">
				<header>
					<div class="title">
						<h2><a href="">Arma tu computadora de acuerdo a tus necesidades</a></h2>
						<p></p>
					</div>

				</header>
				<a href="#" class="image featured"><img src="{{asset('images/products/tarjeta_video.png')}}" alt="" /></a>
				<footer>
					<ul class="actions">
						{{-- <li>{{link_to('CatalogoPizzas', $title = "Ver en Catalogo", $attributes = array("class"=>"button large"), $secure = null)}}</li> --}}
					</ul>
				</footer>
			</article>
			<!-- Pagination -->

		</div>

		<!-- Sidebar -->
		<section id="sidebar">

			<!-- Intro -->
			<section id="intro">
				<a href="" class="logo"><img src="{{asset('images/Captura.png')}}" alt="" /></a>
				<header>
					<h2>Tecnologic.IMP</h2>
					<p>El lugar donde esta<br><a>"Tecnologic.IMP"</a></p>
				</header>
			</section>

			<!-- Mini Posts -->
			<section>
				<div class="mini-posts">

					<!-- Mini Post -->
					<article class="mini-post">
						<header>
							<h3><a href="/Pizza Famosa">Monitores</a></h3>

						</header>
						<a href="" class="image"><img src="{{asset('images/Captura.png')}}" alt="" /></a>
					</article>

					<!-- Mini Post -->
					<article class="mini-post">
						<header>
							<h3><a href="/Pizza Famosa">Procesadores</a></h3>

						</header>
						<a href="" class="image"><img src="{{asset('images/Captura.png')}}" alt="" /></a>
					</article>

					<!-- Mini Post -->
					<article class="mini-post">
						<header>
							<h3><a href="/Pizza Famosa">Teclados</a></h3>

						</header>
						<a href="" class="image"><img src="{{asset('images/Captura.png')}}" alt="" /></a>
					</article>

					<!-- Mini Post -->
					<article class="mini-post">
						<header>
							<h3><a href="/Pizza Famosa">Laptops</a></h3>

						</header>
						<a href="" class="image"><img src="{{asset('images/Captura.png')}}" alt="" /></a>
					</article>

				</div>
			</section>


			<!-- LISTA DE PROMOCIONES -->
			<section>
				<ul class="posts">
					<li>
						<article>
							<header>
								<h3><a href="/Pizza Famosa">Promo</a></h3>
								<time class="published" datetime="2015-10-20">October 20, 2015</time>
							</header>
							<a href="" class="image"><img src="{{asset('images/Captura.png')}}" alt="" /></a>
						</article>
					</li>

				</ul>
			</section>

			<!-- About -->
			<section class="blurb">
				<h2>Información</h2>
				<p>Somos una empresa que brinda productos de calidad</p>
			</section>
		</section>
@endsection


@section('zonaInferior')

@endsection


</html>
