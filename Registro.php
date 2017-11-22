    <?php
        include ('includes/template/header.php');
        include_once 'includes/funciones/funciones.php';
session_start();
usuario_autentificado();
        ?>
       
<article>
    <div class="contenido">
         <?php include_once 'includes/template/admin_nav.php'; ?>
        <br>
        <h1>Registro</h1>

        <?php

        include ('formulario.php');
        ?>
    </div>
</article>

        <?php
        include ('includes/template/sidebar.php');
        ?>

          <?php
        include ('includes/template/footer.php');
        ?>
    </body>
</html>
