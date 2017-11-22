        <?php
        include ('includes/template/header.php');
        ?>
<article>
    <div class="contenido">
        <h1>Directorio</h1>
      <?php
@ $con = new mysqli('mysql.hostinger.es', 'u233680029_zafra', '*carmen15*', 'u233680029_zafra');
            $error = $con->connect_errno;
            if ($error == null) {
                $sql = "Select  Nombre FROM directorio order by nombre";
                $resultado=$con->query($sql);
                if ($resultado){
                    $row=$resultado->fetch_assoc();
                    while ($row){
                        echo"<nav class='directorio'>";
                        echo  "<ul>";
                        echo "<li><a href='sub_directorio.php?id=".utf8_encode($row['Nombre'])."'>".utf8_encode($row['Nombre'])."</a></li>";
                              $row=$resultado->fetch_assoc();
                        echo "<li><a href='sub_directorio.php?id=".utf8_encode($row['Nombre'])."'>".utf8_encode($row['Nombre'])."</a></li>";
                              $row=$resultado->fetch_assoc();
                        echo "<li><a href='sub_directorio.php?id=".utf8_encode($row['Nombre'])."'>".utf8_encode($row['Nombre'])."</a></li>";
                        echo" </ul>";
                        $row=$resultado->fetch_assoc();
                    }
                    echo"</nav>";
                }else{
                    echo "No se ha encontrado ninguna tienda";
                }
            }
        ?>

    </div>

    <?php
    $categoria=$row['Categoria'];
     if($error == null && isset($categoria)){
            $consulta="SELECT * FROM empresas WHERE Categoria='$categoria'";
            //echo "$consulta";
            $resultado = $con->query($consulta);
                while ($row = $resultado->fetch_assoc()){
                  echo '<div class="empresa">';
                  echo '<div class="logos">';
                  echo'<img id="logo" src="img/'.$row["logo"].'"whith="15%" height="15%">';
                  echo '</div>';
                  echo "<h1>".$row['Nombre']."</h1>";
                  echo "<p>".$row['Descripcion']."</p>" ;
                  echo "<h3>Telefono:</h3><p>".$row['Telefono']."</p>";
                  //echo "<h3>Categotias:</h3><p>".$row['Categoria']."</p>";
                  echo "<h3>E-Mail:</h3><p>".$row['Mail']."</p>";
                  echo "<h3>Horario:</h3><p>".$row['horario'] ."</p>";
                    echo '<div>';
                }
     }
     ?>
</article>

        <?php
        include ('includes/template/sidebar.php');
        ?>

          <?php
        include ('includes/template/footer.php');
        ?>
    </body>
</html>
