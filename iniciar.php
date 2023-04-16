<?php
    include_once 'view/header.php';
?>

    <div class="inicio">
        <form class="formulario" action="includes/iniciar.inc.php" method="post">
            <h1 class="h3 mb-3 fw-normal display-5">Inciar Sesión</h1>

            <div class="form-floating w-50 mt-3">
                <input name="nick" type="text" class="form-control" id="floatingInput" placeholder=" ">
                <label for="floatingInput">Usuario/Correo</label>
            </div>
            <div class="form-floating w-50">
                <input name="pwd" type="password" class="form-control" id="floatingPassword" placeholder=" ">
                <label for="floatingPassword">Contraseña</label>
            </div>
            
            <button class="btn btn-lg btn-dark w-50 mt-4" type="submit" name="submit">Iniciar Sesión</button>

            <?php
            if (isset($_GET["error"])) {

                if ($_GET["error"] == "inputvacio") {
                    echo "<p>¡Rellena todos los campos!</p>";
                    
                } else if ($_GET["error"] == "iniciomal") {
                    echo "<p>¡Inicio de sesión correcto!</p>";
                }  
            }
            ?>

        </form>
    </div>

<?php
    include_once 'view/footer.php';
?>