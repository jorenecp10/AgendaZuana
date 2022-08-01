<?php 
namespace App\Helpers;

use Firebase\JWT\JWT;
use Illuminate\Support\Facades\DB;
use App\User;

class JwtAuth{

  public $key;
  public function __construct(){

  	$this->key = 'esto_es_una_clave_super_secreta-1082920';
  }

  public function signup($id,$password, $getToken = null){

  
   $user = User::Where([
   	        'id'=> $id,
   	        'password'=> $password
   	])->first();
     
   $signup = false;
   if (is_object($user)){

   	   $signup = true;
   }
   if($signup){
     
     $token = array(
      'sub'=> $user->id,
      'nombre'=> $user->nombre,
      'password'=>$user->password,
      'role'=>$user->role,
      'iat' => time(),
      'exp' => time()+ (8 * 60 * 60),
     );

     $jwt = JWT::encode($token, $this->key ,'HS256');
     $decode = JWT::decode($jwt,$this->key ,['HS256']);
     
     if (is_null($getToken)) {
     	$data = $jwt; 
     }else{
     	$data=$decode;
     }

   }else{

   	  $data = array(
            'status'=> 'error',
            'message'=>' Login incorrecto.'
   	  );
   }


  //buscar si existe el usuario con sus credenciales
  //comprobar si son correctas (objeto)
  // generar el token los datos del usuario identificdo
  //Devolver los datos decodificados o el token, en funcion de un parametro
    return $data;
    }

    public function checkToken($jwt, $getIdentity= false){
           
           $auth = false;
             try {

              $jwt = str_replace('"','',$jwt);
              $decoded = JWT::decode($jwt,$this->key, ['HS256']);
             
             } catch (\UnexpectedValueException $e) {
                $auth = false;
             } catch (\DomainException $e){

                $auth = false;
             }
           
     if (!empty($decoded) && is_object($decoded) && isset($decoded->sub)) {
       $auth = true;
     }else{
       $auth= false;
     }

     if($getIdentity){

      return $decoded;
     }

     return $auth;

    }
}






























 ?>