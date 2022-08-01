<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiAuthController extends Controller
{
    public function autenticar(Request $request) {
        
        $json = $request->input('json', null);
        $variables_array = json_decode($json, true);
        
        if(!empty($variables_array)){
            $habitacion = $variables_array->habitacion;
            $cedula = $variables_array->cedula;

            Config::set('database.default', 'sqlsrv');

            $sql = "SELECT  NOMBRE_ACO, FLLEGA_ACO, FSALID_ACO,  FROM ACOMPANA where ESTADO_ACO=? and IDENT_ACO=? and NROHAB_HAB=?";

            $cliente = DB::select($sql, array(31, $cedula, $habitacion));
            
            if(!empty($cliente)){
                
                
            }
        }
        
    }
}
