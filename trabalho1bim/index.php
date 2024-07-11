<?php
   session_start();
   include("Php/menu.php");
   $dia= date('d/m/y');
   $hora= date('h:i');
   echo"<h1>Bem Vindo!</h1>";
   echo"<h3>Hoje é dia $dia</h3>";
   echo"<h3>Agora são: $hora</h3>";
   ?>