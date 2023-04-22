<?php
include_once 'view/header.php';
?>

<section class="py-4 container">
    <h2 class="mt-4 fs-2 text-center">Productos recomendados para ti</h2>
    <hr class="mb-5">

    <?php
    if (isset($_POST["submit"])) {

        $seleccionPiel = $_POST['tipos']; //Eleccion del usuario

        require_once 'model/db.php';
        require_once 'includes/funciones.inc.php';

        eligeQuimicos($conexion, $seleccionPiel);
    } else {
        header("location: perfil.php");
        exit();
    }
    ?>
</section>

<?php
include_once 'view/footer.php';
?>