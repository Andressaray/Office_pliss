<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="img/logo2.jpg">
    <title> OFFICE PLISS S.A.S</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mdb.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="js/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@3/dark.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9/dist/sweetalert2.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    </head>
  <body style="background: url(img/fondooffice.png) no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
  <div class="container" >
    <div style="position: absolute; top: 5%; left: 10%; right: 5%; bottom: 0; margin: auto"><img src="img/LOGO2.png" style="width:93%; height:48%;"></div>
    </divd>
    <div class="container" >
        <div  style="position: absolute; top: 60%; left: 30%; right: 50%; margin: auto;">
          <button type="button" class="btn btn-rounded" data-toggle="modal" style="background-color: #1A5276; color:white; width:80%; height:15%;" data-target="#exampleModal">INGRESAR DOMICILIO </button>
        </div>
    </divd>
      <div class="container" >
      <div  style="position: absolute; top: 60%; left: 50%; right: 30%; bottom: 0; margin: auto;">
      <button  type="display: block; margin: 0 auto;" type="button" style="background-color: #1A5276; color:white; width:80%; height:15%;" class="btn btn-rounded" data-toggle="modal" data-target=".bd-example-modal-lg">BUSCAR DOMICILIO</button>
      </div>
      </div>
      
    
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-body">
        <h1>BUSCAR DOMICILIO</h1>
          <form  id="buscar" action="consultar.php" method="POST">
            <label> FECHA DEL DOMICILIO</label>
            <input type="date" name="fechab"><br>
            <label >NOMBRE EMPRESA: </label>
            <input type="text" name="nombre_empresa">
            <div class="d-none" id="busqueda"></div>
          <input type="submit" value="Buscar">
          </form>
          </div>  
        </div>
      </div>
    </div>

<div  class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>FORMULARIO REGISTRO PRODUCTOS</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="alert alert-danger d-none" id="mensajeError" ></div>
      <FORM id="formulario">
        <label><b>NOMBRE EMPRESA</b></label>
        <input type="text" id="NomEmp"><br>
        <label><b>FECHA</b></label>
        <input type="date" name="fechaDom"> <br> 
        <form name="formCal" action="" method="get">
        <label><b>HORA INICIO</b></label><br>
        <label>Hora</label>
        <input type="number" id="horain"style="width : 100px; heigth : 10px">
        <label>Minutos</label>
        <input type="number" id="minin"style="width : 100px; heigth : 10px" ><br>
        <label><b>HORA FIN</b></label><br>
        <label>Hora</label>
        <input type="number" id="horafin"style="width : 100px; heigth : 10px">
        <label>Minutos</label>
        <input type="number" id="minfin" style="width : 100px; heigth : 10px"><br>
        
        <label><b>VALOR BASE DOMICILIO:</b></label>
        <input type="number" id="valorBD">
        <label><b>Valor Total:</b></label>
        <input type="number" id="valorTotal">
        <input type="button" value="Calcular Valor" onclick="calcularValor()"><br>
        </form>
        <script type="text/javascript">
          function calcularValor(){
            var DiaMin=1440;
            var hInMin=0;
            var hFinMin=0;
            var recargo=hFinMin-hOnMin;
            var valorTotal= 
          }
        </script>
        <label><b>DESCRIPCION</b></label><BR>
    <div class="col-md-8">
        <textarea name="descripcion" id="" cols="30" rows="10"></textarea><BR>
    </div>
    </div>
    <button type="submit" id="enviar" class="btn btn-outline-primary" >REGISTRAR</button>
    <a href="index.php"><input class="btn btn-outline-primary" type="button" value="regresar"></a>
    </FORM>
    </div>
  </div>
</div>
<script src="guardar2.js"></script>
</body>


</html>
