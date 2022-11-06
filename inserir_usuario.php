<?php

conectar();

$alerta = '';

if($_POST) {
    $nome_completo = $_POST['nome_completo'];
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $confirm_senha = $_POST['confirm_senha'];

    if($senha != $confirm_senha) {
        $alerta = "<div class='alert-danger mb-3' role='alert'><span class='fas fa-exclamation-triangle mr-3'>As senhas não são iguais</span></div>";
    }

}

$smarty->assign('alerta', $alerta);
$smarty->display('inserir_usuario.tpl');


?>