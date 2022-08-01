<!DOCTYPE html>
<html>
<head>
  <title>Agenda tu cita</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<style type="text/css">

td .btn {
    width: 100%;
}

.registerinicio{
    /*background: -webkit-linear-gradient(left, #3931af, #00c6ff);
    background: -webkit-linear-gradient(left, #020110, #00c6ff);
    background: -webkit-linear-gradient(left,#293437, #00c6ff);*/
    background: -webkit-linear-gradient(left,#3f7483, #0dc9ff);
    margin-top: 3%;
    /*padding: 3%; */
}

.register{
    /*background: -webkit-linear-gradient(left, #3931af, #00c6ff);
    background: -webkit-linear-gradient(left, #020110, #00c6ff);
    background: -webkit-linear-gradient(left,#293437, #00c6ff);*/
    background: -webkit-linear-gradient(left,#3f7483, #0dc9ff);
    /*margin-top: 3%;*/
    padding: 2%;
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
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
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
    margin-top: 10%;
}
.btnRegister{
    float: right;
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #0062cc;
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
background-color: white;
font-family: 'Underdog';
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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>


<body>
  <form method="POST" action="{{route('crearagenda')}}">
<div class="container register">
<div class="row">
<div class="col-md-2 register-left">
                        <img src="../zuana.jpg" alt="" style="display: block; border-radius: 50%;">
                        <h3>Bienvenid@</h3>
                        <p>Por favor llenar los datos correctamente</p>
                        
</div>

<div class="col-md-10 register-right">
 
   <div class="col-md-8 register-right" style="padding-left: 250px;padding-top: 20px;padding-bottom: 20px"> 
     
      <h5>Fecha</h5>
      
      <div class="form-group" style="padding-right: 130px">
      <div class="input-group-prepend">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
          </div>
      <input type="date" name="fecha" required="" class="form-control" min="{{$hoy}}">
      </div>
      </div>
      <h5>Torre</h5>
     
      <div class="form-group "style="padding-right: 110px"> 
       <div class="input-group-prepend">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
          </div>
     <select class="form-control" name="torre" >
      <option value="1">Torre 1</option>
      <option value="2">Torre 2</option>
    
    </select>
    </div>
    </div>
<h5>Duracion en minutos</h5>
<div class="form-group" style="padding-right: 110px">
  <div class="input-group-prepend">
   <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
          </div>
    <input class="form-control" type="number" name="tiempo" min="5" max="30" required="" onkeypress="return (event.charCode >= 0 && event.charCode <= 1)" >
  </div>
</div>
<h5>Recepcionistas En turno</h5>
<div class="form-group"  style="padding-right: 110px">
  <div class="input-group-prepend">
    <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
          </div>
    <input class="form-control" type="number" name="cantidad" min="1" max="10" required="" 
    onkeypress="return (event.charCode >= 0 && event.charCode <= 1)" >
  </div>
</div>

<div class="row" >
  
  <div class="col-md-auto">
<h5>Hora inicio</h5>
    <input type="time" name="hora_inicio" required="">
  </div>
  <div class="col-md-auto">
    <h5>Hora fin</h5>
    <input type="time" name="hora_fin" required="">
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-auto" style="padding-left: 10px">
    <h5 style="text-align: center">Pre Checkout</h5>
    <input type="radio" name="precheckout" checked="" value="1">
  </div>
  <div class="col-md-auto">
    <h5 style="text-align: center">Checkout</h5>
    <input type="radio" name="precheckout" value="0">
  </div>
</div>
<br>
 <button  type="submit" class="redondo btn btn-info"><i class="fas fa-save"></i> Guardar</button>
<a href="{{route('listarcitas')}}" class="redondo btn btn-danger"><i class="fas fa-ban"></i> Cancelar</a>
 
</div>

</div>
</div>
</div>
</form>
</body>
</html>