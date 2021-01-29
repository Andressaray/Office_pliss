<?php
header('Content-type: application/xls');
header('Contect-Disposition: attachment; filename=Reporte_Mensual_Domicilios.xls');

$server = "localhost";
$user   = "root";
$pass   = "";  
$bd     = "officepliss";
$link       =   new mysqli($server, $user, $pass, $bd);
$fecha1=$_POST['fecha1'];
$fecha2=$_POST['fecha2'];

$sql="SELECT * FROM domicilios WHERE fecha BETWEEN '$fecha1' AND '$fecha2' ORDER BY  fecha";
$resultado= mysqli_query($link,$sql);
/*
if(isset($_POST['enviar_reporte'])){
    header('Content-type: text/csv; charset=latin1');
    header('Contect-Disposition: attachment; filename="Reporte_Mensual_Domicilios.csv"');

    $salida=fopen('php://output','w');

    fputcsv($salida, array());
    $reporteCsv=$link->query("SELECT * FROM domicilios WHERE fecha BETWEEN '$fecha1' AND '$fecha2' ORDER BY  fecha");
    while($filaR=$reporteCsv->fetch_assoc()){
        fputcsv($salida,array($filaR['codigo_domi'],
                              $filaR['fecha'],
                              $filaR['tipo'],
                              $filaR['nom_env'],
                              $filaR['direc_env'],
                              $filaR['num_env'],
                              $filaR['barrio_env'],
                              $filaR['nom_recibe'],
                              $filaR['direc_recibe'],
                              $filaR['num_recibe'],
                              $filaR['barrio_recibe'],
                              $filaR['descripcion']));
}}*/
?>
<table>
    <tr>
    <th>CODIGO</th>
    <th>TIPO</th>
    <th>FECHA</th>
    <th>HORA</th>
    <th>NOMBRE ENVIA</th>
    <th>DIRECCION ENVIA</th>
    <th>NUMERO ENVIA</th>
    <th>BARRIO ENVIA</th>
    <th>NOMBRE RECIBE</th>
    <th>DIRECCION RECIBE</th>
    <th>NUMERO RECIBE</th>
    <th>BARRIO RECIBE</th>
    <TH>DESCRIPCION</TH>
    </tr>
    <?
        while($row=mysqli_fetch_assoc()){
    ?>
        <tr>
        <td><?echo $row['codigo_domi'];?></td>
        <td><?echo $row['tipo'];?></td>
        <td><?echo $row['fecha'];?></td>
        <td><?echo $row['hora'];?></td>
        <td><?echo $row['nom_envia'];?></td>
        <td><?echo $row['direc_envia'];?></td>
        <td><?echo $row['num_env'];?></td>
        <td><?echo $row['barrio_env'];?></td>
        <td><?echo $row['nom_recibe'];?></td>
        <td><?echo $row['direc_recibe'];?></td>
        <td><?echo $row['num_recibe'];?></td>
        <td><?echo $row['barrio_recibe'];?></td>
        <td><?echo $row['descripcion'];?></td>

        </tr>
    <?
        }
    ?>
</table>