

        <?php
        include ('includes/template/header.php');
        ?>
<article>
    <div class="contenido">
        <h1>Novedades</h1>
        <p>A través este blog trataremos de informar de todos aquellos temas que puedan ser interesantes para los negocios de Llerena.
            Publicaremos entrevistas, promociones, ofertas, horarios, encuestas ...</p>
    <div>

<input name="titulo" type="text" size="42" placeholder="Titulo"/><br>
<input name="fecha" type="text" size="42" placeholder="Fecha"/><br>
<input name="categoria" type="text" size="42" placeholder="Categoria"/><br>
<input name="textnom" type="text" placeholder="Nombre de la Imagen" /></p>
<p>Logo
<input name="logo" type="file" id="logo" /></p>
      <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

    <script>tinymce.init({ selector:'textarea' });</script>
    <textarea class=" articulo " name=" articulo " cols="50" rows="15"></textarea><br>
    <input type="submit" name="buscar" value="Enviar">
</div>

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
