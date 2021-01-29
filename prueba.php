<?php
    
   $totalSegundos = abs("1:30"=getTimestamp() - "2:00"=getTimestamp());
   $totalMinutos=$totalSegundos/60;
   
   echo "Total segundos: $totalSegundos";
   echo PHP_EOL;
   
   echo "Total minutos: $totalMinutos";
   echo PHP_EOL;
   
   echo "Representación Horas,Minutos: ".gmdate("H:i", $totalSegundos);
?>
