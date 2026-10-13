<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Consultar alunos</title>
</head>
<body>

<nav class="navbar navbar-expand navbar-dark bg-primary justify-content-center">
    <ul class="nav navbar-nav">
        <li class="nav-item">
            <a class="nav-link active" href="index.html" aria-current="page"
                >Home <span class="visually-hidden">(current)</span></a
            >
        </li>
        <li class="nav-item">
            <a class="nav-link" href="cadastro.php">Cadastrar</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="consulta.php">Consultar</a>
        </li>
    </ul>
</nav>
  
<h3 class="text-center mt-5">Aluno cadastrado com sucesso</h3>
<br>
<?php

include ("conexao.php");

$nome = $_POST["nome"];
$telefone = $_POST["telefone"];
$email = $_POST["email"];
$turma =$_POST["turma"];

$cadastro = "INSERT INTO aluno (Nome_aluno, Telefone, Email, Cod_turma) VALUES('$nome', '$telefone', '$email','$turma')";


$resultado = mysqli_query($conexao, $cadastro);


?>
<p class="text-center"><a href='index.html' class="text-dark"> Voltar a página inicial </a></p>

</body>
</html>

