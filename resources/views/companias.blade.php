@extends('layouts.head')
@section('htitle', 'Home')


@extends('layouts.nav')


@section('body')



<a href="{{route('add-companias')}}" class="btn btn-success">Add Company</a>


<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Email</th>
        <th scope="col">Logo</th>
        <th scope="col">Pagina Web</th>
        <th scope="col">- -</th>
      </tr>
    </thead>
    <tbody>

        <?php $n = 0; ?>
        @foreach ($companys as $company)
            <?php $n++; ?>
            <tr>
                <th scope="row">{{$n}}</th>
                <td>{{$company->nombre}}</td>
                <td>{{$company->email}}</td>
                <td class="storage-img"><img src="{{asset($company->logo)}}" alt=""></td>
                <td>{{$company->pagina_web}}</td>
                <td>

                    <form action="{{route('edit-companias', $company->id)}}" method="get">
                        @csrf
                        <button type="submit" class="btn btn-primary">Editar</button>
                    </form>
                    
                    <form action="{{route('companias.destroy', $company->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>

                </td>
            </tr>
        @endforeach

    </tbody>
</table>
<div class="card-body">
    {{$companys->links()}}
</div>

@endsection()
