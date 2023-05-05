<?php
include("conexao.php");

$id = $_GET['id'];

$selectEditar = "SELECT comentario FROM itens WHERE idItem = '$id'";
$sqlSelectEditar = $mysqli->query($selectEditar) or die($mysqli->error);

$user = $sqlSelectEditar->fetch_assoc();

if (count($_POST) > 0) {

    $comentario = $_POST['comentario'];
    $sqlUpdate = $mysqli->query("UPDATE itens
    SET 
    comentario = '$comentario',
    dataComentario = NOW()
    WHERE idItem = '$id'") or die($mysqli->error);
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
    <title>Editar | To Do</title>
</head>
<body>
    <!-- Inicio header -->
    <header>
        <h1 class="logo">To Do List</h1>
    </header>
    <!-- Fim header -->

    <!-- Inicio main -->
    <main>
        <div class="formEsqueceuSenha">
            <form method="post">
                <p>Editar</p>
                
                <div class="inputModificar">
                    <label for="">Modifique seu item</label> 
                    <input type="text" name="comentario" value="<?php echo $user['comentario'] ?>"required>
                </div>
                
                   
                <button class="submit" type="submit">Enviar</button>

            </form>
        </div>
    </main>
    <!-- Fim main -->
</body>
</html>