@extends('layouts.head')
@section('htitle', 'Home')


@extends('layouts.nav')


@section('body')

    <div class="mt-0 justify-content-center row vh-100 align-items-center form-container justify-content-center row align-items-center">
        <form action="" method="post" class="col-5">

            @csrf

            <div class="mb-3">
                <label for="compania" class="form-label">Compañia</label>
                <br>
                <select name="compania_id" id="">
                    <option value="#"> -- Elija una Opcion -- </option>

                    @foreach ($companysID as $companyID)
                    <option value="{{$companyID->id}}">{{$companyID->nombre}}</option>
                    @endforeach

                </select>
                
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Primer Nombre</label>
                <input type="text" name="nombre" class="form-control" id="exampleInputText" aria-describedby="emailHelp">
            
                @error('nombre')
                <small class="text-danger">*{{$message}}</small>
                <br>
                @enderror
        
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Apellido</label>
                <input type="text" name="apellido" class="form-control" id="exampleInputText" aria-describedby="emailHelp">
            
                @error('apellido')
                <small class="text-danger">*{{$message}}</small>
                <br>
                @enderror
            
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="web" class="form-label">Telefono</label>
                <input type="text" name="telefono" class="form-control" id="exampleInputText1">
            </div>
            <button type="submit" class="btn btn-primary">Agregar Empleado</button>
        </form>
    </div>

@endsection()