
        <?php
        include ('includes/template/header.php');
        ?>

<article>
    <div class="contenido">
        <h1>Busqueda Empresas</h1>
        <?php
        @ $con = new mysqli('localhost', 'root', '', 'guiallerena');
            $error = $con->connect_errno;
             $buscar= $_POST['buscador'];
            if(empty($buscar) && (!isset($_POST['buscar']))){
                 echo "No se ha ingresado ninguna palabra";
             }else{

            $consulta="SELECT * FROM empresas WHERE Nombre like '%$buscar%' or Categoria like '%$buscar%' or Palabras_clave like '%$buscar%' ";
            //echo "$consulta";
            $resultado = $con->query($consulta);
                while ($row = $resultado->fetch_assoc()){
                  echo '<div class="empresa">';
                  echo '<div class="logos">';
                  if($row["logo"] !="")echo"<a href='empresa.php?id=".$row['Nombre']."'>".'<img id="logo" src="img/'.$row["logo"].'"whith="15%" height="15%"></a>';
                  echo '</div>';
                  echo "<a href='empresa.php?id=".$row['Nombre']."'><h1>".$row['Nombre']."</h1></a>";
                  echo "<p>".utf8_encode($row['Descripcion'])."</p>" ;
                  echo "<h3>Telefono:</h3><p>".$row['Telefono']."</p>";
                  echo "<h3>E-Mail:</h3><p>".$row['Mail']."</p>";
                  echo '</div>';
                }

             }

                $con->close();
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
