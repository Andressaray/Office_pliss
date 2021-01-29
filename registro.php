<?php
$server = "localhost";
$user   = "root";
$pass   = "";  
$bd     = "officepliss";
$link       =   new mysqli($server, $user, $pass, $bd);
foreach ($_POST as $key => $value) {
    if(empty($value)){
        echo "Error el campo $key esta vacio";
        return;
    }
}
$tipo=$_POST["tipo"];
$fecha=$_POST["fecha"];
$hora=$_POST["hora"];
$nom_env=$_POST["nombre_envia"];
$direc_env=$_POST["direccion_envia"];
$num_env=$_POST["numero_envia"];
$barrio_env=$_POST["barrio_envia"];
$nom_recibe=$_POST["nombre_recibe"];
$direc_recibe=$_POST["direccion_recibe"];
$num_recibe=$_POST["numero_recibe"];
$barrio_recibe=$_POST["barrio_recibe"];
$descripcion=$_POST["descripcion"];
$error='';
$permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-_# ";
$permitidosnombre = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ";
for ($i=0; $i<strlen($nom_env); $i++){
    if (strpos($permitidosnombre, substr($nom_env,$i,1))===false){
        echo "El campo nombre de quien envia contiene caracteres raros<br>";
       return false;
    }
 }
 for ($i=0; $i<strlen($nom_recibe); $i++){
    if (strpos($permitidosnombre, substr($nom_recibe,$i,1))===false){
        echo "El campo nombre de quien recibe contiene caracteres raros<br>";
       return false;
    }
 }
if(strlen($num_env)>10){
$error.="Numero supera los 10 caracteres<br>";
}  
if(strlen($num_recibe)>10){
    $error.="Numero supera los 10 caracteres<br>";
    }  
 for ($i=0; $i<strlen($barrio_recibe); $i++){
    if (strpos($permitidos, substr($barrio_recibe,$i,1))===false){
        echo "El campo nombre de quien recibe contiene caracteres raros<br>";
       return false;
    }
 }
 for ($i=0; $i<strlen($barrio_env); $i++){
    if (strpos($permitidos, substr($barrio_env,$i,1))===false){
        echo "El campo nombre de quien recibe contiene caracteres raros<br>";
       return false;
    }
 }
 
if (!is_numeric($num_env)) {
    $error.="El campo precio contiene caracteres no numericos<br>";      
}
if (!is_numeric($num_recibe)) {
    $error.="El campo precio contiene caracteres no numericos<br>";      
}

   for ($i=0; $i<strlen($direc_recibe); $i++){
      if (strpos($permitidos, substr($direc_recibe,$i,1))===false){
         echo "El campo direccion de quien recibe contiene caracteres raros<br>";
         return false;
      }
   }
   for ($i=0; $i<strlen($direc_env); $i++){
    if (strpos($permitidos, substr($direc_env,$i,1))===false){
       echo "El campo direccion de quien envia contiene caracteres raros<br>";
       return false;
    }
 }
if(ctype_alpha($descripcion)){
         $descripcion=filter_var($descripcion,FILTER_SANITIZE_STRING);
}
if(strlen($descripcion)>100){
    $error.="La descripcion supera los 100 caracteres<br>";
}

//
/*$destinatario="edixon.penuela@uniminuto.edu.co";
$asunto="registro producto";
$mensajecorreo="Codigo producto: ".$codigo."\n Nombre producto: ".$nombre."\n Precio producto: ".$precio."\n fecha: ".$fecha."\n tipo exportacion: ".$tipo."\n Pais: ".$pais."\n Obsebacion: ".$mensaje;
*/
$sql="INSERT INTO domicilios (tipo,fecha,hora,nom_env,direc_env,num_env,barrio_env,nom_recibe,direc_recibe,num_recibe,barrio_recibe,descripcion) 
VALUES ('$tipo','$fecha','$hora','$nom_env','$direc_env','$num_env','$barrio_env','$nom_recibe','$direc_recibe','$num_recibe','$barrio_recibe','$descripcion')";if($error==''){
    mysqli_query($link,$sql);
    /*mail($destinatario,$asunto,$mensajecorreo);*/
    echo "correcto";
  } else{
  echo $error; 
  }
 unset($error);
?>