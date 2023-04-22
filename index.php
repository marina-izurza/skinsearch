<?php
include_once 'view/header.php';
?>

<main>

    <!-- cabecera -->
    <div class="row mb-2 cabecera">
        <div class="p-4 p-md-5 mb-4">
            <h1 class="display-5 text-center text-uppercase">TU BIBLIOTECA DE SKINCARE</h1>
            <p class="lead my-5 text-center fw-normal">
                Encuentra en nuestra web la solución a esas imperfecciones de tu rostro para
                poder presumir de él y mantener su buen aspecto.<br>
                ¡Aquí podrás aprender todo lo necesario para convertirte en un experto en skincare!
            </p>
            <p class="lead mb-0 text-center">
                <a style="text-decoration: none; color: #2A292E;" href="#blog">>¡Descubre!<
            </p>
        </div>
    </div>

    <!-- diapositivas -->
    <div class="container px-4 py-5" id="custom-cards">
        <h2 class="pb-2 border-bottom">Principales objetivos de SkinSearch</h2>

        <div class="slider">
            <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">

                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('img/petals.jpg'); background-size: cover;">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">De la mano de "The Ordinary"</h3>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('img/cat.jpg'); background-size: cover;">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Conoce los mejores secretos</h3>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('img/pads.jpg'); background-size: cover;">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Productos personalizados</h3>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>


    <!-- conjunto de entradas -->
    <div id="blog">
        <div class="cuerpo-1">
            <div class="container py-4">
                <div class="p-5 mb-4 bg-light rounded-3">
                    <div class="container-fluid py-5">
                        <h1 class="fw-bold">¿Qué tipo de piel tienes?</h1>
                        <p class="col-md-8 fs-4">Aquí te enseñamos a conocer tu piel enseñándote una serie de características con la que te sentirás identificado.</p>
                        <form action="blog1.php" method="post">
                            <input class="btn btn-outline-dark" type="submit" value="Leer más...">
                        </form>
                    </div>
                </div>

                <div class="row align-items-md-stretch">
                    <div class="col-md-6">
                        <div class="h-100 p-5 text-bg-light rounded-3">
                            <h2>Utensilios domésticos para cuidar tu piel en casa</h2>
                            <p>Descubre algunas herramientas que te puedes ayudar a acelerar tus resultado</p>
                            <form action="blog2.php" method="post">
                                <input class="btn btn-outline-dark" type="submit" value="Leer más...">
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="h-100 p-5 bg-light border rounded-3">
                            <h2>BHA vs AHA</h2>
                            <p>Aprende a distinguir entre estos dos tipos de exfoliantes y mejora la textura de tu piel.</p>
                            <form action="blog3.php" method="post">
                                <input class="btn btn-outline-dark" type="submit" value="Leer más...">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>



<?php
include_once 'view/footer.php';
?>