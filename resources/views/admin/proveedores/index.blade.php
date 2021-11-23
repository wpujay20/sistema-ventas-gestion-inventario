@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Proveedores</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <a class="btn btn-warning" href="{{ route('admin.proveedores.create')}}"> Nuevo </a>

                            <table class="table table-striped mt-2">
                                <thead style="background-color: #6777ef;">
                                    <th style="display: none;">ID</th>
                                    <th style="color:#fff">Nombre</th>
                                    <th style="color:#fff">Ruc</th>
                                    <th style="color:#fff">direccion</th>
                                    <th style="color:#fff">estado</th>
                                    <th style="color:#fff">Acciones</th>
                                </thead>
                                <tbody>
                                    @foreach ($proveedores as $proveedor)
                                    <tr>
                                        <td style="display: none">{{ $proveedor->id }}</td>
                                        <td>{{ $proveedor->nombre }}</td>
                                        <td>{{ $proveedor->ruc }}</td>
                                        <td>{{ $proveedor->direccion }}</td>
                                        <td>{{ $proveedor->estado }}</td>
                                        <td>
                                            <a class="btn btn-info" href="{{route('admin.proveedores.edit', $proveedor)}}">Editar - {{$proveedor->id}}</a>

                                            {!! Form::open(['method'=>'DELETE','route'=>['admin.proveedores.destroy',$proveedor->id],'style'=>'display:inline']) !!}
                                                {!! Form::submit('Borrar',['class'=>'btn btn-danger']) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{-- <div class="paginator justify-content-end ">
                                {!! $proveedores->links !!}

                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

