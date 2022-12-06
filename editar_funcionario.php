<?php

$sql = 'SELECT * FROM tb_funcionarios';
$consultar_funcionarios = mysqli_query($conexao, $sql);
$array_funcionarios = array();

while($linha_dados = mysqli_fetch_array($consultar_funcionarios)) {
    $array_funcionarios[] = $linha_dados;
}

$smarty->assign("array_funcionario", $array_funcionarios);
$smarty->display('editar_funcionario.tpl');

?>