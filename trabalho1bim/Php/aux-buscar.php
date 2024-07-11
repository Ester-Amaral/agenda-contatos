<?php
    session_start();
    include('funcoes.php');
    $nome = $_POST['nome'];

    busca($_SESSION['agenda'], $nome);
?>