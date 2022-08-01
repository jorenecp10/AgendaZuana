<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Facades\Config;
//use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    //Requiere la variable cedula y habitacion para funcionar
    public function create(Request $request){
        
//        $json = $request->input('json', null);
//        $variables_array = json_decode($json, true);
//        
//        if(!empty($variables_array)){
            $precheckout=$request->precheckout;
            $habitacion = $request->habitacion;
            $cedula = $request->cedula;
            $nombre = $request->nombre;
            $mytime = Carbon::now();
            $mytime = $mytime->toDateString();
            $nuevomytime = strtotime('-0 day', strtotime($mytime));
            $nuevomytime = date('Y-m-d', $nuevomytime);
            
//            var_dump($nombre);
//            var_dump($cedula);
//            var_dump($habitacion);
//            die();

//            Config::set('database.default', 'sqlsrv');
//
//            $sql = 'SELECT  NOMBRE_ACO, FLLEGA_ACO, FSALID_ACO  FROM ACOMPANA where ESTADO_ACO=? and IDENT_ACO=? and NROHAB_HAB=?';
//
//            $cliente = DB::select($sql, array(32, $cedula, $habitacion));
//            
//            Config::set('database.default', 'mysql');
            
//            if(!empty($cliente)){
                
                $cliente = \App\Clientes::find($cedula);
                $n_habitacion=\App\Habitaciones::find($habitacion);

if(!empty($n_habitacion)){
                if(!empty($cliente)){
                    
                    $cliente->habitacion = $habitacion;
                    $cliente->save();
                }else{
                    $cliente = new \App\Clientes();
                    $cliente->id = $cedula;
                    $cliente->nombre = $nombre;
                    $cliente->habitacion = $habitacion;

                    $cliente->save();
                }
                 return view('datoagenda',compact('cliente','nuevomytime','precheckout','cedula'));

                
  }else{
     
     echo '<script language="javascript">alert("Habitacion no existe en el hotel");</script>';

     return view('/cita/cita1', compact('cedula', 'nombre'));


  }              
                #var_dump($mytime);
                #var_dump($nuevomytime);
                #die();
               
//            }else{
//                $data = array(
//                    'status' => 'error',
//                    'code' => 404,
//                    'message' => 'No se encontro el cliente en la base de Zeus'
//                );
//                return response()->json($data, $data['code']);
//            }
//        }else{
//            $data = array(
//                    'status' => 'error',
//                    'code' => 404,
//                    'message' => 'No se enviaron los datos correctamente'
//                );
//                return response()->json($data, $data['code']);
//        }
    }
    
    
}
