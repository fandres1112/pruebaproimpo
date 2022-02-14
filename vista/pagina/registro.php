<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
<hgroup>
    <h1>Registrarse</h1>
    <h3>Prueba Proimpo</h3>
</hgroup>
<form method="post">
    <div class="group">
        <input type="text" name="registrousuario" id="registrousuario" class="validarclavelogin"><span class="highlight"></span><span class="bar"></span>
        <label>Usuario<label id="msjusuario" hidden="true"> - Rellene este campo </label></label>
    </div>
    <div class="group">
        <input type="password" name="registroclave" class="validaclavelogin" id="clave1"><span class="highlight"></span><span class="bar"></span>
        <label>Clave</label>
    </div>
    <div class="group">
        <input type="password" class="validaclavelogin" id="clave2"><span class="highlight"></span><span class="bar"></span>
        <label>Confirma Clave</label>
    </div>
    <button type="submit" name="registrar" id="btnregistro" class="button buttonBlue" disabled>Registrarse
        <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
    </button>
    <div id="msjclave" hidden="true" class="text-danger">
        Error! Las contraseñas deben de coincidir.
    </div>
</form>
<!-- Obtenemos la confirmación de la inserción del registro -->
<?php $registrarusuario = controladorformulario::ctrregistrousuario();
    if ($registrarusuario == true): ?>
        <center><p><h3>¡Registro Exitoso!</h3></p></center>
        <br>
<?php endif ?>
<footer>
    <p>¿Ya tienes cuenta registrada?<a href="index.php"> Inicia sesión AQUÍ</a></p>
</footer>
<script src="js/jslogin.js" type="text/javascript"></script>