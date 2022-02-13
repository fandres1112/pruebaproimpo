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
?>

<link href="css/iniciostyle.css" rel="stylesheet" type="text/css" media="all">
<hgroup>
    <h1>Formulario de contacto</h1>
    <h3>Prueba Proimpo</h3>
</hgroup>
<form method="post" action="index.php?pagina=<?php echo $_GET['pagina'] ?>&usu=<?php echo $_GET['usu'] ?>">
    <div class="group">
        <input type="text" name="nombre" required><span class="highlight"></span><span class="bar"></span>
        <label>Nombre</label>
    </div>
    <div class="group">
        <input type="text" name="apellido" required><span class="highlight"></span><span class="bar"></span>
        <label>Apellido</label>
    </div>
    <div class="group">
        <input type="email" name="email" required><span class="highlight"></span><span class="bar"></span>
        <label>E-Mail</label>
    </div>
    <div class="group">
        <input type="text" name="telefono" required><span class="highlight"></span><span class="bar"></span>
        <label>Telefono #</label>
    </div>
    <div class="group">
        <input type="text" name="direccion" required><span class="highlight"></span><span class="bar"></span>
        <label>Dirección</label>
    </div>
    <div class="group">
        <input type="text" name="ciudad" required><span class="highlight"></span><span class="bar"></span>
        <label>Ciudad</label>
    </div>
    <button type="submit" name="guardarcontacto" class="button buttonBlue">Registrase
        <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
    </button>
</form>

<script src="js/jslogin.js" type="text/javascript"></script>