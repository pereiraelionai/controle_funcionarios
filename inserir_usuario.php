<?php

$alerta = '';

if($_POST) {
    $nome_completo = $_POST['nome_completo'];
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $confirm_senha = $_POST['confirm_senha'];

    //result para verificar se o usuário já existe no banco
    $sql = "SELECT * FROM tb_usuarios WHERE usuario = '{$usuario}'";
    $result = mysqli_query($conexao, $sql);

    if($senha != $confirm_senha) {
        $alerta = "<div class='alert-danger mb-3'>As senhas não são iguais</div>";
    } else if(mysqli_num_rows($result) > 0) {
        $alerta = "<div class='alert-danger mb-3'>Usuário já cadastrado!</div>";
    } else if(empty($nome_completo)) {
        $alerta = "<div class='alert-danger mb-3'>Digite o nome do usuário!</div>";
    } else {
        $sql_cadastro = "INSERT INTO tb_usuarios(nome_completo, usuario, senha, confirm_senha)
                        VALUES('{$nome_completo}', '{$usuario}', '{$senha}', '{$confirm_senha}')";

        $cadastra = mysqli_query($conexao, $sql_cadastro);

        if($cadastra == '') {
            $alerta = "<div class='alert-danger mb-3'>Erro ao cadastrar usuário!</div>";
        } else {
            $alerta = "<div class='alert-success mb-3'>Usuário cadastrado com sucesso!</div>";
        }

    }

}

$smarty->assign('alerta', $alerta);
$smarty->display('inserir_usuario.tpl');


?>