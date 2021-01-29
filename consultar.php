<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/logo2.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mdb.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>BUSCAR DOMCILIOS</title>
    <style type="text/css">
        #th {font-weight: bold;}
    </style>
</head>
<body >
<?php
$server = "localhost";
$user   = "root";
$pass   = "";  
$bd     = "officepliss";
$link       =   new mysqli($server, $user, $pass, $bd);
$fecha=$_POST['fechab'];
$nombre_empresa=$_POST["nombre_empresa"];
if($fecha==""){
    if($nombre_empresa==""){
        echo '<script language="javascript">alert("Debe llenar al menos un campo!!");</script>';
    }else{
        $sql="select * from domicilios where tipo= 'Empresa' and nom_env ='$nombre_empresa'";
    }
}else{
    $sql="select * from domicilios where fecha= '$fecha'";
}


?>
<div class="container">

</div>
<div class="container">

    
    <table border="2" class="table table-hover">
		<thead>
        <tr style="background-color: orange;opacity:0.4;">
        <th colspan="10"><p style="font-weight: bold; font-size: x-large; font-family: algerial; text-align: center;">DOMICILIOS</p></th>
        </tr>
        <tr>
        <th colspan="3"></th>
        <th colspan="3" id="th">DATOS DE QUIEN ENVIA </th>
        <th colspan="3" id="th">DATOS DE QUIEN RECIBE </th>
        <th colspan="1"></th>
        </tr>
		<tr style="background-color:#ADD8E6">
			<th id="th">CODIGO</th>
            <th id="th">FECHA</th>
            <th id="th">TIPO</th>
			<th id="th">NOMBRE</th>
            <th id="th">DIRECION</th>
            <th id="th">NUMERO</th>
			<th id="th">NOMBRE </th>
			<th id="th">DIRECCION</th>
            <th id="th">NUMERO</th>
            <th id="th">DESCRIPCION DOMICILIO</th>
		</tr>
        </thead>
    <?php
    foreach ($link ->query ($sql) as $row){
        echo "<tr>";
        echo "<td id='th'>".$row['codigo_domi']."</td>";
        echo "<td id='th'>".$row['fecha']."</td>";
        echo "<td id='th'>". $row['tipo']."</td>";
        echo "<td id='th'>". $row['nom_env']."</td>";
        echo "<td id='th'>". $row['direc_env']."</td>";
        echo "<td id='th'>". $row['num_env'] ."</td>";
        echo "<td id='th'>". $row['nom_recibe']." </td>";
        echo "<td id='th'>". $row['direc_recibe']." </td>";
        echo "<td id='th'>". $row['num_recibe']." </td>";
        echo "<td id='th'>". $row['descripcion']." </td>";
        echo "</tr>";
    }?><br>
</table>
<a href="index.php"><input class="btn btn-outline-primary" type="button" value="regresar"></a>
<form method="post" class="form" action="reporte.php">
<input type="date" name="fecha1">
<input type="date" name="fecha2">
<input type="submit" name="enviar_reporte" value="imprimir reporte">
</form>
</div>
</body>
</html>