<?php
$id_usuario = $_GET['id_usuario'];
require_once "conecta.php";
$conexao = conectar();
$sql = "SELECT * FROM usuario WHERE id_usuario = $id_usuario";
$result = mysqli_query($conexao, $sql);

if ($result) {
    $usuario = mysqli_fetch_assoc($result);
} else {
    echo mysqli_errno($conexao) . ": " . mysqli_error($conexao);
    die();
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="alterar.php" method="post">
        Email: <input type="text" name="email" value="<?= $usuario['email'] ?>"><br>
        Senha: <input type="text" name="senha" value="<?= $usuario['senha'] ?>"><br>
        <input type="submit" value="Salvar"><br>
    </form>
</body>

</html>