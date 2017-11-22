        <?php
        include ('includes/template/header.php');
        ?>

<article>
    <div class="contenido">
        <?php
        @ $con = new mysqli('localhost', 'root', '', 'guiallerena');
            $error = $con->connect_errno;
            $categoria=$_REQUEST['id'];

            echo"<nav class='directorio'>";
            echo  "<ul>";

            echo "<li><a href'#>".$categoria."</a></li>";
            echo  "</ul>";
            echo "</nav>";

            $consulta="SELECT * FROM empresas WHERE Categoria like '%$categoria%'";
            $resultado = $con->query($consulta);
                while ($row = $resultado->fetch_assoc()){
                echo '<div class="empresa">';
                echo '<div class="logos">';
                if($row["logo"] !="")echo'<img id="logo" src="img/'.$row["logo"].'"whith="15%" height="15%">';
                echo '</div>';
                echo "<a href='empresa.php?id=".$row['Nombre']."'><h1>".$row['Nombre']."</h1></a>";
                echo "<p>".$row['Descripcion']."</p>" ;
                echo "<h3>Telefono:</h3><p>".$row['Telefono']."</p>";
                echo "<h3>E-Mail:</h3><p>".$row['Mail']."</p>";
                echo '</div>';
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
