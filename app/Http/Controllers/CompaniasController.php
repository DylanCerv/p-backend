<?php

namespace App\Http\Controllers;

use App\Models\Companias;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\UpdateCompaniasRequest;

class CompaniasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $companys = Companias::paginate(10);

        return view('companias', compact('companys'));
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCompaniasRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UpdateCompaniasRequest $request){

        $company = new Companias();
        
        if($request->file('logo') != ""){
            $request->validate(['logo'=> 'image|min:100x100']);
            $img = $request->file('logo')->store('public/logo');
            $urlImg = Storage::url($img); // Cambia el nombre public por storage
            // return $urlImg;
            $company->logo = $urlImg;
        }

        $company->nombre = $request->nombre;
        $company->email = $request->email;
        $company->pagina_web = $request->pagina_web;

        $company->save();

        return redirect(route('companias'));

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Companias  $companias
     * @return \Illuminate\Http\Response
     */
    public function show(Companias $companias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Companias  $companias
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $company = Companias::find($id);

        return view('editCompanias', compact('company'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCompaniasRequest  $request
     * @param  \App\Models\Companias  $companias
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCompaniasRequest $request){
        $company = Companias::find($request->id);
        // return $company;

        $company->nombre = $request->nombre;
        $company->email = $request->email;
        $company->pagina_web = $request->pagina_web;
        $company->logo = $request->logo;
        
        // return $request->all();
        
        $company->save();
        return redirect()->route('companias');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Companias  $companias
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $company = Companias::findOrFail($id);
        $company->delete();

        return redirect()->route('companias');
    }


    public function addcompanias(){
        return view('addCompanias');
    }

    




}
