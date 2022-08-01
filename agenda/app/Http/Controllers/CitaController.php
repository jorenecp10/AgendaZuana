<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Agenda;

class CitaController extends Controller
{
    public function index(Request $request) {
        
        $fechavalor = $request->fecha;
        $auth = $request->signup;

        if(!is_null($fechavalor)){
            
            $sql = 'select clientes.nombre, clientes.id, clientes.habitacion, agenda.hora_inicio, agenda.hora_fin,  agenda.precheckout from citas inner join agenda on citas.agenda_id = agenda.id inner join clientes on citas.clientes_id = clientes.id where precheckout = true and agenda.fecha = ? order by agenda.hora_inicio';

            
            $citaspre = DB::select($sql, array($fechavalor));
            
            $sql = 'select clientes.nombre, clientes.id, clientes.habitacion, agenda.hora_inicio, agenda.hora_fin,  agenda.precheckout from citas inner join agenda on citas.agenda_id = agenda.id inner join clientes on citas.clientes_id = clientes.id where precheckout = false and agenda.fecha = ? order by agenda.hora_inicio ';
            
           
            $citasout = DB::select($sql, array($fechavalor));
            
            return view('citas', compact('citasout', 'citaspre','fechavalor'));
        }else{
            
            $fechavalor = Carbon::now();
            
            $fechavalor = $fechavalor->toDateString();
            
            $sql = 'select clientes.nombre, clientes.id, clientes.habitacion, agenda.hora_inicio, agenda.hora_fin,  agenda.precheckout from citas inner join agenda on citas.agenda_id = agenda.id inner join clientes on citas.clientes_id = clientes.id where precheckout = true and agenda.fecha = ? order by agenda.hora_inicio';
            
            $citaspre = DB::select($sql, array($fechavalor));
            
            $sql = 'select clientes.nombre, clientes.id, clientes.habitacion, agenda.hora_inicio, agenda.hora_fin,  agenda.precheckout from citas inner join agenda on citas.agenda_id = agenda.id inner join clientes on citas.clientes_id = clientes.id where precheckout = false and agenda.fecha = ? order by agenda.hora_inicio';
            
           
            $citasout = DB::select($sql, array($fechavalor));
           
            return view('citas', compact('citasout', 'citaspre','fechavalor','auth'));
        }
        
    }
    
    public function create(Request $request) {
        
        $habitacion=$request->habitacion;
        $cedula = $request->cedula;
        $idagenda = $request->id;
        $nombre =$request->nombre;
        $precheckout=$request->precheckout;
        $agenda = \App\Agenda::find($idagenda);
        $agendadisponible = $agenda->cantidad - $agenda->usados;
        $fecha=$request->fecha;
        $torre=$request->torre;
         
        

        $hoy = Carbon::now()->toDateString();

        $citas = DB::table('citas')->where('clientes_id', $cedula)->get();

        if(!empty($citas)){
            
            $bandera = false;
            foreach ($citas as $cita) {
                $agenda1 = DB::table('agenda')->where([['id', $cita->agenda_id],
                                              ['fecha', '>=', $hoy]])->first();

                if(!is_null($agenda1)){
                    if($agenda1->precheckout == $precheckout){ 
                        $bandera = true;
                    }

                }
            }
            if($bandera){
                echo '<script language="javascript">alert("No se puede crear agendas duplicadas");</script>';
              return view('cita/cita');
            }
        }
        
        if($agendadisponible > 0){

            
            $cita = new \App\Citas();
            $cita->agenda_id = $idagenda;
            $cita->clientes_id = $cedula;
            $cita->save();
            $agenda->usados = $agenda->usados + 1;
            $agenda->save();

            if($precheckout==1){
                $tipocita='precheckout';
            }else{
                $tipocita='Check out';
            }
           return view('respuestacita',compact('agenda','cita','nombre','tipocita',
            'fecha','cedula','habitacion','torre'));
            
        }else{
            
            return 'La agenda seleccionada ya no está disponible';
            
        }
    }
}
