<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
<hgroup>
    <h1>Registrarse</h1>
    <h3>Prueba Proimpo</h3>
</hgroup>
<form method="post">
    <div class="group">
        <input type="text" name="registrousuario"><span class="highlight"></span><span class="bar"></span>
        <label>Usuario</label>
    </div>
    <div class="group">
        <input type="password" name="registroclave"><span class="highlight"></span><span class="bar"></span>
        <label>Clave</label>
    </div>
    <div class="group">
        <input type="password"><span class="highlight"></span><span class="bar"></span>
        <label>Confirma Clave</label>
    </div>
    <button type="submit" name="registrar" class="button buttonBlue">Registrarse
        <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
    </button>
</form>
<?php 
    $registrarusuario = controladorformulario::ctrregistrousuario();
    if ($registrarusuario == true) {
    # code...
        echo 'Registro Exitoso! <p><a href="index.php" >Iniciar Sesión</a></p>';
    }
?>
<footer>
    <p>¿Ya tienes cuenta registrada?<a href="index.php"> Inicia sesión AQUÍ</a></p>
</footer>

<script src="js/jslogin.js" type="text/javascript"></script>