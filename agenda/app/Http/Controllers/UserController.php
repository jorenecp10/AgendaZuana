<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request){
      $email= $request->email;
      $nombre=$request->nombre;
      $role=$request->role;
      $pwd=Hash::make($request->password);
      
      $existe = DB::table('users')->where([['email', $email]])->first(); 
      if (!empty($existe)) {
          echo '<script language="javascript">alert("Usuario ya existe");</script>';
          return view('crearusuario');
      }
 
      else{

      $user=new User();
      $user->email=$email;
      $user->name=$nombre;
      $user->password=$pwd;
      $user->role=$role;
      $user->save(); 
      echo '<script language="javascript">alert("Usuario grabado con Exito");</script>';
       return view('crearusuario');
      }
      

    }

   /* public function login(Request $request){
      
      
      $cedula=$request->id;
      $password=$request->password;
      $accion =$request->accion;
      $hoy=$request->hoy;
      $role=$request->role;
      $pwd=hash('sha256',$request->password); 
      
      $jwtAuth = new \JwtAuth();
      $signup=$jwtAuth->signup($cedula,$pwd);
      
      if (!empty($gettoken)) {
      $signup=$jwtAuth->signup($cedula,$pwd,true); 
      }

      return response()->json($signup,200);
    }

    public function update(Request $request){

      $token = $request->header('Authorization');
      $jwtAuth = new \JwtAuth();
      $checkToken = $jwtAuth->checkToken($token);

      if ($checkToken) {
        echo "<h1> Login Correcto </h1>";
      }else{
         echo "<h1> Login Incorrecto </h1>";
      }

      die();
    }*/
  
}
