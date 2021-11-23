@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Productos</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <a class="btn btn-warning" href="{{ route('admin.productos.create')}}"> Nuevo </a>

                            <table class="table table-striped mt-2">
                                <thead style="background-color: #6777ef;">
                                    <th style="display: none;">ID</th>
                                    <th style="color:#fff">Nombre</th>
                                    <th style="color:#fff">Descripción</th>
                                    <th style="color:#fff">Precio</th>
                                    <th style="color:#fff">Imagen</th>
                                    <th style="color:#fff">Estado</th>

                                    <th style="color:#fff">Acciones</th>

                                </thead>
                                <tbody>
                                    @foreach ($productos as $producto)
                                    <tr>
                                        <td style="display: none">{{ $producto->id }}</td>
                                        <td>{{ $producto->nombre }}</td>
                                        <td>{{ $producto->descripcion }}</td>
                                        <td>{{ $producto->stock }}</td>
                                        <td >
                                            <div class="card" style="width: 120px;heght:120px; margin-top:10px;">
                                                <img   src="{{asset('/images/productos/'.$producto->image.'')}}"  class="rounded img-fluid img-size-32  " ></td>
                                            </div>
                                        <td>
                                        <h5><span class="badge badge-dark">{{$producto->estado}}</span></h5>
                                        </td>
                                        <td>
                                            <a class="btn btn-info" href="{{route('admin.productos.edit', $producto->id)}}">Editar</a>

                                            {!! Form::open(['method'=>'DELETE','route'=>['admin.productos.destroy',$producto->id],'style'=>'display:inline']) !!}
                                                {!! Form::submit('Borrar',['class'=>'btn btn-danger']) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{-- <div class="paginator justify-content-end ">
                                {!! $productos->links !!}

                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

