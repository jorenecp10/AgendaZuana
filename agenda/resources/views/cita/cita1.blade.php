<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Agenda Electronica</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">




    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <style type="text/css">

td .btn {
    width: 100%;
}

.registerinicio{
    /*background: -webkit-linear-gradient(left, #3931af, #00c6ff);
    background: -webkit-linear-gradient(left, #020110, #00c6ff);
    background: -webkit-linear-gradient(left,#293437, #00c6ff);*/
    background: -webkit-linear-gradient(left,#3f7483, #0dc9ff);
    margin-top: 1%;
    /*padding: 3%; */
}

.register{
    /*background: -webkit-linear-gradient(left, #3931af, #00c6ff);
    background: -webkit-linear-gradient(left, #020110, #00c6ff);
    background: -webkit-linear-gradient(left,#293437, #00c6ff);*/
    
    /*margin-top: 3%;*/
    padding: 1%;
}

.register-left{
    text-align: center;
    color: #fff;
    margin-top: 4%;
}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
    background: #f8f9fa;
}
.register-left img{
    margin-top: 15%;
    margin-bottom: 5%;
    width: 100%;
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
}

@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding: 10%;
    margin-top: 5%;
}
.btnRegister{
    float: right;
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}
.register .nav-tabs{
    margin-top: 3%;
    border: none;
    background: #0062cc;
    border-radius: 1.5rem;
    width: 28%;
    float: right;
}
.register .nav-tabs .nav-link{
    padding: 2%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
    border: none;
}
.register .nav-tabs .nav-link.active{
    width: 100px;
    color: #0062cc;
    border: 2px solid #0062cc;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
}


.register .register-form .form-control {
   /* border-radius: 1rem;*/
}



.register-left1 img{
    margin-top: 0;
    margin-bottom: 0%;
    width: 20%;   

}


.btncolorblanco {
    color: white !important;
    margin: 1px;
}


.container-fluid{
        width: 90% !important;
}



.fa {
    width: 20px;
}

.redondo {
    border-radius: 64px;
}
body {

}



footer {
   left:0px;
   bottom:0px;
   height:30px;
   width:100%;
 
}

.footers a {color:#696969;}
.footers p {color:#696969;}
.footers ul {line-height:30px;}
#social-fb:hover {
     color: #3B5998;
     transition:all .001s;
 }
 #social-tw:hover {
     color: #4099FF;
     transition:all .001s;
 }
 #social-gp:hover {
     color: #d34836;
     transition:all .001s;
 }
 #social-em:hover {
     color: #f39c12;
     transition:all .001s;
 }

 .breadcrumb {
      background-color: #e9ecef00;
 }



#icono {
  width: 20%;

}
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</head>
<body style="background-image: url('../../fondo_zuana.jpg');background-size:cover;background-repeat: no-repeat;background-color:none;background-position: center center;background-attachment: fixed;" >
    <div class="col-1" style="padding-right: 100px">
        <img src="../zuana.jpg" alt="" style="display: block; border-radius: 50%;width: 100px;border-color: orange">
    </div>
<div class="container register" style="background-color: transparent;">
 <div class="row" style="background-color:transparent;">
         <div class="col-md-4 register-left" style="background-color: transparent;">
         </div>
           
           <div class="col-md-4 register-right" style="background-color: transparent;"> 
                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <form method="POST" action="{{route('crearcliente')}}" style="background-color:transparent;">
                      <div class="row register-form">
                      <div class="col-md-12 register-right" style="padding-top: 10px;padding-bottom: 10px"> 
                      <div class="form-group" style="background-color: #032a58;">
                         <h5 style="font-family: Arial;color:white;padding-left: 10px"> Agendar cita </h5>
                      </div>         
                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-prepend">
                           <div class="input-group-text"><i class="fa fa-address-card" aria-hidden="true" style="color: #032a58"></i></div>
                         </div>
                           <input type="text" class="form-control" id="cedula" name="cedula" placeholder="Cédula" required="" value="{{$cedula}}">
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="input-group">
                           <div class="input-group-prepend">
                              <div class="input-group-text"><i class="fa fa-h-square" aria-hidden="true" style="color: #032a58"></i>
                              </div>
                            </div>
                           <input type="text" class="form-control" id="habitacion" name="habitacion" placeholder="Habitación" required="">
                       </div>
                      </div>
                     <div class="form-group">
                          <div class="input-group">
                             <div class="input-group-prepend">
                               <div class="input-group-text"><i class="fa fa-address-book"aria-hidden="true" style="color: #032a58"></i></div>
                             </div>
                               <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre y Apellido" required="" value="{{$nombre}}">
                           </div>
                    </div>
                <button  type="submit" class="redondo btn btn-info" style="background-color: #032a58;font-family: Arial;padding-bottom:10px"><i class="fas fa-save"></i> Guardar</button>
                <a style="font-family: Arial;background-color: orange;padding-bottom:10px" href="" class="redondo btn btn-danger"><i class="fas fa-ban"></i> Cancelar</a>
          </div>
          </div>
        </form>
         </div>
         </div>
          </div>


</div>

</div>
</body>
</html>