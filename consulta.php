<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realizar Login</title>
    <link rel="stylesheet" href="css/style2.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>


<body>
    <a href="index.html" class="btn2">
        <div class="back">
            <i class='bx bx-arrow-back'></i><span> Voltar</span>
        </div>
    </a>
    <div class="container">
        <form action="consulta_feita.php" method="post" target="_self">
            <h1>Consultar Alunos</h1>
            <h5>Selecione a turma que deseja visualizar</h5>
            <div class="input-box">
                <select name="turma" id="turma">
                <?php
                    
                    include("conexao.php");
                    $consulta = mysqli_query($conexao, "SELECT Cod_turma as codigo, Nome_turma as turma FROM Turma");

                    while ($linha = mysqli_fetch_array($consulta)){

                        echo "<option value= '" . $linha['codigo'] . "'>" . $linha['turma'] . "</option>";
                    }
                    ?>
                </select>
            </div>
            <button type="submit" class="btn">Consultar</button>
        </form>
    </div>
</body>
</html>