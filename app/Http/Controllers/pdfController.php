<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JasperPHP\JasperPHP;
class pdfController extends Controller
{
    //
    public function conexion(){
        $bd=base_path('vendor/cossou/jasperphp/src/JasperStarter/jdbc');
        return [
            'driver'=>'mysql',
            'connetion'=>env('DB_CONNECTION'),
            'host'=>env('DB_HOST'),
            'port'=>env('DB_PORT'),
            'database'=>env('DB_DATABASE'),
            'username'=>env('DB_USERNAME'),
            'password'=>env('DB_PASSWORD'),
            'jdbc_drive'=>'com.mysql.jdbc.Driver',
            'jdbc_url'=>'jdbc:sqlserver://localhost;databaseName='.env('DB_DATABASE'),
            'jdbc_dir'=>$db
        ];
    }
    public function reporte(){
        $report=new pdfController();
        $jasper=new JasperPHP();
        $jasper->compile(__DIR__.'/../../../public/storage/reporte/reporteejemplo.jrmxl')->execute();
        $jasper.procces(__DIR__.'/../../../public/storage/reporte/reporteejemplo.jasper',
        false,['pdf'],[],$reporte->conexion())->execute();
    }
}
