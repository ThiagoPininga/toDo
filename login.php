<?php
$erro = false;
if (isset($_POST['email']) ) {
    include("conexao.php");

    if (!isset($_SESSION)) {
        session_start();
    }

    function limparVar($var)
    {
        return trim($var);
    }

    $erro = false;
    $email = $_POST["email"];
    $senha = limparVar($_POST["senha"]);

    $selectLogin = "SELECT email, senha, idCliente FROM clientes WHERE email = '$email' LIMIT 1";

    $sqlSelectLogin = $mysqli->query($selectLogin) or die($mysqli->error);

  
    $user = $sqlSelectLogin->fetch_assoc();
    if ($user != NULL) {
       if (password_verify($senha, $user['senha'])) {
       
            $_SESSION['usuario'] = $user['idCliente'];
            header("Location: index.php");
        
        } else{
            $erro = true;
        }
    }else{
        $erro = true;
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
    <title>Login | To Do</title>
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
                <p>Login</p>
                <div class="input">
                    <label for="">Email</label> 
                    <input type="email" name="email" required>
                </div>
                    
                <div class="input">
                    <label for="">Senha</label>
                    <input type="password" name="senha" required>
                </div>                  
                   
                <button class="submit" type="submit">Login</button>

                <?php
                if ($erro) {
                    echo "<span class='erro'>Email ou senha incorretos</span>
                    ";
                }
                ?>

                <div class="register">
                    <p>Ainda não tem uma conta? <a href="registrar.php">Registre-se</a></p>
                </div>
            </form>
        </div>
    </main>
    <!-- Fim main -->
</body>
</html>