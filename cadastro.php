<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realizar Login</title>
    <link rel="stylesheet" href="css/style2.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <script>
	
        function mascara(src, mask){
                                    var i = src.value.length;
                                    var saida = mask.substring(0,1);
                                    var texto = mask.substring(i)
                                    if (texto.substring(0,1) != saida)
                                    {
                                     src.value += texto.substring(0,1);
                                    }
                                  } 
   
   </script>

</head>
<body>
    <a href="index.html" class="btn2">
        <div class="back">
            <i class='bx bx-arrow-back'></i><span> Voltar</span>
        </div>
    </a>
    <div class="container">
        <form action="cadastro_feito.php" method="post" target="_self">
            <h1>Cadastrar Alunos</h1>
            <div class="input-box">
                <input type="text" name="nome" placeholder="Usuário" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="text" name="telefone" onkeypress="mascara(this,'#####-####')" maxlength="10" placeholder="Telefone"  required>
                <i class='bx bxs-phone'></i>
            </div>
            <div class="input-box">
                <input type="email" name="email" placeholder="email" required>
                <i class='bx bx-at'></i>
            </div>
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
            <button type="submit" class="btn">Cadastrar</button>
        </form>
    </div>
</body>
</html>