<?php
    include_once '../view/header.php';
?>

<section class="py-4 container">
    <hr class="mb-5">

    <?php
        if (isset($_POST["submit"])) {

            $numEntrada = $_POST['nombre']; //Eleccion del usuario
            echo($numEntrada);



            require_once 'db.inc.php';
            require_once 'funciones.inc.php';
            
            eligeBlog($conexion, $numEntrada);
            
        } else {
            header("location: ../index.php");
            exit();
        }
    ?>
</section>

<?php
    include_once '../view/footer.php';
?>