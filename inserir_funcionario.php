<?php

$alerta = '';

if($_POST) {
    $nome_completo = $_POST['nome_completo'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $cpf = $_POST['cpf'];

    //result para verificar se o usuário já existe no banco
    $sql = "SELECT * FROM tb_funcionarios WHERE cpf = '{$cpf}'";
    $result = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($result) > 0) {
        $alerta = "<div class='alert-danger mb-3'>Funcionário já existe no banco!</div>";
    } else if(empty($nome_completo)) {
        $alerta = "<div class='alert-danger mb-3'>Digite o nome do usuário!</div>";
    } else {
        $sql_cadastro = "INSERT INTO tb_funcionarios(nome_completo, cpf, endereco, telefone)
                        VALUES('{$nome_completo}', '{$cpf}', '{$endereco}', '{$telefone}')";

        $cadastra = mysqli_query($conexao, $sql_cadastro);

        if($cadastra == '') {
            $alerta = "<div class='alert-danger mb-3'>Erro ao cadastrar funcionário!</div>";
        } else {
            $alerta = "<div class='alert-success mb-3'>Funcionário cadastrado com sucesso!</div>";
        }

    }

}

$smarty->assign('alerta', $alerta);
$smarty->display('inserir_funcionario.tpl');


?>