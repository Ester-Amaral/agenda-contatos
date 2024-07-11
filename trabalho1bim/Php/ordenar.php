<?php
  session_start();
  include ("menu-pasta.php");
  include_once("funcoes.php");
  ?>
   <head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../Css/estilo.css" />
 </head>
 <body class="fundo">
  
    <h2>Contatos em ordem alfabética:</h2>
  
  </body>
  </html>
<?php
  ordenar();
?>