@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Ventas</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <a class="btn btn-warning" href="{{ route('admin.ventas.create')}}"> Nuevo </a>

                            <table class="table table-striped mt-2">
                                <thead style="background-color: #6777ef;">
                                    <th style="display: none;">ID</th>
                                    <th style="color:#fff">Cliente</th>
                                    <th style="color:#fff">Fecha Venta</th>
                                    <th style="color:#fff">Total</th>
                                    <th style="color:#fff">estado</th>
                                    <th style="color:#fff">Acciones</th>
                                </thead>
                                <tbody>
                                    @foreach ($ventas as $venta)
                                    <tr>
                                        <td style="display: none">{{ $venta->id }}</td>
                                        <td>{{ $venta->cliente_id->nombre }}</td>
                                        <td>{{ $venta->fecha_venta }}</td>
                                        <td>{{ $venta->direccion }}</td>
                                        <td>{{ $venta->estado }}</td>
                                        <td>
                                            <a class="btn btn-info" href="{{route('admin.ventas.show', $venta)}}">Visualizar</a>

                                            {{-- {!! Form::open(['method'=>'DELETE','route'=>['admin.ventas.destroy',$venta->id],'style'=>'display:inline']) !!}
                                                {!! Form::submit('Borrar',['class'=>'btn btn-danger']) !!}
                                            {!! Form::close() !!} --}}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{-- <div class="paginator justify-content-end ">


                            </div> --}}                                {!! $ventas->links !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

