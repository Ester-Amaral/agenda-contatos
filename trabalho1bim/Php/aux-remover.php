<?php
  session_start();
  include("menu-pasta.php");
  include("funcoes.php");
  
  $nome = $_POST["Nome"];
  
  $_SESSION['agenda'] = excluir($_SESSION['agenda'], $nome);
?>