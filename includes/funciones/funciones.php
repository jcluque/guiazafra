<?php

function usuario_autentificado(){
  if(!revisar_usuario()){
    header('Location:login.php');
  }
}

function revisar_usuario(){
  return isset($_SESSION['usuario']);
}
?>

