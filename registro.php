<?php
    include_once 'view/header.php';
?>

<div class="seccion registro">
    <form class="formulario" action="includes/registro.inc.php" method="post">
        
        <h1 class="h3 mb-3 fw-normal display-5">Registro</h1>

        <div class="form-floating w-50 mt-3">
            <input name="nombre" type="text" class="form-control" id="floatingInput">
            <label for="floatingInput">Nombre</label>
        </div>
        <div class="form-floating w-50">
            <input name="correo" type="email" class="form-control" id="floatingInput">
            <label for="floatingInput">Correo</label>
        </div>
        <div class="form-floating w-50">
            <input name="nick" type="text" class="form-control" id="floatingInput">
            <label for="floatingInput">Usuario</label>
        </div>
        <div class="form-floating w-50">
            <input name="pwd" type="password" class="form-control" id="floatingPassword">
            <label for="floatingPassword">Contraseña</label>
        </div>
        <div class="form-floating w-50">
            <input name="pwdrepite" type="password" class="form-control" id="floatingPassword">
            <label for="floatingPassword">Repite Contraseña</label>
        </div>

        <button class="btn btn-lg btn-dark w-50 mt-4" type="submit" name="submit">Registrarse</button>
        
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "inputvacio") {
                echo "<p>Rellena todos los campos</p>";
            } else if ($_GET["error"] == "usuariomal") {
                echo "<p>Elige un nombre de usuario válido</p>";
            } else if ($_GET["error"] == "correomal") {
                echo "<p>Elige un correo válido</p>";
            } else if ($_GET["error"] == "pwdmal") {
                echo "<p>Las contraseñas no coinciden</p>";
            } else if ($_GET["error"] == "statementmal") {
                echo "<p>Algo salió mal</p>";
            } else if ($_GET["error"] == "usuariorepetido") {
                echo "<p>Este nombre de usuario ya existe</p>";
            } else if ($_GET["error"] == "exito") {
                echo "<p>Registro con éxito</p>";
            }  
        }
        ?>
        
        <p class="py-3">Si ya tienes cuenta, <a href="iniciar.php">inicia sesión.</a></p>

    </form>

</div>

<?php
    include_once 'view/footer.php';
?>