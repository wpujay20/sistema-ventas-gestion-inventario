@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Clientes</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <a class="btn btn-warning" href="{{ route('admin.clientes.create')}}"> Nuevo </a>

                            <table class="table table-striped mt-2">
                                <thead style="background-color: #6777ef;">
                                    <th style="display: none;">ID</th>
                                    <th style="display: none;">useID</th>

                                    <th style="color:#fff">Nombre</th>
                                    <th style="color:#fff">CC</th>
                                    <th style="display: none;">Ruc</th>
                                    <th style="color:#fff">Dirección</th>
                                    <th style="color:#fff">Telefono</th>
                                    <th style="color:#fff">Email</th>
                                    <th style="color:#fff">Acciones</th>

                                </thead>
                                <tbody>
                                    @foreach ($clientes as $cliente)
                                    <tr>
                                        <td style="display: none">{{ $cliente->id }}</td>
                                        <td style="display: none">{{ $cliente->use_id }}</td>

                                        <td>{{ $cliente->nombre }}</td>
                                        <td>{{ $cliente->dni }}</td>
                                         <td style="display: none">{{ $cliente->ruc }}</td>
                                        <td>{{ $cliente->direccion }}</td>
                                        <td>{{ $cliente->telefono }}</td>
                                        <td>{{ $cliente->email }}</td>
                                         
                                        <td>
                                            <a class="btn btn-info" href="{{route('admin.clientes.edit', $cliente->id)}}">Editar</a>

                                            {!! Form::open(['method'=>'DELETE','route'=>['admin.clientes.destroy',$cliente->id],'style'=>'display:inline']) !!}
                                                {!! Form::submit('Borrar',['class'=>'btn btn-danger']) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{-- <div class="paginator justify-content-end ">
                                {!! $clientes->links !!}

                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

