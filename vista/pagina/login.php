<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
<hgroup>
    <h1>Iniciar sesión</h1>
    <h3>Prueba Proimpo</h3>
</hgroup>
<form method="post">
    <div class="group">
        <input type="text" name="loginusuario" id="loginusuario" class="validacampovacio"><span class="highlight"></span><span class="bar"></span>
        <label>Usuario<label id="msjusuario" hidden="true"> - Rellene este campo </label></label>
    </div>
    <div class="group">
        <input type="password" name="loginclave" id="loginclave" class="validacampovacio"><span class="highlight"></span><span class="bar"></span>
        <label>Clave<label id="msjclave" hidden="true"> - Rellene este campo </label></label>
    </div>
    <button type="submit" name="enviar" id="btnenviar" class="button buttonBlue" disabled>Ingresar
        <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
    </button>
    <?php
    $inicio = new controladorformulario();
    $inicio -> ctriniciarsesion();
    ?>
</form>
<footer>
    <p>¿No tienes cuenta? <a href="index.php?pagina=registro" >Registrate AQUÍ</a></p>
    <p>&copy; 2022 - Prueba PROIMPO. Todos los derechos son reservados | Diseñado por FABIAN JARAMILLO</p>
</footer>

<script src="js/jsvalidaciones.js" type="text/javascript"></script>
<script src="js/jslogin.js" type="text/javascript"></script>