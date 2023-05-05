<?php
if (count($_POST) > 0 ) {
    include_once("conexao.php");

    $comentario = $_POST['comentario'];

    $id = $_GET['id'];
    
    $insertAdicionar = "INSERT INTO itens (idCliente, comentario) VALUES ('$id','$comentario')";

    $sqlInsertAdicionar = $mysqli->query($insertAdicionar) or die($mysqli->errror);

    header("Location: index.php");
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
    <title>Adicionar | To Do</title>
</head>
<body>
     <!-- Inicio header -->
     <header>
        <h1 class="logo">To Do List</h1>

        <a href="logOut.php">Log Out</a>
    </header>
    <!-- Fim header -->

    <!-- Inicio main -->
    <main>
        
        <div class="listaAdicionar">                
            <p>Adicionar item</p>
            <form action="" method="post" class="adicionar">
                <label for="">Adicionar novo item à sua lista</label>
                <input type="text" name="comentario" placeholder="Escreva aqui">
                <button type="submit">Adicionar</button>
            </form>       
        </div>

        
    </main>
    <!-- Fim main -->
    <!-- footer inicio -->
    <footer>
    </footer>
    <!-- footer fim -->
</body>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>