
@extends('../layouts/plantilla_importaciones')

<!DOCTYPE HTML>

		@section('titulo')
		Carrito
		@endsection

        @section('cuerpo_seccion')

<body class="single is-preload">
	<!-- Wrapper -->
	<div id="wrapper">
		<!-- Main -->
		<div id="main">
			<!-- Post -->
			<article class="post">
                <header>
					<div class="title">
						<h2>CARRITO DE COMPRAS</h2>
					</div>
				</header>
				<div class="container" >
                    <div class="row "  >
                        <div  class="col" style="display:inline;margin:5px;"  >
						<div class="card" style="width: 100%; float: middle" style="text-align: center; margin:2px auto">
							<div class="card-body">
							@if(Auth::check())
                                        @if(count(Cart::session(Auth::user()->id)->getContent())>0)

                            <h3>Carrito de Compras</h3>
							<table>
								<thead>
									<th></th>
									<th>Pizza</th>
									<th>Cantidad</th>
									<th>Precio</th>
                                    <th>Precio Total</th>
                                    <th></th>
								</thead>
								<tbody>
									@foreach (Cart::session(Auth::user()->id)->getContent() as $item)
									<tr>
										<td><img width="100px" style="align" src="{{asset('images/productos/' . $item->attributes['image'] .'')}}"></td>
										<td>{{$item->name}}</td>
										<td>{{$item->quantity}}</td>
                                        <td>{{$item->price}}</td>
                                        <td>{{$item->price*$item->quantity}}</td>
										<td>
											<form action="{{route('cart.removeitem')}}" method="POST">
												@csrf
											<input type="hidden" name="producto_id" value="{{$item->id}}">
											<button type="submit" style="" class="btn button">Quitar</button>
											</form>
										</td>
									</tr>
                                    @endforeach
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th style="font-size: 20px" class="card-body align-right">Total a Pagar:</th>
                                        <th style="font-size: 20px">S/. {{Cart::getTotal()}}</th>
                                        <th></th>
                                    </tr>
								<tbody>
                            </table>
                              {!! Form::open(['url' => 'pagar','method' => 'post']) !!}
                                {{ csrf_field()}}


                                    <H5>¡Por favor Ingrese los datos que se requiere para que su pedido llegue vía Delivery!</H5>
                                <table>
                                    <thead>
										<td>Direccion:</td>
										<td><input type="text" placeholder="Ingrese su Dirección" id="direc"name="direc"   required></td>
									</thead>
                                    <thead>
										<td>Referencia:</td>
										<td><input type="text" placeholder="Ingrese una Rederencia"  id="refe"name="refe"  required></td>
									</thead>
									<thead>
										<td>Distrito:</td>
										<td>
											<select name="distrito" id="distrito" >
												<option value="">--Distritos Disponibles--</option>
												<option value="Villa el Salvado">Villa el Salvador</option>
												<option value="Villa Maria del Triunfo">Villa Maria del Triunfo</option>
												<option value="Pachacamac">Pachacamac</option>
												<option value="Lurín">Lurín</option>
											</select>
										</td>
									</thead>
                                </table>
                                <script src="{{asset('js/carrito.js')}}"></script>
                                <button id="btn" disabled type="submit">PROCEDER A PAGAR</button>

                                {!! form::close()   !!}
                                 
                                <form action="{{route('cart.clear')}}" method="GET">
                                    @csrf
                                <button type="submit" style="" class="btn button">Cancelar Pago</button>
                                </form>

                                        @else
                                        <span><p>Aun no tienes pizzas en tu carrito :c</p></span>
                                        @endif
                                @else

                                    @if(count(Cart::getContent())>0)
                                    <table>
                                        <thead>
                                            <th></th>
                                            <th>Pizza</th>
                                            <th>Cantidad</th>
                                            <th>Precio</th>
                                            <th>Precio Total</th>
                                            <th></th>
                                        </thead>
                                        <tbody>
                                    @foreach (Cart::getContent() as $item)
                                        <tr>
                                            <td><img width="100px" src="{{asset('images/productos/' . $item->attributes['image'] .'')}}"></td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->quantity}}</td>
                                            <td>{{$item->price}}</td>
                                            <td>{{$item->price*$item->quantity}}</td>
                                            <td>
                                                <form action="{{route('cart.removeitem')}}" method="POST">
                                                    @csrf
                                                <input type="hidden" name="producto_id" value="{{$item->id}}">
                                                <button type="submit" class="btn button">Quitar</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th style="font-size: 20px">Total a Pagar:</th>
                                            <th style="font-size: 20px">S/. {{Cart::getTotal()}}</th>
                                            <th></th>
                                        </tr>
                                        <tbody>
                                        </table>
                                        <p>Para Proceder a Pagar debe de Iniciar Sesión</p>

                                        <a href=" {{route('vistas.cliente.index')}}" class="btn btn-success">Proceder a Pagar</a>




                                    @else
                                    <span><p>Aun no tienes pizzas en tu carrito :c</p></span>
                                @endif




                            @endif

							</div>
						</div>
					</div>
				</div>
				</div>



			</article>

		</div>

	</div>

	@endsection
