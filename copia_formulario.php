
<FORM id="Registro" name="registro" action="prueba_registro.php" method="POST" enctype="multipart/form-data">
<input name="nombre" type="text" size="42" placeholder="*Nombre Empresa" /><br>
<p><label>Descripcion de la empresa<br>
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
 <script>tinymce.init({ selector:'textarea' });</script>
 <textarea class="articulo" name="mensaje" cols="5" rows="5" placeholder="Descripcion de la empresa" ></textarea><br>
<input name="direccion" type="text" size="42" placeholder="*Dirección"  /><br>
<input name="telefono" type="text" size="42" placeholder="*Telefono"  /><br>
<input name="mail" type="email" size="42"  placeholder="*E-mail"/><br>
<p><input name="web" type="url" size="42" placeholder="Dirección web" /> http://www.guiallerena.com</p>
<p><input name="facebook" type="url" size="42" placeholder="Facebook" /> https://www.facebook.com/guiallerena/</p>
<p><input name="twitter" type="url" size="42" placeholder="Twitter" /> https://twitter.com/guiallerena</p>
<p><input name="youtube" type="url" size="42" placeholder="Youtube" /> https://www.youtube.com/channel/guiallerena</p>
<input name="video" type="text" size="42" placeholder="Video"  /><br>
<input name="horario" type="text" size="42" placeholder="Horario"/><br>
<input name="textnom" type="text"  size="42" placeholder="Nombre Logo" /><br>
<p>Logo
<input name="logo" type="file" id="logo" />
</p>
<p>Imagenes *maximo 2mb</p>


<input name="imagen1" type="file" id="imagen1" />
<input name="imagen2" type="file" id="imagen2" />
<input name="imagen3" type="file" id="imagen3" />
<input name="imagen4" type="file" id="imagen4" />
<input name="imagen5" type="file" id="imagen5" />

<p>Categoría</p>
<?php
@ $con = new mysqli('localhost', 'root', '', 'guiallerena');
            $error = $con->connect_errno;
            if ($error == null) {
                $sql = "SELECT  Nombre FROM directorio";
                $resultado=$con->query($sql);
                if ($row=$resultado->fetch_assoc()){

                    while ($row){

                        echo"<table><tr><td>";
                        echo "<Input type='checkbox' name='directorio[]' value='".$row['Nombre']."'";
                        echo "><b>".utf8_encode($row['Nombre'])."</b></td></tr><br>";
                        $categoria1=$row['Nombre'];
                        $row=$resultado->fetch_assoc();
                        $sql = "Select  s.sub_Nombre FROM sub_directorio s INNER JOIN directorio d ON d.id_categoria=s.id_categoria WHERE d.Nombre='$categoria1'";
                        $resultado1=$con->query($sql);
                        $row1=$resultado1->fetch_assoc();
                        for ($i=0; $i <$row1 ; $i++) {
                          echo"<td>";
                          echo "<Input type='checkbox' name='directorio[]' value='".utf8_encode($row1['sub_Nombre'])."'";
                          echo ">".utf8_encode($row1['sub_Nombre'])."<br>";
                          $row1=$resultado1->fetch_assoc();

                        }
                        echo"</td></table>";
                }
              }else{
                    echo "No se ha encontrado ninguna tienda";
                }
            }
        ?>
<br>
<input name="clave" type="text" size="42" placeholder="Palabras Clave" /><br>
<p><input type="submit" name="Submit" value="Enviar"/></p>
</FORM>
