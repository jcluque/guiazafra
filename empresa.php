<?php
session_start();
include ('includes/template/header.php');
?>

<article>
<div class="contenido">
<?php
@ $con = new mysqli('localhost', 'root', '', 'guiallerena');
    $error = $con->connect_errno;

    $nombre=$_REQUEST['id'];
    $consulta="SELECT * FROM empresas WHERE Nombre='$nombre'";
    //echo "$consulta";
    $resultado = $con->query($consulta);
        while ($row = $resultado->fetch_assoc()){
          echo '<div class="empresa">';
          echo '<div class="logos">';
          if($row["logo"] !="")echo'<img id="logo" src="img/'.$row["logo"].'"whith="15%" height="15%">';
          echo '</div>';
          echo "<h1>".$row['Nombre']."</h1>";
          echo "<p>".utf8_encode($row['Descripcion'])."</p>" ;
          echo "<h3>Telefono:</h3><p>".$row['Telefono']."</p>";
          //echo "<h3>Categotias:</h3><p>".$row['Categoria']."</p>";
          echo "<h3>E-Mail:</h3><p>".$row['Mail']."</p>";
          $_SESSION['mail']= $row['Mail'];
           echo "<br><a href='contactarempresa.php' >Contactar con el empresario</a>";
          echo "<h3>Horario:</h3><p>".$row['horario'] ."</p>";
          echo '<div class="web">';
          echo "<h3>Redes Sociales:</h3>";
          echo '<a target="_blank" href="'.$row['facebook'].'"><img src="img/facebook.png" width="30px" height="30px"/></a>';
          echo '<a target="_blank" href="'.$row['twitter'].'"> <img src="img/twitter.png" width="30px" height="30px"/></a>';
          echo '<a target="_blank" href="'.$row['youtube'].'"> <img src="img/youtube.png" width="30px" height="30px"/></a>';
          echo '<a target="_blank" href="'.$row['Web'].'"><img src="img/web.jpg" width="30px" height="30px"/></a>';
          echo '</div><br><br>';
          echo '<div class="map">';
          echo "'".$row['nom']."'";
          
          echo '</div><br><br>';
          echo '<div class="video">';
          echo $row['video'];
          echo '</div><br><br>';
          echo '<div class="img">';
            if($row["imagen1"] !="")echo'<img  src="img/'.$row["imagen1"].'"whith="270px" height="200px">';
            if($row["imagen2"] !="")echo'<img  src="img/'.$row["imagen2"].'"whith="270px" height="200px">';
            if($row["imagen3"] !="")echo'<img  src="img/'.$row["imagen3"].'"whith="270px" height="200px">';
            if($row["imagen4"] !="")echo'<img  src="img/'.$row["imagen4"].'"whith="270px" height="200px">';
            if($row["imagen5"] !="")echo'<img  src="img/'.$row["imagen5"].'"whith="270px" height="200px">';
          echo '</div>';
          echo '</div>';
        }
        $con->close();
?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-share-button" data-href="https://guiallerena.es" data-layout="button" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fguiallerena.es%2F&amp;src=sdkpreparse">Compartir</a></div>

</div>
    
<?php
include ('includes/template/sidebar.php');
?>
  <?php
include ('includes/template/footer.php');
?>
</body>
</html>
