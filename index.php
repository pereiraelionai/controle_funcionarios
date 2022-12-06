<?php

$botao = '';

session_start();
include('includes/config.ini.php');

$titulo = "Sistema de Gerencimaento";

//conexão com banco de dados
$conexao = conectar();

$smarty->assign('titulo', $titulo);
$smarty->display('cabecalho.tpl');
if(!isset($_SESSION['usuario'])) {
    $botao = 'disabled';
}
$smarty->assign('botao', $botao);
$smarty->display('menu.tpl');

if(isset($_GET['ac']) && $_GET['ac'] == 'inserir_usuario') {
    include('inserir_usuario.php');
} else if(isset($_GET['ac']) && $_GET['ac'] == 'editar_usuario') {
    include('editar_usuario.php');
} else if(isset($_GET['ac']) && $_GET['ac'] == 'editar') {
    include('editar.php');
}else if(isset($_GET['ac']) && $_GET['ac'] == 'inserir_funcionario') {
    include('inserir_funcionario.php');
} else if(isset($_GET['ac']) && $_GET['ac'] == 'editar_funcionario') {
    include('editar_funcionario.php');
} else if(isset($_GET['ac']) && $_GET['ac'] == 'editar_func') {
    include('editar_func.php');
}else if(isset($_GET['ac']) && $_GET['ac'] == 'excluir') {
    include('excluir_usuario.php');
} else if (isset($_GET['ac']) && $_GET['ac'] == 'excluir_usuario') {
    include('excluir_usuario.php');
}else if(isset($_GET['ac']) && $_GET['ac'] == 'rel_usuario') {
    include('rel_usuario.php');
}else if(!isset($_SESSION['usuario'])) {
    include("login.php");
} else {
    ?>
        <div class="default col-md-9">
            <img src="includes/img/login.jpeg" alt="50%">
        </div>

    <?php
}


$smarty->display('rodape.tpl');

?>