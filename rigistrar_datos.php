<?php
//insertar empresa

@ $con = new mysqli('localhost', 'root', '', 'guiallerena');
            $error = $con->connect_errno;
        // put your code here
            $nombre=$_POST["nombre"];
            $mensaje=$_POST["mensaje"];
            $direccion=$_POST["direccion"];
            $telefono=$_POST["telefono"];
            $mail=$_POST["mail"];
            $web=$_POST["web"];
            $facebook=$_POST["facebook"];
            $twitter=$_POST["twitter"];
            $youtube=$_POST["youtube"];
            $video=$_POST["video"];
            $horario=$_POST["horario"];
            foreach ($_POST['directorio'] as $categoria);
            $clave=$_POST["clave"];
            $nom=$_REQUEST['textnom'];
            $logo=$_FILES['logo']['name'];
            $ruta=$_FILES['logo']['tmp_name'];
            $destino="img/".$logo;
            move_uploaded_file($ruta,$destino);

            if ($error == null) {
                $consulta="INSERT INTO empresas (Nombre, Descripcion, Direccion, Telefono, Mail, Web, Categoria, Palabras_clave, logo, nom)";
                $consulta.= " VALUES ('$nombre', '$mensaje', '$direccion', '$telefono', '$mail', '$web', '$categoria', '$clave', '$logo', '$nom');";
                    echo $consulta;
                $resultado = $con->query($consulta);

                if ($resultado) {
                    print "<p>Se ha insertado $con->affected_rows registros.</p>";
                } else{
                    echo "No se ha llevado a cabo la insercción de una nueva familia";
                }
                $con->close();

}
        ?>
<FORM id="Registro" name="registro" action="registro.php" method="POST">
<p><input type="submit" name="Submit" value="volver"/></p>
</FORM>
