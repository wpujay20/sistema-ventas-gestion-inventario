@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Crear Rol</h3>
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

                            {!! Form::open(array('route'=>'roles.store', 'method'=>'POST')) !!}
                            <div class="row">
                                <div class="col-xd-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="">Nombre del Rol</label>
                                        {!! Form::text('name',null, array('class'=>'form-control')) !!}
                                    </div>
                                </div>

                                <hr>
                                <div class="col-xd-12 col-sm-12 col-md-12">
                                    <div class="form-group checkbox">
                                        <label for="">Seleccionar todo</label>
                                        <input type="checkbox" id="checkall">

                                    </div>
                                </div>

                                <div class="col-xd-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="email">Permisos para este Rol</label>
                                        <br/>
                                        @foreach ($permission as $value )
                                            <label for="">{{ Form::checkbox('permission[]', $value->id, false, array('class'=>'name')) }}
                                            {{ $value->name}}</label>
                                        <br/>
                                        @endforeach
                                    </div>
                                </div>

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


@section('scripts')
<script>
// selecionar todas las opciones
$("#checkall").change(function(){
    $("input:checkbox").prop("checked", $(this).prop("checked"))

});

</script>

@endsection
