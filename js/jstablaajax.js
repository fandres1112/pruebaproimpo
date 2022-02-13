//Funcion que se crea para poder pasar los datos a la vista del cliente
$(document).ready(function() {
    $('#datosusuarios').DataTable( {
        "language": {
            "lengthMenu": "Mostrar _MENU_ Registros por página",
            "zeroRecords": "No se encontraron registros",
            "info": "Mostrando la página _PAGE_ de _PAGES_",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "(Filtrado de _MAX_ registros totales)",
            "search": "Buscar",
            "paginate": {
                "next": "Siguiente",
                "previous": "Atras"
            }
        },
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
            {"data": "usuario"},
            {"data": "fecha"}
        ]
    });
});