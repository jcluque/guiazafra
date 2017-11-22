

        <?php
        include ('header.php');
        ?>
<article>
    <div class="contenido">
        <h1>Busqueda Empresas</h1>
          <table>
              <tr><td>Nombre</td>
                  <td>Descripcion</td>
                  <td>Telefono</td>
               </table></tr>
        
        <?php
                
        
        @ $con = new mysqli('localhost', 'root', '', 'guiallerena');
            $error = $con->connect_errno;
             
            $tamano_pagina=3;
            $pagina=1;
            
            $consulta="SELECT * FROM empresas WHERE Nombre LIMIT 0,3 ";
            //echo "$consulta";
            $resultado = $con->query($consulta);
            echo $resultado=$consulta.Length;





        while ($row = $resultado->fetch_assoc()){
                echo"<table><tr><td>";
                echo $row['Nombre'] ."</td><td>";
                echo $row['Descripcion'] ."</td><td>";
                echo $row['Telefono'] ."</td>";
                echo "</table></tr>";
                }
                 $con->close();
                 
             if(isset($_POST["pagina"])){    
                 
                 if($_POST["pagina"]==1){
                     header("Location.prueba_paginanacion.php");
                 }else{
                     $pagina=$_POST["pagina"];
                 }
                 
             }    
             //-------------------------------Paginacion-------------
                for($i=1; $i<=10; $i++){
                    echo "<a href='?pagina=" . $i ."'>" . $i ."</a>  ";
                }
                
                
              
                    
                 
                    
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