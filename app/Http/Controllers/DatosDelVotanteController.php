<?php

namespace App\Http\Controllers;

use App\Models\DatosDelVotante;
use Illuminate\Http\Request;
use App\Models\PuestosDeVotaciones;
use App\Models\Municipio;
use App\Models\User;
use App\Models\Barrios;
class DatosDelVotanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $DatosDelVotantes=PuestosDeVotaciones::simplePaginate(7);
        $users=User::all();
        $barrios=Barrios::all();
        $PuestosDeVotaciones=PuestosDeVotaciones::all();
        return view ('DatosDelVotante.index', compact('DatosDelVotantes', 'users','barrios','PuestosDeVotaciones') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $municipios=Municipio::all();
        $users=User::all();
        $barrios=Barrios::all();
        $PuestosDeVotaciones=PuestosDeVotaciones::all();
        return view ('DatosDelVotante.create',compact('users','barrios','PuestosDeVotaciones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         $validation=Validator::make($request->all(),[
                     'nombres'=>'required',
                     'apellidos'=>'required',
                     'direccion'=>'required',
                     'telefono'=>'required',
                     'cedula'=>'required',
                     'user_id'=>'required',
                     'barrio_id'=>'required',
                     'puestos_de_votacion_id'=>'required',
         ]);
        if(!$validation->fails()){
            $PuestosDeVotaciones=new PuestosDeVotaciones();
            $PuestosDeVotaciones->nombres=$request->nombres;
            $PuestosDeVotaciones->apellidos=$request->apellidos;
            $PuestosDeVotaciones->direccion=$request->direccion;
            $PuestosDeVotaciones->telefono=$request->telefono;
            $PuestosDeVotaciones->cedula=$request->cedula;
            $PuestosDeVotaciones->user_id=$request->user_id;
            $PuestosDeVotaciones->barrio_id=$request->barrio_id;
            $PuestosDeVotaciones->puestos_de_votacion_id=$request->puestos_de_votacion_id;
            $PuestosDeVotaciones->save();
            if($PuestosDeVotaciones){
                Alert::success('daros del votante creado exitosamente');
                return redirect()->route('DatosDelVotante.index');
            }else{
                Alert::error('algo a malido sal');
                return redirect()->route('DatosDelVotante.create');
            }
        }else{
            // dd($validation);
            Alert::error('falta un campo');
            return redirect()->route('DatosDelVotante.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DatosDelVotante  $datosDelVotante
     * @return \Illuminate\Http\Response
     */
    public function show(DatosDelVotante $datosDelVotante)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DatosDelVotante  $datosDelVotante
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $DatosDelVotantes=PuestosDeVotaciones::find($id);
        $users=User::all();
        $barrios=Barrios::all();
        $PuestosDeVotaciones=PuestosDeVotaciones::all();
        return view ('DatosDelVotante.index', compact('DatosDelVotantes', 'users','barrios','PuestosDeVotaciones') );

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DatosDelVotante  $datosDelVotante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
                 $validation=Validator::make($request->all(),[
                     'nombres'=>'required',
                     'apellidos'=>'required',
                     'direccion'=>'required',
                     'telefono'=>'required',
                     'cedula'=>'required',
                     'user_id'=>'required',
                     'barrio_id'=>'required',
                     'puestos_de_votacion_id'=>'required',
         ]);
        if(!$validation->fails()){
            $PuestosDeVotaciones=PuestosDeVotaciones::find($id);
            $PuestosDeVotaciones->nombres=$request->nombres;
            $PuestosDeVotaciones->apellidos=$request->apellidos;
            $PuestosDeVotaciones->direccion=$request->direccion;
            $PuestosDeVotaciones->telefono=$request->telefono;
            $PuestosDeVotaciones->cedula=$request->cedula;
            $PuestosDeVotaciones->user_id=$request->user_id;
            $PuestosDeVotaciones->barrio_id=$request->barrio_id;
            $PuestosDeVotaciones->puestos_de_votacion_id=$request->puestos_de_votacion_id;
            $PuestosDeVotaciones->save();
            if($PuestosDeVotaciones){
                Alert::success('daros del votante creado exitosamente');
                return redirect()->route('DatosDelVotante.index');
            }else{
                Alert::error('algo a malido sal');
                return redirect()->route('DatosDelVotante.create');
            }
        }else{
            // dd($validation);
            Alert::error('falta un campo');
            return redirect()->route('DatosDelVotante.create');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DatosDelVotante  $datosDelVotante
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $datosDelVotante=PuestosDeVotaciones::findOrfail($id);
        $datosDelVotante->delete();
        Alert::warning('Votante Elimindado Correctamente');
        return redirect()->route('DatosDelVotante.index');
    }
}
