<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JasperPHP\JasperPHP as JasperPHP; 

class ReportesController extends Controller
{
    

    public function conexion(){
        $bd=base_path('/vendor/cossou/jasperphp/src/JasperStarter/jdbc');
        return[
            'driver'=> 'mysql',
            'connection'=> env('DB_CONNECTION'),
            'host'=> env('DB_HOST'),
            'port'=> env('DB_PORT'),
            'database'=> env('DB_DATABASE'),  
            'username'=> env('DB_USERNAME'),  
            'password'=> env('DB_PASSWORD'),  
            'jdbc_drive'=> 'com.mysql.jdbc.Driver',
            'jdbc_url'=> 'jdbc:sqlserver://localhost;databaseName='.env('DB_DATABASE'),
             'jdbc_dir'=>$bd
        ];
    }
    public function reporte(){
        $report=new ReportesController();
        $jasper=new JasperPHP();
        $jasper->compile(__DIR__.'/../../../public/storage/report/reporteejemplo.jrxml')->execute();
        $jasper->process(__DIR__.'/../../../public/storage/report/reporteejemplo.jasper',
        false,
        ['pdf'],
        [],
        $report->conexion(),
    )->execute();
    $path=storage_path('/app/public/report/reporteejemplo.pdf');
    return response()->download($path);
    }

}
