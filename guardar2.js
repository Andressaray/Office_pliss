$("#formulario").submit(function(evento){
     enviar();
     evento.preventDefault();
 });
 function enviar(){
     var datos=$("#formulario").serialize();
     $.ajax({
         type: "post",
         url: "registro.php",
         data: datos,
         success:function(respuesta){
             let condicion = respuesta.includes('Error');
             if(condicion == condicion){
                 Swal.fire({
                     title: respuesta
                 });
                 phperror(respuesta);
                 return false;
             }
             
         } 
         })
     }
 function phperror(respuesta){
     $("#mensajeError").removeClass("d-none");
     $("#mensajeError").html(respuesta);
 }
