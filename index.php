<?php

include('includes/config.ini.php');

$titulo = "Sistema de Gerencimaento";


$smarty->assign('titulo', $titulo);
$smarty->display('cabecalho.tpl');
$smarty->display('menu.tpl');

if(isset($_GET['ac']) && $_GET['ac'] == 'inserir_usuario') {
    include('inserir_usuario.php');
}

$smarty->display('rodape.tpl');

?>