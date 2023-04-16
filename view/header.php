<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkinSearch, descubre tu piel</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gloock&family=Montserrat:wght@300;400&display=swap" rel="stylesheet">

    <!-- Estilos y Bootstrap -->
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="icon" type="img/png" href="img/logo.png">
    
</head>

<body>

    <div class="container-fluid fondo-nav">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <span class="navbar-brand mb-0">SkinSearch</span>
                
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Home</a>
                        </li>
                    </ul>


                    <?php
                            if (isset($_SESSION["nick"])) {
                                echo "<form class='d-flex'>";
                                echo "<h3 class='fst-italic fw-bold mx-4'>". $_SESSION["nick"]."</h3>";
                                echo "<a class='btn btn-outline-dark mx-3' href='perfil.php'>Mi Perfil</a>";
                                echo "<a class='btn btn-outline-dark' href='includes/cerrar.inc.php'>Cerrar Sesión</a>";
                                echo "</form>";

                            } else {
                                echo "<form class='d-flex'>";
                                echo "<a class='btn btn-outline-dark mx-3' href='iniciar.php'>Iniciar Sesión</a>";
                                echo "<a class='btn btn-outline-dark active' href='registro.php'>Regístrate</a>";
                                echo "</form>";

                            }
                        ?>

                    </div>
                </div>
            </div>
        </nav>
    </div>

    <div class="contenedor">