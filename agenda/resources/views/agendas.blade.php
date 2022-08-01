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
    padding: 3%;
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- DATATABLES -->
    <!--  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"> -->
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <style>
        th,td {
            padding: 0.4rem !important;
        }
        body>div {
            box-shadow: 10px 10px 8px #888888;
            border: 2px solid black;
            border-radius: 10px;
        }
    </style>
    
</head>


<body style="background-color: white;padding-left: 30px;padding-right: 30px">

   <script type="text/javascript">
  function actualizar(){location.reload(true);}
  setInterval("actualizar()",600000);
</script>

 <div class="row" >
  <div class="col-6" style="padding-left:0px;padding-right: 0px">
  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="border-radius: 10px">
  <a class="navbar-brand" href="{{route('listarcitas')}}">Citas</a>
  <a class="navbar-brand" href="{{route('mostraragendas')}}">Agendas</a>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="{{route('cita')}}">Crear Cita <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link active" href="{{route('vistacrearagenda')}}">Crear Agendas <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="{{route('eliminaragenda')}}">Eliminar Agendas</a>
      @if(Auth::user()->role == 'admin')
      <a class="nav-item nav-link" href="{{route('registrar')}}">Crear Usuario</a>
      @endif
      
    </div>
  </div>
</nav>
  </div>
  <div class="col-4">
    
  </div>
  <div class="col-1">
      <h6 style="color: #B7C3CF;padding-top: 10px">{{Auth::user()->name}}</h6>
    </div>
  <div class="col-1" style="padding-left:0px;padding-right: 0px">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="border-radius: 10px">
   <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Salir') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
</nav>

  </div>
   
 </div> 
  
    <div class="row" style="background-color:  #032a58;padding-bottom: 10px;padding-top: 10px;">
        
<div class="col-2" style="padding-right: 100px">
                        <img src="../zuana.jpg" alt="" style="display: block; border-radius: 50%;width: 100px;border-color: orange">
                        
                    </div>
<div class="col-3">

    </div>
    <div class="col-2" style="padding-left:10px;">
          <form style="padding-left: 10px" method="GET" action="{{route('mostraragendas')}}">
            <h3 style="text-align: center;color: white">Agendas</h3>
          <input type="date" class="form-control" id="fecha" name="fecha">
        <button class="form-control" style="background-color: white;color: black" type="submit" class="redondo btn btn-info"><i class="fas fa-save"></i>Filtar</button>
    </form>
    </div>
    <div class="col-3">
    </div>
    
    
</div>
<div class="row">
<div class="col-6" style="padding-top: 20px">
<h6>{{$fechavalor}}</h6>
<h3 style="color:orange" align="center"> Torre 1 </h3>
<table id="tablax" class="table table-striped table-bordered" style="width:100%" >                                              <thead >
                                                <tr>
                                                  <th  scope="col" >Inicia</th>
                                                  <th  scope="col" >Termina</th>
                                                  <th scope="col" > Tipo</th>
                                                  <th  scope="col" >Cantidad</th>
                                                  <th  scope="col" >usados</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                               @foreach ($torre1 as $torre)
                                                <tr>
                                                  <th> {{$torre->hora_inicio}}</th>
                                                  <th> {{$torre->hora_fin}}</th>
                                                  @if($torre->precheckout === 1)
                                                  <th> 
                                                  Precheckout
                                                  </th>
                                                  @else
                                                  <th> 
                                                  Checkout
                                                  </th>
                                                  @endif
                                                  <th> {{$torre->cantidad}}</th>
                                                  <th> {{$torre->usados}}</th>
                                                </tr>
                                                @endforeach
                                                 
                                              
                                              </tbody>
</table>

</div>
<div class="col-6" style="padding-top: 20px" >
<h6>{{$fechavalor}}</h6>
<h3 style="color:blue" align="center">Torre 2</h3>
<table id="tablax1" class="table table-striped table-bordered" style="width:100%" >
                                              <thead>
                                                <tr>
                                                  
                                                  <th scope="col">Inicia</th>
                                                  <th scope="col">Termina</th>
                                                  <th scope="col">Tipo</th>
                                                  <th scope="col">cantidad </th>
                                                  <th scope="col">usados </th>
                                                  
                                                 
                                               </tr>
                                              </thead>
                                              <tbody>
                                                @foreach ($torre2 as $torre)
                                                      
                                                <tr>
                                                  <th> {{$torre->hora_inicio}}</th>
                                                  <th> {{$torre->hora_fin}}</th>
                                                  @if($torre->precheckout == 1)
                                                  <th> 
                                                  Precheckout
                                                  </th>
                                                  @else
                                                  <th> 
                                                  Checkout
                                                  </th>
                                                  @endif

                                                  <th> {{$torre->cantidad}}</th>
                                                  <th> {{$torre->usados}}</th>
                                                </tr>
                                                @endforeach
        
                                              
                                              </tbody>
</table>

<script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous">
        </script>
    <!-- DATATABLES -->
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js">
    </script>
    <!-- BOOTSTRAP -->
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js">
    </script>
    <script>
        $(document).ready(function () {
            $('#tablax').DataTable({
                language: {
                    processing: "Tratamiento en curso...",
                    search: "Buscar&nbsp;:",
                    lengthMenu: "Agrupar de _MENU_ items",
                    info: "Mostrando del item _START_ al _END_ de un total de _TOTAL_ items",
                    infoEmpty: "No existen datos.",
                    infoFiltered: "(filtrado de _MAX_ elementos en total)",
                    infoPostFix: "",
                    loadingRecords: "Cargando...",
                    zeroRecords: "No se encontraron datos con tu busqueda",
                    emptyTable: "No hay datos disponibles en la tabla.",
                    paginate: {
                        first: "Primero",
                        previous: "Anterior",
                        next: "Siguiente",
                        last: "Ultimo"
                    },
                    aria: {
                        sortAscending: ": active para ordenar la columna en orden ascendente",
                        sortDescending: ": active para ordenar la columna en orden descendente"
                    }
                },
                scrollY: 400,
                lengthMenu: [ [10, 50, -1], [10, 50, "Todo"] ],
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            $('#tablax1').DataTable({
                language: {
                    processing: "Tratamiento en curso...",
                    search: "Buscar&nbsp;:",
                    lengthMenu: "Agrupar de _MENU_ items",
                    info: "Mostrando del item _START_ al _END_ de un total de _TOTAL_ items",
                    infoEmpty: "No existen datos.",
                    infoFiltered: "(filtrado de _MAX_ elementos en total)",
                    infoPostFix: "",
                    loadingRecords: "Cargando...",
                    zeroRecords: "No se encontraron datos con tu busqueda",
                    emptyTable: "No hay datos disponibles en la tabla.",
                    paginate: {
                        first: "Primero",
                        previous: "Anterior",
                        next: "Siguiente",
                        last: "Ultimo"
                    },
                    aria: {
                        sortAscending: ": active para ordenar la columna en orden ascendente",
                        sortDescending: ": active para ordenar la columna en orden descendente"
                    }
                },
                scrollY: 400,
                lengthMenu: [ [10, 50, -1], [10, 50, "Todo"] ],
            });
        });
    </script>
</div>
</div>

</body>
</html>