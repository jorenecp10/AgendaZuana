<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class AgendaController extends Controller
{
    public function create(Request $request){
        
//        $json = $request->input('json', null);
//        $variables_array = json_decode($json, true);
//        
//        if(!empty($variables_array)){
            $fecha = $request->fecha;
            $hora_inicio = $request->hora_inicio;
            $hora_fin = $request->hora_fin;
            $precheckout = $request->precheckout;
            $tiempo = $request->tiempo;
            $user=$request->usuario;
            $torre = $request->torre;
//            $agendaexistente = \App\Agenda::where('fecha',$fecha)->where('torre',$torre)->where('precheckout',$precheckout)->first();
//            
//            if (!is_null($agendaexistente)) {
//               echo '<script language="javascript">alert("esa agenda ya existe");</script>';
//               $hoy = Carbon::now();
//               $hoy=$hoy->toDateString();
//               return view('crearagenda',compact('user','hoy')); 
//
//            }
//            else{
            if($precheckout == 1){
                $precheckout = true;
            }else{
                $precheckout = false;
            }
            $cantidad = $request->cantidad;
            $bandera = true;
            //$horafinal = \DateTime::createFromFormat('H:i',$hora_fin);
            $horafinal = \Carbon\Carbon::parse($hora_fin);
            //$horafinal = $horafinal->format('H:i');
            //$principio = \DateTime::createFromFormat('H:i',$hora_inicio);
            $principio = \Carbon\Carbon::parse($hora_inicio);
            //$final = \DateTime::createFromFormat('H:i',$hora_inicio);
            $final = \Carbon\Carbon::parse($hora_inicio);
            
            $final->addMinutes($tiempo);

            if($horafinal->diffInMinutes($final) >= 0){

                $arraycreadas = new Collection();
                $arraynocreadas = new Collection();
                
                do{
                
                    $agenda = new \App\Agenda();
                    $agenda->fecha = $fecha;
                    $agenda->hora_inicio = $principio->format('H:i');
                    $agenda->hora_fin = $final->format('H:i');
                    $agenda->precheckout = $precheckout;
                    $agenda->cantidad = $cantidad;
                    $agenda->torre = $torre;
                    
                    $existe = DB::table('agenda')->where([
                                                        ['fecha', $fecha],
                                                        ['hora_inicio', '>', $principio],
                                                        ['hora_inicio', '<', $final],
                                                        ['precheckout', $precheckout],
                                                        ['torre', $torre]])->first();
                    $existe2 = DB::table('agenda')->where([
                                                        ['fecha', $fecha],
                                                        ['hora_inicio', '>', $principio],
                                                        ['hora_fin', '<', $final],
                                                        ['precheckout', $precheckout],
                                                        ['torre', $torre]])->first();
                    $existe3 = DB::table('agenda')->where([
                                                        ['fecha', $fecha],
                                                        ['hora_inicio', '<', $principio],
                                                        ['hora_fin', '>', $principio],
                                                        ['precheckout', $precheckout],
                                                        ['torre', $torre]])->first();
                    $existe4 = DB::table('agenda')->where([
                                                        ['fecha', $fecha],
                                                        ['hora_inicio', $principio],
                                                        ['precheckout', $precheckout],
                                                        ['torre', $torre]])->first();

                    if(!empty($existe) || !empty($existe2) || !empty($existe3) || !empty($existe4)){
                        
                        $arraynocreadas->add($agenda);
                
                    }else{
                        $agenda->save();
                        $arraycreadas->add($agenda);
                    }
                    
                    $principio->addMinutes($tiempo);
                    $final->addMinutes($tiempo);
                    if($final > $horafinal){
                        $bandera = false;
                    }

                }while($bandera);
//                $data = array(
//                    'status' => 'success',
//                    'code' => 200,
//                    'message' => 'Agenda creada con exito',
//                );
                $arraycreadas = $arraycreadas->all();
                $arraynocreadas = $arraynocreadas->all();
                return view('respuesta',compact('fecha','torre','precheckout','user','arraycreadas', 'arraynocreadas'));
            }else{
                $data = array(
                    'status' => 'error',
                    'code' => 404,
                    'message' => 'No hay suficiente tiempo para crear la agenda'
                );
                return view('crearagenda',compact('data'));
            }

//        }
                
    }


    
    public function delete(Request $request) {
        
        $fecha = new \DateTime();
        $fecha = $request->fecha;
        $precheckout = $request->precheckout;
        $torre=$request->torre;
        if($precheckout == 1){
                $precheckout = true;
        }else{
                $precheckout = false;
        }

        $validarfecha = DB::table('agenda')->where('fecha',$fecha)->first();
        
        if ($validarfecha != null) {
        
        $agendas = DB::table('agenda')->where([
            ['fecha', $fecha],
            ['usados', '>', 0],
            ['precheckout', $precheckout],
            ['torre', $torre]])->first();
         
         if(!empty($agendas)){
            $data = array(
                    'status' => 'error',
                    'code' => 404,
                    'message' => 'No se puede borrar la agenda porque ya hay citas en ella'
                );
                return view('sinagenda')->with($data);
                
            }else{
                $agendas = \App\Agenda::where('fecha',$fecha)->where('torre',$torre);
                if($agendas->exists()){
                    $agendas->delete();
                
                    $data = array(
                            'status' => 'success',
                            'code' => 200,
                            'message' => 'Agenda borrada con exito',
                        );
                    return view('sinagenda')->with($data);
                }else{
                    $data = array(
                        'status' => 'error',
                        'code' => 404,
                        'message' => 'No hay nada que borrar'
                    );
                    return $data;
                } 
            }
        }else{
            return "no existen agendas para esas fechas";
        }
    } 
    
    public function index(Request $request) {
        

        $fecha = new \DateTime();
        $fecha = $request->fecha;
        $precheckout = $request->precheckout;
        $cedula = $request->cedula;
        $nombre = $request->nombre;
        $habitacion=$request->habitacion;
        $torre = \App\Habitaciones::find($habitacion);
        $torre = $torre->numero_torre;
        if($precheckout == 1){
                $precheckout = true;
        }else{
                $precheckout = false;
        }

        $hoy = Carbon::now()->toDateString();

        $citas = DB::table('citas')->where('clientes_id', $cedula)->get();

        if(!empty($citas)){
            $bandera = false;
            foreach ($citas as $cita) {
                $agenda = DB::table('agenda')->where([['id', $cita->agenda_id],
                                              ['fecha', '>=', $hoy]])->first();

                if(!is_null($agenda)){
                    if($agenda->precheckout == $precheckout){ 
                        $bandera = true;
                    }

                }
            }
            if($bandera){
                echo '<script language="javascript">alert("No se puede crear agendas duplicadas");</script>';
              return view('cita/cita');
            }


        }

        $agendas = DB::table('agenda')->where([
            ['fecha', $fecha],
            ['usados', '<', \DB::raw('cantidad')],
            ['precheckout', $precheckout],
            ['torre', $torre]])->get();

        
//        $agendas = \App\Agenda::where([
//            ['fecha', $fecha],
//            ['precheckout', $precheckout],
//            ['usados', '<', 'cantidad']
//        ])->get();
        if (count($agendas)==0) {
           echo '<script language="javascript">alert("No Tenemos Agenda para ese dia");</script>';
               echo "<script type='text/javascript'>";
               echo "window.history.back(-1)";
               echo "</script>";
        }else{

        return view('agendadisponible', compact('agendas', 'cedula', 'fecha',
            'nombre','precheckout','habitacion','torre'));

        }
    }

    public function show(Request $request){
        $fechavalor = $request->fecha;

        if(!is_null($fechavalor)){
            
            $sql = 'SELECT fecha,hora_inicio,hora_fin,cantidad,usados,precheckout FROM `agenda` WHERE torre = 1 and fecha = ?';
            
            
            $torre1 = DB::select($sql, array($fechavalor));
            
            $sql = 'SELECT fecha,hora_inicio,hora_fin,cantidad,usados,precheckout FROM `agenda` WHERE torre = 2 and fecha = ?';
            
           
            $torre2 = DB::select($sql, array($fechavalor));
            
            return view('agendas', compact('torre1', 'torre2','fechavalor'));
        }else{
            
            $fechavalor = Carbon::now();
            
            $fechavalor = $fechavalor->toDateString();
            
            $sql = 'SELECT fecha,hora_inicio,hora_fin,cantidad,usados,precheckout FROM `agenda` WHERE torre = 1 and fecha = ?';
            
            $torre1 = DB::select($sql, array($fechavalor));
            
            $sql = 'SELECT fecha,hora_inicio,hora_fin,cantidad,usados,precheckout FROM `agenda` WHERE torre = 2 and fecha = ?';
            
           
            $torre2 = DB::select($sql, array($fechavalor));
           
            return view('agendas', compact('torre1', 'torre2','fechavalor'));
        }
    }
}
