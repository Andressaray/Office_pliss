$("#buscar").submit(function(evento){
    enviar();
    evento.preventDefault();
});
function busqueda(){
    var datos="tipo_busqueda="+$(this).val()
    $.ajax({
        type: "post",
        url: "consultar.php",
        success:function(respuesta){
           alert(datos);
            
        } 
        })
    }