<?php

namespace App\Http\Controllers;

use App\Models\PuestosDeVotaciones;
use App\Models\Municipio;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
class PuestosDeVotacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $PuestosDeVotaciones=PuestosDeVotaciones::simplePaginate();
        $municipios=Municipio::all(); 
        return view ('PuestosDeVotaciones.index', compact('PuestosDeVotaciones', 'municipios') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $municipios=Municipio::all();
        return view ('PuestosDeVotaciones.create',compact('municipios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation=Validator::make($request->all(),[
                     'nombre'=>'required',
                     'direccion'=>'required',
                     'municipio_id'=>'required',
         ]);
        if(!$validation->fails()){
            $PuestosDeVotaciones=new PuestosDeVotaciones();
            $PuestosDeVotaciones->nombre=$request->nombre;
            $PuestosDeVotaciones->direccion=$request->direccion;
            $PuestosDeVotaciones->municipio_id=$request->municipio_id;
            $PuestosDeVotaciones->save();
            if($PuestosDeVotaciones){
                Alert::success('Puesto de votaciones creado');
                return redirect()->route('PuestosDeVotaciones.index');
            }else{
                Alert::error('algo a malido sal');
                return redirect()->route('PuestosDeVotaciones.create');
            }
        }else{
            // dd($validation);
            Alert::error('falta un campo');
            return redirect()->route('PuestosDeVotaciones.create');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PuestosDeVotaciones  $puestosDeVotaciones
     * @return \Illuminate\Http\Response
     */
    public function show(PuestosDeVotaciones $puestosDeVotaciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PuestosDeVotaciones  $puestosDeVotaciones
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $PuestosDeVotaciones=PuestosDeVotaciones::find($id);
        $municipios=Municipio::all();
        return view ('PuestosDeVotaciones.edit', compact('PuestosDeVotaciones', 'municipios') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PuestosDeVotaciones  $puestosDeVotaciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
         $validation=Validator::make($request->all(),[
                     'nombre'=>'required',
                     'direccion'=>'required',
                     'municipio_id'=>'required',
         ]);
        if(!$validation->fails()){
            $PuestosDeVotaciones=PuestosDeVotaciones::find($id);
            $PuestosDeVotaciones->nombre=$request->nombre;
            $PuestosDeVotaciones->direccion=$request->direccion;
            $PuestosDeVotaciones->municipio_id=$request->municipio_id;
            $PuestosDeVotaciones->save();
            if($PuestosDeVotaciones){
                Alert::success('Puesto de votaciones editado');
                return redirect()->route('PuestosDeVotaciones.index');
            }else{
                Alert::error('algo a malido sal');
                return redirect()->route('PuestosDeVotaciones.edit');
            }
        }else{
            Alert::error('falta un campo');
            return redirect()->route('PuestosDeVotaciones.edit');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PuestosDeVotaciones  $puestosDeVotaciones
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $PuestosDeVotaciones=PuestosDeVotaciones::findOrfail($id);
        $PuestosDeVotaciones->delete();
        Alert::warning('Puesto de Votaciones Elimindado Correctamente');
        return redirect()->route('PuestosDeVotaciones.index');
    }
}
