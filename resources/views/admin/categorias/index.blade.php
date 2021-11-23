@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Categorias</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <a class="btn btn-warning" href="{{ route('admin.categorias.create')}}"> Nuevo </a>

                            <table class="table table-striped mt-2">
                                <thead style="background-color: #6777ef;">
                                    <th style="display: none;">ID</th>
                                    <th style="color:#fff">Nombre</th>
                                    <th style="color:#fff">Descripción</th>
                                    <th style="color:#fff">Acciones</th>


                                </thead>
                                <tbody>
                                    @foreach ($categorias as $categoria)
                                    <tr>
                                        <td style="display: none">{{ $categoria->id }}</td>
                                        <td>{{ $categoria->nombre }}</td>
                                        <td>{{ $categoria->descripcion }}</td>
                                        <td>
                                            <a class="btn btn-info" href="{{route('admin.categorias.edit', $categoria->id)}}">Editar</a>

                                            {!! Form::open(['method'=>'DELETE','route'=>['admin.categorias.destroy',$categoria->id],'style'=>'display:inline']) !!}
                                                {!! Form::submit('Borrar',['class'=>'btn btn-danger']) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{-- <div class="paginator justify-content-end ">
                                {!! $categorias->links !!}

                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

