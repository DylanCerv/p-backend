@extends('layouts.head')
@section('htitle', 'Home')


@extends('layouts.nav')


@section('body')

    <div class="mt-0 justify-content-center row vh-100 align-items-center form-container justify-content-center row align-items-center">


        <form action="{{route('update-companias', $company)}}" method="post" class="col-5">

            @csrf
            @method('put')

                <input type="hidden" name="id" value="{{$company->id}}">

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" class="form-control" id="exampleInputText" aria-describedby="emailHelp" value="{{$company->nombre}}">
                @error('nombre')
                    <small class="text-danger">*{{$message}}</small>
                    <br>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$company->email}}">
            </div>
            <div class="mb-3">
                <label for="web" class="form-label">Pagina Web</label>
                <input type="text" name="pagina_web" class="form-control" id="exampleInputText1" value="{{$company->pagina_web}}">
            </div>
            <div class="mb-3">
                <label for="Logo" class="form-label">Logo</label>
                <input type="file" name="logo" class="form-control" id="exampleInputText1" value="{{$company->logo}}">
                @error('logo')
                    <small class="text-danger">*{{$message}}</small>
                    <br>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Editar Compañia</button>
        </form>

    </div>

@endsection()
