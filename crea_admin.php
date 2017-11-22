<?php include_once 'includes/template/header.php';
include_once 'includes/funciones/funciones.php';
session_start();
usuario_autentificado();

?>


        <section class="contenido">
          <h2>Crear Administrador</h2>
<?php include_once 'includes/template/admin_nav.php'; ?>

          <form  action="crea_admin.php" class="login" method="post">
              <div class="campo">
                <label for="usuario">Usuario:</label>
                <input type="text" name="usuario" id="usuario" placeholder="Tu Usuario">

              </div>
              <div class="campo">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" placeholder="Tu Password">

              </div>
              <div class="campo">
                <input type="submit" name="submit" class="button" value="Crear">

              </div>
          </form>
          <?php
            if(isset($_POST['submit'])):
                $usuario = $_POST['usuario'];
                $password = $_POST['password'];
                if(strlen($usuario) < 5):
                  echo "El nombre de usuario debe ser mas largo";
                endif;
                $opciones = array(
                  'cost'=>12,
                  'salt'=>mcrypt_create_iv(22, MCRYPT_DEV_URANDOM)
                );
                $hashed_password = password_hash($password,PASSWORD_BCRYPT, $opciones);
                try {
                  @ $con = new mysqli('localhost', 'root', '', 'guiallerena');
                              $error = $con->connect_errno;
                    $stmt = $con->prepare("INSERT INTO admins (usuario, hash_pass) VALUES (?,?)");
                    $stmt->bind_param("ss", $usuario, $hashed_password);
                    $stmt->execute();
                    if($stmt->error):
                      echo "<div class='mensaje error'>";
                      echo "Hubo un error";
                      echo "</div>";
                    else:
                      echo "<div class='mensaje'>";
                      echo "Se inserto corectamente el usuario";
                      echo "</div>";
                    endif;
                    $stmt->close();
                    $con->close();

                } catch (Exception $e) {
                  echo "Error:" . $e->getMessage();

                }

            endif;
           ?>


        </section>
        <?php include_once 'includes/template/footer.php'; ?>
