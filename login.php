<?php
if(isset($_POST['submit'])):
  session_start();
  $usuario = $_POST['usuario'];
  $password = $_POST['password'];
  try {
    @ $con = new mysqli('localhost', 'root', '', 'guiallerena');
        $error = $con->connect_errno;
      $stmt = $con->prepare("SELECT *  FROM admins WHERE usuario = ?; ");
      $stmt->bind_param("s", $usuario);
      $stmt->execute();
      $stmt->bind_result($id, $nombre_usuario, $password_usuario);
      while($stmt->fetch()){
        if(password_verify($password,$password_usuario )){
          $_SESSION['usuario'] = $usuario;
          $_SESSION['id'] = $id;
          header('Location:http://localhost/Guia/admin_area.php');
        }else{
          $resultado = "Hubo un error";
        }
      }
      $stmt->close();
      $con->close();

  } catch (Exception $e) {
    echo "Error:" . $e->getMessage();

  }
endif;
 ?>

<?php include_once 'includes/template/header.php'; ?>

        <section class="contenido">
          <h2>Iniciar Sesion</h2>

          <form  action="login.php" class="login" method="post">
              <div class="campo">
                <label for="usuario">Usuario:</label>
                <input type="text" name="usuario" id="usuario" placeholder="Tu Usuario">

              </div>
              <div class="campo">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" placeholder="Tu Password">

              </div>
              <div class="campo">
                <input type="submit" name="submit" class="button" value="Iniciar Sesion">

              </div>
          </form>



        </section>
        <?php include_once 'includes/template/footer.php'; ?>
