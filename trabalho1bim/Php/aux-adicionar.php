<?php
 session_start();
 include("menu-pasta.php");
 include_once("funcoes.php");
  
  $_SESSION["agenda"]= adicionar($_GET["fnome"], $_GET["fphone"], $_GET["femail"]);
  echo "<h2>Adicionandos</h2>";
?>