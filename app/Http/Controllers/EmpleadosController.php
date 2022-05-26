<?php

namespace App\Http\Controllers;

use App\Models\Empleados;
use App\Models\Companias;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateEmpleadosRequest;
use Faker\Provider\ar_EG\Company;

class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $employees = Empleados::paginate(10);
        return view('empleados', compact('employees'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    public function store(UpdateEmpleadosRequest $request){
        $employee = new Empleados();

        $employee->compania_id = $request->compania_id;
        $employee->primer_nombre = $request->nombre;
        $employee->apellido = $request->apellido;
        $employee->correo = $request->email;
        $employee->telefono = $request->telefono;

        $employee->save();

        return redirect(route('empleados'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function show(Empleados $empleados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $companys = Companias::select('id', 'nombre')->get();
        $employee = Empleados::find($id);

        return view('editEmpleados', compact('employee', 'companys'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEmpleadosRequest  $request
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmpleadosRequest $request){

        $employee = Empleados::find($request->id);
        
        if ($request->compania_id != 0) {
            $employee->compania_id = $request->compania_id;
        }

        $employee->primer_nombre = $request->nombre;
        $employee->apellido = $request->apellido;
        $employee->correo = $request->correo;
        $employee->telefono = $request->telefono;
        
        $employee->save();
        return redirect()->route('empleados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $empleados = Empleados::findOrFail($id);
        $empleados->delete();

        return redirect(route('empleados'));
    }



    public function addempleados(){
        $companysID = Companias::select('id', 'nombre')->get();
        
        return view('addEmpleados', compact('companysID'));
    }


}
