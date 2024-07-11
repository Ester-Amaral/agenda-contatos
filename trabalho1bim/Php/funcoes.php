<?php
   if(!isset($_SESSION["agenda"])){
      $_SESSION["agenda"]= array();
   }
 
function iniciarTabela(){
?>
 <table align="center" border="1" width="750px" background-color="#45454a">
   <thead>
    <tr><td>Nome</td><td>Telefone</td><td>Email</td></tr>
   </thead>
 <tbody>
 
<?php 
 }

function finalizarTabela(){
 ?>
    </tbody>
    </table>
 <?php
}
 
function mostrarContato($nome, $numero, $email){
 echo "<tr><td>" .$nome. "</td><td>" .$numero. "</td><td>" .$email."</td></tr>";
 
}
 //Mostra os contato em tabelas:
 function exibir (){
   $agenda= $_SESSION["agenda"];
   iniciarTabela();
   foreach( $agenda as $contato){ 
      mostrarContato($contato["Nome"], $contato["Numero"], $contato["Email"]);
   }
   finalizarTabela();
}
//organiza os contato em ordem alfabética:
function ordenar(){
 	$agenda= $_SESSION["agenda"];
   array_multisort($agenda);
   iniciarTabela();
   foreach( $agenda as $contato){
      mostrarContato($contato["Nome"], $contato["Numero"], $contato["Email"]);
   }
   finalizarTabela();
}

 function adicionar($nome, $telefone, $email){
   $agenda= $_SESSION["agenda"];
   $contato["Nome"]= $nome;
   $contato["Numero"]= $telefone;
   $contato["Email"]= $email;
   array_push($agenda, $contato);

   return $agenda;
}

function excluir($agenda, $nome){
   echo "<h2>Excluindo $nome</h2>";
         for($i=0; $i<sizeof($agenda); $i++){
            if($agenda[$i]["Nome"]==$nome){
               unset($agenda[$i]);
            }
         }
         return $agenda;
}

function busca($agenda, $nome){
   echo "<h2>Resultado da busca por $nome :</h2>";
   iniciarTabela();
       foreach ($agenda as $contact)
           if ($nome==$contact["Nome"])
               mostrarContato($contact["Nome"],$contact["Numero"], $contact["Email"]);
   finalizarTabela();
}
?>