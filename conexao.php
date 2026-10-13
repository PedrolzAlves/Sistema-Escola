<?php

$servername = "localhost";
$username = "root";
$password = "";
$bdname = "bd_escola";

$conexao = new mysqli($servername, $username, $password, $bdname);

if ($conexao ->connect_error){
    die ("Falha na conexão com o servidor" . $conexao -> connect_error);
}

?>