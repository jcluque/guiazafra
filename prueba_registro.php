<?php
//insertar empresa

@ $con = new mysqli('localhost', 'root', '', 'guiallerena');
            $error = $con->connect_errno;
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
          //  foreach ($_POST['directorio'] as $categoria);
          //  if(is_array($_POST['directorio'])) while (list($key,$categoria) = each ($_POST['directorio'] ));

//prueba
            function eventos_json(&$categoria1){
              $eventos_json = array();
              foreach ($categoria1 as $categoria) {
              $eventos_json['categoria'][] = $categoria;
              }
              return json_encode($eventos_json);
            }

            $categoria1 = $_POST['directorio'];
            $categoria = eventos_json($categoria1);



//fin de la prueba
            $clave=$_POST["clave"];
            $nom=$_REQUEST['textnom'];
            $logo=$_FILES['logo']['name'];
            $ruta=$_FILES['logo']['tmp_name'];
            $destino="img/".$logo;
            move_uploaded_file($ruta,$destino);


              $imagen1=$_FILES['imagen1']['name'];
              $ruta1=$_FILES['imagen1']['tmp_name'];
              $destino1="img/".$imagen1;
              move_uploaded_file($ruta1,$destino1);

              $imagen2=$_FILES['imagen2']['name'];
              $ruta2=$_FILES['imagen2']['tmp_name'];
              $destino2="img/".$imagen2;
              move_uploaded_file($ruta2,$destino2);

              $imagen3=$_FILES['imagen3']['name'];
              $ruta3=$_FILES['imagen3']['tmp_name'];
              $destino3="img/".$imagen3;
              move_uploaded_file($ruta3,$destino3);

              $imagen4=$_FILES['imagen4']['name'];
              $ruta4=$_FILES['imagen4']['tmp_name'];
              $destino4="img/".$imagen4;
              move_uploaded_file($ruta4,$destino4);

              $imagen5=$_FILES['imagen5']['name'];
              $ruta5=$_FILES['imagen5']['tmp_name'];
              $destino5="img/".$imagen5;
              move_uploaded_file($ruta5,$destino5);


            if ($error == null) {
                $stmt = $con->prepare( "INSERT INTO empresas (Nombre, Descripcion, Direccion, Telefono, Mail, Web, Categoria, Palabras_clave, logo, nom, twitter, facebook, youtube, video, horario, imagen1, imagen2, imagen3, imagen4, imagen5) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
                $stmt->bind_param("ssssssssssssssssssss", $nombre, $mensaje, $direccion, $telefono, $mail, $web, $categoria, $clave, $logo, $nom, $twitter, $facebook, $youtube, $video, $horario, $imagen1, $imagen2, $imagen3, $imagen4, $imagen5);
                $stmt->execute();
                $stmt->close();
                $con->close();
                header('Location:http://localhost/Guia/Registro.php');




}
        ?>
<FORM id="Registro" name="registro" action="registro.php" method="POST">
<p><input type="submit" name="Submit" value="volver"/></p>
</FORM>
