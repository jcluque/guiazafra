<?php
include ('includes/template/header.php');
?>
<article>
        <div class="contenido">
          <?php
                echo '<div class="logos">';
                echo'<IMG SRC="img/logo_asesorialarrey.png" WIDTH=25% HEIGHT=25% ALT="Asesoria Larrey">';
                echo '</div>';
                echo "<h1>ASESORÍA LARREY</h1>";
                echo "<p>Asesoría Larrey se crea en el año 2016 por Valentín Cortés Larrey, abogado y especialista en materia tributaria, con Máster en Asesoría Fiscal.
                        <p>Estudió la licenciatura de Derecho en Sevilla, y posteriormente realizó el Máster en Asesoría Fiscal en el Instituto de Estudios Cajasol. Al finalizar el mismo empezó su carrera en el Bufete Rubio Rueda de Sevilla, en el año 2011, comenzando así su andadura profesional que, por suerte, no se ha detenido desde entonces.
                       <p> Esta previa práctica profesional le ha permitido obtener la experiencia necesaria para crear esta Asesoría, en la que se ofrecen servicios como abogacía en general, asesoramiento fiscal y contable, laboral, seguros, financiero, y servicios propios de gestoría.</p>";
                echo'<p><h3>Dirección:</h3>C/ Santiago, 59,  1ª Planta, Despacho 33 06900 Llerena (Badajoz)</p>';
                echo'<p><h3>E-Mail:</h3> info@asesorialarrey.com</p>';
                echo "<h3>Telefono:</h3><p> 924 10 84 83 - 677 07 51 26</p>";
                echo "<h3>Horario:</h3><p>Lunes – Jueves:De 8:00 a 14:00 y de 16:30 a 19:30 Viernes: De 8:00 a 14:00</p>";
                echo "<h3>Categotias:</h3><p> Asesoria</p>";
                echo '<div class="web">';
                echo '<a href="http://www.asesorialarrey.com"><h3>Web</h3></a>';
                echo "<h3>Redes Sociales:</h3>";
                echo '<a href="http://www.asesorialarrey.com"><img src="img/facebook.png" width="30px" height="30px"/></a>';
                echo '<a href="http://www.asesorialarrey.com"> <img src="img/twitter.png" width="30px" height="30px"/></a>';
                echo '<a href="http://www.asesorialarrey.com"> <img src="img/youtube.png" width="30px" height="30px"/></a>';
                echo '</div><br><br>';
                echo '<div class="map">';
                echo '<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d12534.565799915537!2d-6.0202829!3d38.2414266!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2ses!4v1488151158653" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>';
                echo '</div><br>';
                echo '<iframe width="300" height="213" src="https://www.youtube.com/embed/1qykU8LDbrY" frameborder="0" allowfullscreen></iframe><br><br>';

                echo '<div class="img">';
                echo '<a href="#"><img src="./img/Asesoria_Larrey-1.jpg" width="270px" height="200px"/></a>';
                echo '<img src="./img/Asesoria_Larrey-2.jpg" width="270px" height="200px"/>';
                echo '<img src="./img/Asesoria_Larrey-3.jpg" width="270px" height="200px"/>';
                echo '</div>';
                ?>
                <style>
                .img img{
                  margin-right: 10px;
                  border: 2px solid purple;
                }
                .logos img{
                float: left;
                margin: 15px;
                }
              

                </style>
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
