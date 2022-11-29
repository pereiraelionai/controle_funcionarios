<?php


if($_POST) {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM tb_usuarios WHERE usuario = '{$usuario} AND senha = '{$senha}'";
    $result = mysqli_query($conexao, $sql);
}

$smarty->display('login.tpl');

?>