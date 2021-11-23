@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Agregar Productos</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12 ">
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

                            {!! Form::open(array('route'=>'admin.productos.store', 'method'=>'POST','files'=>true)) !!}
                            <div class="form-group">

                                <div class="row">

                                    <div class="col">
                                        <div class="form-group">
                                            {!! Form::label('nombre', 'Nombre') !!}
                                            {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('descripcion', 'Descripcion') !!}
                                            {!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}
                                        </div>

                                        <div class="form-group">
                                            {!! Form::label('precio', 'Precio') !!}
                                            <input class="form-control" name='precio' type="number" step="any">
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('stock', 'Stock') !!}
                                            {!! Form::number('stock', null, ['class' => 'form-control']) !!}
                                        </div>

                                    </div>
                                        {{-- MAGENS E VERÁ AQUÍ --}}
                                    <div class=" col  ">
                                        <div class="form-group ">
                                            <img id="imagenSeleccionada" src="{{asset('img/file.jpeg')}}"style="max-height:250px;">
                                        </div>
                                    </div>
                                        {{-- MAGENS E VERÁ AQUÍ --}}

                                    <div class="col">
                                        <div class="form-group">
                                            {!! Form::label('categoria', 'Categoria') !!}

                                            <select name="categoria" class="form-control">

                                                <option value="0"> [Seleccione una categoria] </option>

                                                @foreach ($categorias as $categoria)
                                                <option value="{{ $categoria['id']}} "> {{ $categoria['nombre']}} </option>

                                                @endforeach

                                            </select>
                                            {{-- {!! Form::text('categoria', null, ['class' => 'form-control']) !!} --}}
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('proveedor', 'Proveedor') !!}
                                            <select name="proveedor" class="form-control">

                                                <option value="0"> [Seleccione una proveedor] </option>

                                                @foreach ($proveedores as $proveedor)
                                                <option value="{{ $proveedor['id']}} "> {{ $proveedor['nombre']}} </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <!-- Para ver la imagen seleccionada, de lo contrario no se -->

                                        <div class="form-group">

                                            <div class="grid grid-cols-1 mt-5 mx-7">
                                                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold mb-1">Subir Imagen</label>
                                                    <div class='flex items-center justify-center w-full'>
                                                        <label class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-purple-300 group'>
                                                            <div class='flex flex-col items-center justify-center pt-7'>
                                                            <svg class="w-10 h-10 text-purple-400 group-hover:text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                                            <p class='text-sm text-gray-400 group-hover:text-purple-600 pt-1 tracking-wider'>Seleccione la imagen</p>
                                                        </div>
                                                        <div class="hidden">

                                                            <input name="image" id="imagen" type='file' class="hidden" />
                                                        </div>
                                                        </label>
                                                    </div>
                                                </div>

                                        </div>
                                    </div>


                                </div>
                                <div class="form-group">
                                    {!! Form::submit('Crear', ['class' => 'btn btn-success']) !!}
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

<!-- Script para ver la imagen antes de CREAR UN NUEVO PRODUCTO -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function (e) {
        $('#imagen').change(function(){
            let reader = new FileReader();
            reader.onload = (e) => {
                $('#imagenSeleccionada').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        });
    });
</script>
