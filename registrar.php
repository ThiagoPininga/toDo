<?php

// ALTER TABLE clientes AUTO_INCREMENT=1
$erro = false;
if (count($_POST) > 0) {
    include("conexao.php");

    function limparVar($var)
    {
        return trim($var);
    }

    $erro = false;
    $nome = limparVar($_POST['nome']);
    $email = $_POST['email'];
    $senha = limparVar($_POST['senha']);

    // verificações do nome 
    if (empty($nome) || strlen($nome) < 3 || strlen($nome) > 100) {
        $erro = 1; 
    }

    // verificacoes da senha
    if (empty($senha) || strlen($senha) < 6 || strlen($senha) > 15) {
        $erro = 2;
    }

    if (!$erro) {
        $senha = password_hash($senha, PASSWORD_DEFAULT);

        $sqlSelectRegister = "INSERT INTO clientes (nome, email, senha, dataCadastro) VALUES ('$nome', '$email' , '$senha', NOW())";

        $certo = $mysqli -> query($sqlSelectRegister) or die($mysqli->error);
        header("Location: index.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Registrar | To Do</title>
</head>
<body>
     <!-- Inicio header -->
     <header>
        <h1 class="logo">To Do List</h1>
    </header>
    <!-- Fim header -->

    <!-- Inicio main -->
    <main>
        <div class="form">
            <form method="post">
                <p>Registre-se</p>

                <div class="input"> 
                    <label for="nome">Nome</label> 
                    <?php 
                    if($erro == 1) {
                        echo "<span class='erro'>Insira um nome válido</span>";
                        }
                    ?>
                    <input type="text" name="nome" placeholder="Insira o seu nome aqui" required>
                </div>

                <div class="input">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="seuemail@dominio.com" required>
                </div>
                    
                <div class="input">
                    <label for="senha">Senha</label>
                    <?php 
                    if($erro == 2) {
                        echo "<span class='erro'>Insira uma senha válida</span>";
                        }
                    ?>
                    <input type="text" name="senha" placeholder="Senha entre 6-14 caracteres" required>
                </div> 
                   
                <button class="submit" type="submit">Finalizar</button>

                <div class="login">
                    <p>Já tem uma conta? <a href="login.php">Faça Login</a></p>
                </div>
            </form>
        </div>
    </main>
    <!-- Fim main -->
</body>
</html>