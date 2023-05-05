<?php 
if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
}

$id = $_SESSION['usuario'];

$selectLista = "SELECT idItem, comentario FROM itens WHERE idCliente = '$id'";

include("conexao.php");

$sqlSelectLista =$mysqli->query($selectLista) or die($mysqli->error);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <title>To Do</title>
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
        
        <div class="lista">
            <a href="adicionar.php?id=<?php echo $_SESSION['usuario']?>" class="botaoAdicionar">+</a>

            <?php
                while ($user = $sqlSelectLista->fetch_array()) {
                    $comentario = $user['comentario'];
                    $id = $user['idItem'];
                ?>
                <div class="item">
                    <table>
                        <td><?php echo $user['comentario']?></td>
                        <a href="excluir.php?id=<?php echo $user['idItem'];
                        ?>"><ion-icon name="trash-bin-sharp"></ion-icon></a>
                        <a href="editar.php?id=<?php echo $user['idItem'];?>"><ion-icon name="pencil-outline"></ion-icon></a>
                    </table>
                </div>
                <?php
                }
            ?>
            

           
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