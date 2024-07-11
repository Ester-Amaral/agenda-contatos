<?php
  session_start();
  include ("menu-pasta.php");
  include_once("funcoes.php");
?>
<head>
 	<meta charset="utf-8">
 	<link rel="stylesheet" type="text/css" href="../Css/estilo.css" />
 </head>
 <div class="form">
  <body class="fundo">
    <h1>Buscar Contato</h1><br>	
	<form align="center" name="contato-form" action="aux-buscar.php" method="post">
		<label>Nome:</label>
		<input type="text" name="nome" placeholder="Digite um nome">
		<br><br>
		<input class="botao" type="submit" value="Buscar">
	</form>
 </div>   
</body>
</html>