<?php
    include_once 'view/header.php';
?>

<section class="mt-5 py-5 text-center container perfil rounded">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">

        <?php
            if (isset($_SESSION["nick"])) { //sesion iniciada
                echo "<h1>¡Hola, " . $_SESSION["nick"] . "!</h1>";
            }
        ?>

        <p class="lead text-muted fw-normal">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
            Magni quisquam distinctio facilis ad facere similique 
            iusto fuga eveniet ratione iure maxime labore adipisci, 
            nemo commodi libero odit ea voluptas consequuntur?
        </p>

        
        <form action="resultados.php" method="post" class="py-5">
            <h3>Escoge tu tipo de piel:</h3>
            
            <select class="py-2 px-5 form-select" name="tipos" id="tipos">
                <option selected>Elige aquí</option>
                <option value="1">Normal</option>
                <option value="2">Grasa</option>
                <option value="3">Seca</option>
                <option value="4">Sensible</option>
                <option value="5">Mixta</option>
                <option value="6">Envejecida</option>
            </select>

            <input class="py-2 px-5 mt-2 btn btn-outline-dark desplegable" type="submit" value="Seleccionar" name="submit">
        </form>
        <span class="fw-bold">Si aún tienes dudas, descubre <a href="blog.php">aquí</a></span>
      </div>
    </div>
  </section>

  

<?php
    include_once 'view/footer.php';
?>