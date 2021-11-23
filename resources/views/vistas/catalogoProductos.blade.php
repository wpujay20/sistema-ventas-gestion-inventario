@extends('../layouts/plantilla_importaciones')

<!DOCTYPE HTML>
<html>

	<head>
		@section('titulo')
		Catalogo de Productos
		@endsection
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/css/main.css" />
	@section('importar_css_arriba')
	@endsection
	</head>
<body class="single is-preload">
@section('cuerpo_seccion')

	<!-- Wrapper -->
	<div id="wrapper">
		<!-- Main -->
		<div id="main">
			<!-- Post -->
			<article class="post">
				<header>
					<div class="title">
						<h2><a href="#">CATÁLOGO DE PRODUCTOS TECNOLÓGICOS</a></h2>
						<h3>Encuentre lo que necesite</h3>
                        <br>
					</div>
				</header>

                
                <div class="container" >
                    <div class="row "  >
                        @foreach ($productos as $producto)
                        <div  class="col-md-3" style="display:inline;margin:5px;"  >
                       <div class="card" style="width: 15rem;" style="text-align: center; margin:2px auto">
                        <div class="card" style="width: 200px;heght:200px; margin-top:25px;margin-left:15px">

                            <img   src="{{asset('/images/productos/'.$producto->image.'')}}"  class="rounded img-fluid img-size-32  " ></td>
                        </div>
                            <div class="card-body">
                                
                                <h5 class="card-title"><strong> {{$producto->nombre}} </strong></h5>
								<p class="card-text" style="text-decoration-style: solid">Descripción: {{$producto->descripcion}}</p>
								<p class="card-text" style="text-decoration-style: solid">Precio: $ {{$producto->precio}}</p>
								<p class="card-text" style="text-decoration-style: solid">Stock: {{$producto->stock}}.</p> 
							<a href="{{ route('vistas.productos.show', $producto) }}" class="btn btn-warning">Visualizar</a>
						</div>
                        </div>
                    </div>
                    @endforeach
                </div>
              
			</article>
		</div>
	</div>

@endsection

    
</body>
</html>
