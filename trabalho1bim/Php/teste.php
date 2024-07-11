<?php

$lista1 = [
            ["nome" => "Bedro", "idade" => 22, "cidade" => "Campinas", "estado"=>"SP"],
            ["nome" => "Ana", "idade" => 25, "cidade" => "Guaira", "estado"=>"Parana"]
          ];

 array_multisort($lista1);
foreach( $lista1 as $chave => $valor ){
        foreach($valor as $info => $dado){
            echo "$dado \n";
            }
            echo "\n";
    }