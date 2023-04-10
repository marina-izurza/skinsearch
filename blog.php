<?php
    include_once 'view/header.php';
?>

<section class="blog">
    <div class="position-relative overflow-hidden p-3 p-md-5 text-center">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 fw-normal">¿Qué tipo de piel tienes?</h1>
            <p class="lead fw-normal">And an even wittier subheading to boot. Jumpstart your marketing efforts with this example based on Apple's marketing pages.</p>
            <?php
                            if (!isset($_SESSION["nick"])) {
                              echo "<a class='btn btn-outline-dark' href='registro.php'>Crea tu perfil</a>";

                            } else {
                                
                            }
            ?>
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>

    <!-- aquí abajo van las entradas -->


</section>


<?php
    include_once 'view/footer.php';
?>