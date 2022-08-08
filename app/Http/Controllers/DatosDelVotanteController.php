<?php

namespace App\Http\Controllers;

use App\Models\DatosDelVotante;
use Illuminate\Http\Request;
use App\Models\PuestosDeVotaciones;
use App\Models\Municipio;
use App\Models\User;
use App\Models\Barrios;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
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
        $DatosDelVotantes=DatosDelVotante::simplePaginate();
        $municipios=Municipio::all();
        $users=User::all();
        $barrios=Barrios::all();
        $PuestosDeVotaciones=PuestosDeVotaciones::all();
        return view ('DatosDelVotante.index', compact('DatosDelVotantes', 'users','barrios','PuestosDeVotaciones','municipios') );
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
                     'mesa'=>'required',
                     'user_id'=>'required',
                     'barrio_id'=>'required',
                     'puestos_de_votaciones_id'=>'required',
         ]);
        if(!$validation->fails()){
            $DatosDelVotante=new DatosDelVotante();
            $DatosDelVotante->nombres=$request->nombres;
            $DatosDelVotante->apellidos=$request->apellidos;
            $DatosDelVotante->direccion=$request->direccion;
            $DatosDelVotante->telefono=$request->telefono;
            $DatosDelVotante->cedula=$request->cedula;
            $DatosDelVotante->mesa=$request->mesa;
            $DatosDelVotante->user_id=$request->user_id;
            $DatosDelVotante->barrio_id=$request->barrio_id;
            $DatosDelVotante->puestos_de_votaciones_id=$request->puestos_de_votaciones_id;
            $DatosDelVotante->save();
            if($DatosDelVotante){
                Alert::success('Votante Inscrito Correctamente');
                return redirect()->route('DatosDelVotante.index');
            }else{
                Alert::error('Algo a salido mal');
                return redirect()->route('DatosDelVotante.create');
            }
        }else{
            // dd($validation);
            Alert::error('Falta un campo');
            // dd($PuestosDeVotaciones);
            return redirect()->route('DatosDelVotante.create');
        }

         //
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
        $DatosDelVotantes=DatosDelVotante::find($id);
        $users=User::all();
        $barrios=Barrios::all();
        $PuestosDeVotaciones=PuestosDeVotaciones::all();
        return view ('DatosDelVotante.edit', compact('DatosDelVotantes', 'users','barrios','PuestosDeVotaciones') );

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
                     'mesa'=>'required',
                     'user_id'=>'required',
                     'barrio_id'=>'required',
                     'puestos_de_votaciones_id'=>'required',
         ]);
        if(!$validation->fails()){
            $DatosDelVotante=DatosDelVotante::find($id);
            $DatosDelVotante->nombres=$request->nombres;
            $DatosDelVotante->apellidos=$request->apellidos;
            $DatosDelVotante->direccion=$request->direccion;
            $DatosDelVotante->telefono=$request->telefono;
            $DatosDelVotante->cedula=$request->cedula;
            $DatosDelVotante->mesa=$request->mesa;
            $DatosDelVotante->user_id=$request->user_id;
            $DatosDelVotante->barrio_id=$request->barrio_id;
            $DatosDelVotante->puestos_de_votaciones_id=$request->puestos_de_votaciones_id;
            $DatosDelVotante->save();
            if($DatosDelVotante){
                Alert::success('Votante Actualizado Correctamente');
                return redirect()->route('DatosDelVotante.index');
            }else{
                Alert::error('Algo a salido mal');
                return redirect()->route('DatosDelVotante.index');
            }
        }else{
            // dd($validation);
            Alert::error('Falta un campo');
            return redirect()->route('DatosDelVotante.index');
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
        $DatosDelVotante=DatosDelVotante::findOrfail($id);
        $DatosDelVotante->delete();
        Alert::warning('Votante Elimindado Correctamente');
        return redirect()->route('DatosDelVotante.index');
    }
}
