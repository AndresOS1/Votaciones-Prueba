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
use Illuminate\Support\Facades\DB;
use PDF;


class EstadisticaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function estadisticas()
    {

            $DatosDelVotantes=DatosDelVotante::simplePaginate();
            $municipios=Municipio::all();
            $users=User::all();
            $barrios=Barrios::all();
            $PuestosDeVotaciones=PuestosDeVotaciones::all();
       
            // $datosy = DB::select('SELECT users.nombres, COUNT(id_votante) xd 
            //                       FROM datos_del_votante 
            //                       INNER JOIN users
            //                       ON datos_del_votante.user_id = users.id
            //                       GROUP BY users.nombres;');
            // return $data1;  
            $dato1 = DB::select('SELECT COUNT(id_votante) xd
            FROM datos_del_votante
            GROUP BY user_id;');

            $datoxd =  json_encode($dato1);

            // $dato1 = DatosDelVotante::select('COUNT(id_votante)')->groupBy('user_id');
            
            $users = User::all();

            // $datosVotante = DatosDelVotante::all();

            $data = [];
    
            foreach($users as $user){
                if($user->tipoUsuario == "lider"){
                   $data['label'][] = $user->nombres; 
                }         
            }

            $dato3 = json_decode($datoxd, true);
            

            foreach($dato3[0] as $xds){
                $data['data'][] = $xds;
                foreach($dato3[1] as $xdss){
                    $data['data'][] = $xdss;
                }
                // foreach($dato3[2] as $xdsss){
                //     $data['data'][] = $xdsss;
                // }
            }
            //  $data['data'][] = $dato3[0];
    
            $data['data'] = json_encode($data);

        //     $pdf = PDF::setOptions(['dpi' => 150,
        //     'enable-javascript' => true,
        //     'images' => true
        // ])->loadView('Estadisticas.estadisticas',  $data, compact('DatosDelVotantes', 'users','barrios','PuestosDeVotaciones','municipios'));
            
        //     return $pdf->stream();    
            // return $pdf->download('Estadisticas.pdf');  
            return view('Estadisticas.estadisticas',  $data, compact('DatosDelVotantes', 'users','barrios','PuestosDeVotaciones','municipios'));
    }

    public function verPDF() {
        $DatosDelVotantes=DatosDelVotante::simplePaginate();
        $municipios=Municipio::all();
        $users=User::all();
        $barrios=Barrios::all();
        $PuestosDeVotaciones=PuestosDeVotaciones::all();

         $pdf = PDF::loadView('Estadisticas.pdf', compact('DatosDelVotantes', 'users','barrios','PuestosDeVotaciones','municipios'))
         ->setOption('enable-javascript', true)
         ->setOption('images', true)
         ->setOption('javascript-delay', 13000)
         ->setOption('enable-smart-shrinking', true)
         ->setOption('no-stop-slow-scripts', true);
            
        return $pdf->stream();    
    }

    public function descargarPDF() {

        $DatosDelVotantes=DatosDelVotante::simplePaginate();
        $municipios=Municipio::all();
        $users=User::all();
        $barrios=Barrios::all();
        $PuestosDeVotaciones=PuestosDeVotaciones::all();

        $pdf = PDF::setOptions(['dpi' => 150,
                'enable-javascript' => true,
                'images' => true
            ])->loadView('Estadisticas.pdf', compact('DatosDelVotantes', 'users','barrios','PuestosDeVotaciones','municipios'));
            
        return $pdf->download('Estadisticas.pdf');  

    }




}
