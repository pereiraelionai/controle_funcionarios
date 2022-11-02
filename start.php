<?php

include('includes/config.ini.php');


$minha_var = "Bem vindo ao curso de Smarty!!!";

$lista_nomes = array();
$lista_nomes[0]['nome'] = 'Elionai';
$lista_nomes[0]['sobrenome'] = 'Pereira';
$lista_nomes[1]['nome'] = 'Ligia';
$lista_nomes[1]['sobrenome'] = 'Pires';

$smarty->assign("minha_var", $minha_var);
$smarty->assign(array('var1' => 'HTML', 'var2' => 'PHP', 'var3' => 'JavaScript'));
$smarty->assign('nomes', $lista_nomes);
$smarty->display('start.php');

?>