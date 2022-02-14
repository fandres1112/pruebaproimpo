<?php 
//Validar que la sesión sea correcta
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
?>
<link href="//cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/consulta.css" rel="stylesheet" type="text/css" media="all">
<hgroup>
    <h1>Consulta de contactos</h1>
    <h3>Prueba Proimpo</h3>
</hgroup>
<div>
<table id="datosusuarios" class="table-striped table-bordered" style="width:100%">
  <thead>
    <tr>
      <th>Tipo ID</th>
      <th># Identificacion</th>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Correo</th>                                
      <th>Telefono</th>  
      <th>Direccion</th>
      <th>Ciudad</th>
      <th>Usuario</th>
      <th>Fecha</th>
    </tr>
  </thead>
  <tbody>
  </tbody>
</table>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<!-- Para la consulta de los datos de formulario lo llamamos mediante ajax, con la ayuda del Plugin DataTables -->
<script type="text/javascript" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script src="js/jstablaajax.js" type="text/javascript"></script>
