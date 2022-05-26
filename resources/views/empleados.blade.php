@extends('layouts.head')
@section('htitle', 'Home')


@extends('layouts.nav')


@section('body')



<a href="{{route('add-empleados')}}" class="btn btn-success">Add Employee</a>


<table class="table">
    <thead>
      <tr>
          <th scope="col">#</th>
        <th scope="col">Compañia</th>
        <th scope="col">Primer Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Email</th>
        <th scope="col">Telefono</th>
        <th scope="col">- -</th>
      </tr>
    </thead>
    <tbody>
      
      <?php $n = 0; ?>
      @foreach ($employees as $employee)
        <?php $n++; ?>
        <tr>
          <th scope="row">{{$n}}</th>
          <td>{{$employee->compania_id}}</td>
          <td>{{$employee->primer_nombre}}</td>
          <td>{{$employee->apellido}}</td>
          <td>{{$employee->correo}}</td>
          <td>{{$employee->telefono}}</td>
          <td>
              <form action="{{route('edit-empleados', $employee->id)}}" method="get">
                @csrf
                <button type="submit" class="btn btn-primary">Editar</button>
              </form>

              <form action="{{route('empleados.destroy', $employee->id)}}" method="post">
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
  {{$employees->links()}}
</div>

@endsection()