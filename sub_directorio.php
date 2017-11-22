<?php
include ('includes/template/header.php');
?>
<article>
<div class="contenido">
<h1>Directorio</h1>
<?php
$categoria1=utf8_decode($_REQUEST['id']);
@ $con = new mysqli('localhost', 'root', '', 'guiallerena');
    $error = $con->connect_errno;
    if ($error == null) {
        $sql = "Select  s.sub_Nombre FROM sub_directorio s INNER JOIN directorio d ON d.id_categoria=s.id_categoria WHERE d.Nombre='$categoria1'";
        $resultado=$con->query($sql);
        if ($resultado){
            $row=$resultado->fetch_assoc();
            while ($row){
                echo"<nav class='directorio'>";
                echo  "<ul>";
              for ($i=0; $i<$row ; $i++) {
                echo "<li><a href='categoria.php?id=".$row['sub_Nombre']."'>".utf8_encode($row['sub_Nombre'])."</a></li>";
                      $row=$resultado->fetch_assoc();
              }
                echo  "</ul>";


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
    $consulta="SELECT * FROM empresas WHERE  Categoria like'%$categoria%'";
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
          echo "<h3>Categotias:</h3><p>".$row['Categoria']."</p>";
          echo "<h3>E-Mail:</h3><p>".$row['Mail']."</p>";
          echo "<h3>Horario:</h3><p>".$row['horario'] ."</p>";
            echo '<div>';
        }
}
?>
</article>
<article>
    <div class="contenido">
        <?php
        @ $con = new mysqli('localhost', 'root', '', 'guiallerena');
            $error = $con->connect_errno;
            $categoria=$_REQUEST['id'];
            $consulta="SELECT * FROM empresas WHERE  Categoria like '%$categoria%'";
            $resultado = $con->query($consulta);
                while ($row = $resultado->fetch_assoc()){
                echo '<div class="empresa">';
                echo '<div class="logos">';
                if($row["logo"] !="")echo"<a href='empresa.php?id=".$row['Nombre']."'>".'<img id="logo" src="img/'.$row["logo"].'"whith="15%" height="15%"></a>';
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
