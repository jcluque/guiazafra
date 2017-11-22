<style>
    table {
  border-collapse: collapse;
}
    td{
        width: 160px;
        border: 1px solid black;
        
    }
</style>    
<?php
        include ('includes/template/header.php');
        include_once 'includes/funciones/funciones.php';
session_start();
usuario_autentificado();
        ?>
        
<article>
    <div class="contenido">
        <?php include_once 'includes/template/admin_nav.php'; ?>
        <br>
        <h1>Modificar Empresa</h1>

        <table>
            <tr>
            <td>Nombre Empresa</td>
            <td>Telefono</td>   
            <td>E-mail</td>  
            <td>Modificar</td>
            <td>Borrar Empresa</td>
            </tr>
        
        <?php
        @ $con = new mysqli('localhost', 'root', '', 'guiallerena');
            $error = $con->connect_errno;
             

            $consulta="SELECT Nombre, Mail, Telefono FROM empresas";
            //echo "$consulta";
            $resultado = $con->query($consulta);
           
            
                while ($row = $resultado->fetch_assoc()){    
                  echo '<tr>';  
                  echo "<td>".$row['Nombre']."</td>";
                  echo "<td>".$row['Telefono']."</td>";
                  echo "<td>".$row['Mail']."</td>";
                  echo '<td><a href="modificar.php?Mail='.$row['Mail'].'">Modificar</a></td>';
                  echo '<td><a href="borrarEmpresa.php?Mail='.$row['Mail'].'">Eliminar</a></td>';
                  echo '</tr>';
                }

             
             echo '</table>';
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

