@extends('layouts.head')
@section('htitle', 'Home')


@extends('layouts.nav')


@section('body')

    <div class="mt-0 justify-content-center row vh-100 align-items-center form-container justify-content-center row align-items-center">
        <form action="" method="post" class="col-5" enctype="multipart/form-data">

            @csrf

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" class="form-control" id="exampleInputText" aria-describedby="emailHelp">

                @error('nombre')
                <small class="text-danger">*{{$message}}</small>
                <br>
                @enderror

            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="web" class="form-label">Pagina Web</label>
                <input type="text" name="pagina_web" class="form-control" id="exampleInputText1">
            </div>
            <div class="mb-3">
                <label for="Logo" class="form-label">Logo</label>
                <input type="file" name="logo" class="form-control" id="exampleInputText1" accept="image/*">
            
                @error('logo')
                    <small class="text-danger">*{{$message}}</small>
                    <br>
                @enderror
            
            </div>
            <button type="submit" class="btn btn-primary">Agregar Compañia</button>
        </form>
    </div>

@endsection()
