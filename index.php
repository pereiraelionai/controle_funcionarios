<?php

session_start();
include('includes/config.ini.php');

$titulo = "Sistema de Gerencimaento";

//conexão com banco de dados
$conexao = conectar();

$smarty->assign('titulo', $titulo);
$smarty->display('cabecalho.tpl');
$smarty->display('menu.tpl');

if(isset($_GET['ac']) && $_GET['ac'] == 'inserir_usuario') {
    include('inserir_usuario.php');
} else if(isset($_GET['ac']) && $_GET['ac'] == 'editar_usuario') {
    include('editar_usuario.php');
} else if(isset($_GET['ac']) && $_GET['ac'] == 'editar') {
    include('editar.php');
}else if(!isset($_SESSION['usuario'])) {
    include("login.php");
} 


$smarty->display('rodape.tpl');

?>