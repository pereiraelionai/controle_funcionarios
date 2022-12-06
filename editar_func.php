<?php

if($_POST) {
    $id_funcionario = $_POST['id_funcionario'];
    $nome_completo = $_POST['nome_completo'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $cpf = $_POST['cpf'];
    
    $sql = "UPDATE tb_funcionarios SET nome_completo = '$nome_completo', cpf = '$cpf', 
            endereco = '$endereco', telefone = '$telefone' WHERE id_funcionario = '$id_funcionario'";
    
    $result = mysqli_query($conexao, $sql);
       
    if($result == '') {
        echo "<script>alert('Erro ao atualizar'); location.replace('index.php?ac=editar_func&id=". $_GET['id'] ."'); </script>";
    } else {
        echo "<script>alert('Funcionário alterado com sucesso'); location.replace('index.php?ac=editar_funcionario'); </script>";
    }
};

$id_funcionario = $_GET['id'];

$sql = "SELECT * FROM tb_funcionarios WHERE id_funcionario = '$id_funcionario'";
$consultar_funcionarios = mysqli_query($conexao, $sql);

while($linha_dados = mysqli_fetch_array($consultar_funcionarios)) {
    $id_funcionario = $linha_dados['id_funcionario'];
    $nome_completo = $linha_dados['nome_completo'];
    $endereco = $linha_dados['endereco'];
    $telefone = $linha_dados['telefone'];
    $cpf = $linha_dados['cpf'];

};

$smarty->assign("id_funcionario", $id_funcionario);
$smarty->assign("nome_completo", $nome_completo);
$smarty->assign("endereco", $endereco);
$smarty->assign("telefone", $telefone);
$smarty->assign("cpf", $cpf);
$smarty->display("editar_func.tpl");

?>
