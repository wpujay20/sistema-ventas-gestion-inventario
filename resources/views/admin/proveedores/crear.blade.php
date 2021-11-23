@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Alta de Proveedores</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
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

                            {!! Form::open(array('route'=>'admin.proveedores.store', 'method'=>'POST')) !!}
                            <div class="row">
                                <div class="col-xd-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="">Nombre</label>
                                        {!! Form::text('nombre',null, array('class'=>'form-control')) !!}
                                    </div>
                                </div>
                                <div class="col-xd-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="">Ruc</label>
                                        {!! Form::text('ruc',null, array('class'=>'form-control')) !!}
                                    </div>
                                </div>
                                <div class="col-xd-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="">Dirección</label>
                                        {!! Form::text('direccion',null, array('class'=>'form-control')) !!}
                                    </div>
                                </div>
                                {{-- <div class="col-xd-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="">Estado</label>
                                        {!! Form::text('estado',null, array('class'=>'form-control')) !!}
                                    </div>
                                </div> --}}


                                <div class="col-xd-12 col-sm-12 col-md-12">
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>

                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



