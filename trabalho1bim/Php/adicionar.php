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
  <body>
    <h1>Adicionar Novo Contato</h1><br>	

	<form align="center" nome="contato-form" action="aux-adicionar.php" method="GET">
		<label>Nome:</label>
		<input type="text" name="fnome" placeholder="Digite seu nome">
		<br><br>
		<label>Numero:</label>
		<input type="number" name="fphone" placeholder="Digite seu número de telefone" size="20px">
		<br><br>
		<label>Email:</label>
		<input type="text" name="femail" placeholder="Digite seu endereço do e-mail">
		<br><br>
		<input class="botao" type="submit" value="Adicionar">
	 </form>
   </body>
</div>



