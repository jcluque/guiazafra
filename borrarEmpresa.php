<?php 
@ $con = new mysqli('mysql.hostinger.es', 'u233680029_zafra', '*carmen15*', 'u233680029_zafra');
            $error = $con->connect_errno;
$mail = $_GET['Mail'];


$sql = "DELETE FROM `empresas` WHERE `mail`= '{$mail}'";
echo '<pre>'.  var_dump($sql). '</pre>';
        $resultado = $con->query($sql);

 $con->close();
         header('Location:dificarempresa.php');
?>
