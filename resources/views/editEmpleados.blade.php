@extends('layouts.head')
@section('htitle', 'Home')


@extends('layouts.nav')


@section('body')

    <div class="mt-0 justify-content-center row vh-100 align-items-center form-container justify-content-center row align-items-center">
        <form action="{{route('update-empleados', $employee)}}" method="post" class="col-5">

            @csrf
            @method('put')

            <div class="mb-3">
                <label for="compania" class="form-label">Compañia</label>
                <br>
                <select name="compania_id" id="">
                    <option value="0"> -- Elija una Opcion -- </option>
                    @foreach ($companys as $company)
                    <option value="{{$company->id}}">{{$company->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <input type="hidden" name="id" value="{{$employee->id}}">
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" class="form-control" id="exampleInputText" aria-describedby="emailHelp" value="{{$employee->primer_nombre}}">
            
                @error('nombre')
                <small class="text-danger">*{{$message}}</small>
                <br>
                @enderror

            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Apellido</label>
                <input type="text" name="apellido" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$employee->apellido}}">
            
                @error('apellido')
                <small class="text-danger">*{{$message}}</small>
                <br>
                @enderror
            
            </div>
            <div class="mb-3">
                <label for="web" class="form-label">Email</label>
                <input type="email" name="correo" class="form-control" id="exampleInputText1" value="{{$employee->correo}}">
            </div>
            <div class="mb-3">
                <label for="Logo" class="form-label">Telefono</label>
                <input type="number" name="telefono" class="form-control" id="exampleInputText1" value="{{$employee->telefono}}">
            </div>
            <button type="submit" class="btn btn-primary">Agregar Compañia</button>
        </form>
    </div>

@endsection()
