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
    <h1>Remover Contato</h1><br>	

	<form align="center" name="contato-form" action="aux-remover.php" method="post">
		<label>Nome:</label>
		<input type="text" name="Nome" placeholder="Digite um nome">
		<br><br>
		<input class="botao" type="submit" value="Remover">
	</form>
</div> 
</body>
</html>
