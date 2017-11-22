<?php
include_once 'includes/funciones/funciones.php';
session_start();
usuario_autentificado();

 ?>

<?php include_once 'includes/template/header.php'; ?>

        <section class="contenido">
          <h2>Panel de Administracion</h2>
          <p>Bienvenido <?php echo $_SESSION['usuario'];?></p>

        <?php include_once 'includes/template/admin_nav.php'; ?>


        </section>
        <?php include_once 'includes/template/footer.php'; ?>
