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
    <ul class="nav navbar-nav ">
        <li class="nav-item ">
            <a class="nav-link me-5" href="index.html" aria-current="page"
                >Home </a
            >
        </li>
        <li class="nav-item ">
            <a class="nav-link me-5" href="cadastro.php">Cadastrar</a>
        </li>
        <li class="nav-item ">
            <a class="nav-link me-5  active" href="consulta.php">Consultar
                <span class="visually-hidden">(current)</span>
            </a>
        </li>
    </ul>
</nav>
 
    <div class="table">
    <table>
        <tr>
            <th>Aluno</th>
            <th >Telefone</th>
            <th>Email</th>
            <th>Turma</th>
        </tr>

        <?php

        include("conexao.php");

        $turma = $_POST["turma"];

        $consulta = mysqli_query($conexao, "SELECT Aluno.Nome_aluno as nome, Aluno.Telefone as telefone, Aluno.Email as email, Turma.Nome_turma as Turma 
                                            FROM Aluno INNER JOIN Turma ON
                                            Aluno.Cod_turma = Turma.Cod_turma 
                                            WHERE Turma.Cod_turma =  '$turma'");

        while ($linha = mysqli_fetch_array($consulta)) {
            echo "<tr>";
            echo "<td>" . $linha['nome'] . "</td>";
            echo "<td>" . $linha['telefone'] . "</td>";
            echo "<td>" . $linha['email'] . "</td>";
            echo "<td>" . $linha['Turma'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>