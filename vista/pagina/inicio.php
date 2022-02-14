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
//llamamos al controlador para poder obtener la lista de Tipo ID
$listartipoid = controladorformulario::ctrlistartipoid();
?>

<link href="css/iniciostyle.css" rel="stylesheet" type="text/css" media="all">
<hgroup>
    <h1>Formulario de contacto</h1>
    <h3>Prueba Proimpo</h3>
</hgroup>
<form method="post" action="index.php?pagina=<?php echo $_GET['pagina'] ?>&usu=<?php echo $_GET['usu'] ?>">
    <div class="columna">
    <div class="group">
        <select name="tipoid" id="tipoid">
            <option value="">Seleccione</option>
            <!-- Corremos el array que nos trae la lista de los tipos de ID -->
            <?php foreach ($listartipoid as $key => $value): ?>
            <option value="<?php echo $value['pk_tipoid'] ?>"><?php echo $value['descripcion'] ?></option>
            <?php endforeach ?>
        </select><span class="highlight"></span><span class="bar"></span>
        <label>Tipo ID</label>
    </div>
    <div class="group">
        <input type="text" name="cedula" class="validanumericos"  required><span class="highlight"></span><span class="bar"></span>
        <label># Identificacion</label>
    </div>
    <div class="group">
        <input type="text" name="nombre" required><span class="highlight"></span><span class="bar"></span>
        <label>Nombre</label>
    </div>
    <div class="group">
        <input type="text" name="apellido" required><span class="highlight"></span><span class="bar"></span>
        <label>Apellido</label>
    </div>
    <div class="group">
        <input type="email" name="correo" id="correo" class="validacorreo" required><span class="highlight"></span><span class="bar"></span>
        <label>Correo <label id="msjcorreo" hidden="true">- Ej. corr@gmail.com</label></label>
    </div>
    <div class="group">
        <input type="text" name="telefono" id="celular" class="validanumericos" required><span class="highlight"></span><span class="bar"></span>
        <label>Celular <label id="msjcelular" hidden="true">- 10 caracteres</label></label>
    </div>
    <div class="group">
        <input type="text" name="direccion" required><span class="highlight"></span><span class="bar"></span>
        <label>Dirección</label>
    </div>
    <div class="group">
        <input type="text" name="ciudad" required><span class="highlight"></span><span class="bar"></span>
        <label>Ciudad</label>
    </div>
    </div>
    <button type="submit" name="guardarcontacto" class="button buttonBlue">Guardar
        <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
    </button>
</form>
<!-- Obtenemos la confirmación de la inserción  -->
<?php $registrarcontacto = controladorformulario::ctrregistrocontacto();
    if ($registrarcontacto == true): ?>
        <center><p><h3>Registro Exitoso! <a href="index.php?pagina=consulta&usu=<?php echo $_GET['usu'] ?>" >Ver lista de contactos</a></h3></p></center>
        <br>
<?php endif ?>



<script src="js/jslogin.js" type="text/javascript"></script>