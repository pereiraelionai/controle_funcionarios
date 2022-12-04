<?php

if($_POST) {
    $id_usuario = $_POST['id_usuario'];
    $nome_completo = $_POST['nome_completo'];
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $confirm_senha = $_POST['confirm_senha'];

    if($senha != $confirm_senha) {
        echo "<script>alert('As senhas são diferentes'); location.replace('index.php?ac=editar&id=". $_GET['id'] ."'); </script>";
    }
    
    $sql = "UPDATE tb_usuarios SET nome_completo = '$nome_completo', usuario = '$usuario', 
            senha = '$senha', confirm_senha = '$confirm_senha' WHERE id_usuario = '$id_usuario'";
    
    $result = mysqli_query($conexao, $sql);
       
    if($result == '') {
        echo "<script>alert('Erro ao atualizar'); location.replace('index.php?ac=editar&id=". $_GET['id'] ."'); </script>";
    } else {
        echo "<script>alert('Usuário alterado com sucesso'); location.replace('index.php?ac=editar_usuario'); </script>";
    }
};

$id_usuario = $_GET['id'];

$sql = "SELECT * FROM tb_usuarios WHERE id_usuario = '$id_usuario'";
$consultar_usuarios = mysqli_query($conexao, $sql);

while($linha_dados = mysqli_fetch_array($consultar_usuarios)) {
    $id_usuario = $linha_dados['id_usuario'];
    $nome_completo = $linha_dados['nome_completo'];
    $usuario = $linha_dados['usuario'];
    $senha = $linha_dados['senha'];
    $confirm_senha = $linha_dados['confirm_senha'];

};

$smarty->assign("id_usuario", $id_usuario);
$smarty->assign("nome_completo", $nome_completo);
$smarty->assign("usuario", $usuario);
$smarty->assign("senha", $senha);
$smarty->assign("confirm_senha", $confirm_senha);
$smarty->display("editar.tpl");

?>
