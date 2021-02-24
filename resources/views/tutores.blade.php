@extends('layouts.layout')

@section('contenido')
<h1>{{__('Tutores empresa')}}</h1>


@if($errors->any())
<ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
</ul>
@endif


<form method="post">
    @csrf
    <fieldset class="border p-2">
        <legend>@lang('Datos tutpres de empresa')</legend>

        <div class="row align-items-start">
            <div class="mb-3 col-4">
                <label for="nombre_emp" class="form-label">{{__('Empresa')}}</label>
                <input class="form-control" name="nombre_emp" value="{!! old('nombre_emp') !!}" id="nombre_emp" required>
                <div>{!! $errors->first('nombre_emp','<small>:message</small>') !!}</div>   
            </div>


            <div class="mb-3 col-4">
                <label for="tipo_doc" class="form-label">Tipo documento</label>
                <input class="form-control" name="tipo_doc" value="{{old('tipo_doc')}}" id="tipo_doc" required>
                {{$errors->first('tipo_doc')}}
            </div>

            <div class="mb-3 col-4">
                <label for="cif" class="form-label">Documento de identidad</label>
                <input class="form-control" name="cif" value="{{old('cif')}}" id="cif" required>
                {{$errors->first('cif')}}
            </div>


        </div>
        <div class="row align-items-start">
            <div class="mb-3 col-4">
                <label for="nombre_tutor" class="form-label">Nombre</label>
                <input class="form-control" name="nombre_tutor" value="{!! old('nombre_tutor') !!}" id="nombre_tutor" required>
                <div>{!! $errors->first('nombre_tutor','<small>:message</small>') !!}</div>   
            </div>

            <div class="mb-3 col-4">
                <label for="apellido1" class="form-label"> Primer apellido</label>
                <input class="form-control" name="apellido1" value="{{old('apellido1')}}" id="apellido1" required>
                {{$errors->first('apellido1')}}
            </div>

            <div class="mb-3 col-4">
                <label for="apellido2" class="form-label">Segundo apellido</label>
                <input class="form-control" name="apellido2" value="{{old('apellido2')}}" id="apellido2" required>
                {{$errors->first('apellido2')}}
            </div>


        </div>
        <div class="row align-items-start">
            <div class="mb-3 col-4">
                <label for="pais" class="form-label">Pais</label>
                <input class="form-control" name="pais" value="{!! old('pais') !!}" id="pais" required>
                <div>{!! $errors->first('pais','<small>:message</small>') !!}</div>   
            </div>


            <div class="mb-3 col-4">
                <label for="provincia" class="form-label">Provincia</label>
                <input class="form-control" name="provincia" value="{{old('provincia')}}" id="provincia">
                {{$errors->first('provincia')}}
            </div>

            <div class="mb-3 col-4">
                <label for="municipio" class="form-label">Municipio</label>
                <input class="form-control" name="municipio" value="{{old('municipio')}}" id="municipio">
                {{$errors->first('municipio')}}
            </div>


        </div>
        <div class="row align-items-start">

            <div class="mb-3 col-4">
                <label for="estado" class="form-label">Estado</label>
                <select class="form-control" name="estado" id="estado" required>
                    <option value="activo" @if (old('estado') === 'activo') selected @endif>Activo</option>
                    <option value="inactivo" @if (old('estado') === 'inactivo') selected @endif>Inactivo</option>
                </select>
            </div>

            <div class="mb-3 col-4">
                <label for="telefono" class="form-label">Teléfono</label>
                <input class="form-control" name="telefono" value="{{old('telefono')}}" id="telefono" required>
                {{$errors->first('telefono')}}
            </div>

            <div class="mb-3 col-4">
                <label for="email" class="form-label">Email</label>
                <input class="form-control" name="email" value="{{old('email')}}" id="email" required>
                {{$errors->first('email')}}
            </div>


        </div>


    </fieldset>


   



    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@endsection
