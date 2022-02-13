$(document).ready(function() {
    $('#datosusuarios').DataTable( {
      "ajax":{
          "url": "modelo/consultatablaajax.php",
          "dataSrc":""
      },
      "columns":[
          {"data": "nombre"},
          {"data": "apellido"},
          {"data": "correo"},
          {"data": "telefono"},
          {"data": "direccion"},
          {"data": "ciudad"},
          {"data": "usuario_creacion"}
      ]  
    });
});