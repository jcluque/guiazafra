

        <?php
        include ('header.php');
        ?>
                <link rel="stylesheet" type="text/css" href="prueba_estilo.css" />

<article>
    <div class="contenido">
          
        
        <?php
             
         
                
        
        @ $con = new mysqli('localhost', 'root', '', 'guiallerena');
            $error = $con->connect_errno;
             
            
            $consulta="SELECT * FROM empresas WHERE Nombre='asesoria1' ";
            //echo "$consulta";
            $resultado = $con->query($consulta);
        
           
                
                while ($row = $resultado->fetch_assoc()){
                 echo "<article>";   
                echo'<IMG id="logo" SRC="img/logo_asesorialarrey.png" ALT="Asesoría Larrey">';
                echo "<h1>Asesoría Larrey</h1>";
                 echo "<p>".$row['Descripcion']."</p>" ;

                echo "<p>Telefono:   924 10 84 83</p>";
                echo "<p>Categotias: Asesoria</p>";
                echo '<div class="web">';
                echo '<a href="http://www.asesorialarrey.com">Web</a>';
                echo '<a href="http://www.asesorialarrey.com"><img src="img/facebook.png" width="30px" height="30px"/></a>';
                echo '<a href="http://www.asesorialarrey.com"> <img src="img/twitter.png" width="30px" height="30px"/></a>';                       echo '<a href="http://www.asesorialarrey.com"> <img src="img/youtube.png" width="30px" height="30px"/></a>';
                echo '</div>';
                echo "</article>";
                }
                  
               
             
                
                $con->close();
                
                
            
                
               
                    
                 
                    
        ?>
              
        
    </div>
</article>

        <?php
        include ('sidebar.php');
        ?>
        
          <?php
        include ('footer.php');
        ?>
    </body>
</html>