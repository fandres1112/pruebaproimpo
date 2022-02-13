<?php 

if (!isset($_SESSION["validar"])) {
  # code...
	echo '<script> window.location = "index.php"; </script>';
	return;  
  
}else{

  if ($_SESSION["validar"] != "ok") {
    # code...
    echo '<script> window.location = "Index.php"; </script>';
    return;
  }
}
//$tabla = controladorformulario::ctrlistarcontactos();
//print_r($tabla);
?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css"/> 
<table id="tablaUsuarios" class="table-striped table-bordered" style="width:100%">
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Correo</th>                                
      <th>Telefono</th>  
      <th>Direccion</th>
      <th>Ciudad</th>
      <th>Usuario</th>
    </tr>
  </thead>
  <tbody>
  </tbody>
</table>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script src="js/jstablaajax.js" type="text/javascript"></script>
