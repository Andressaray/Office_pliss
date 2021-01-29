$('#enviar').on('click', function(event) {
  var datos = $("#formulario").serialize();
  
  $.ajax({
    type: "POST",
    url:  "registro.php",
    data: datos,
    
    success:function(respuesta){
      console.log('respuesta', respuesta);
      Swal.fire({
      icon: 'success',
      title: 'Datos registrados',
      text: 'Muy bien!'
      });
    }}).fail(function (error) {
      console.log('error', error);
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Something went wrong!',
        footer: "<a href='registro.php'>aaaa</a>"
        })
    })
  console.log('datos', datos);
  event.preventDefault();
});