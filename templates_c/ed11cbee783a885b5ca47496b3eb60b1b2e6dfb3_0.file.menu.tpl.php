<?php
/* Smarty version 4.2.1, created on 2022-12-05 20:15:01
  from 'C:\xampp\htdocs\controle_funcionarios\templates\menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_638e7b75b08c15_48431831',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed11cbee783a885b5ca47496b3eb60b1b2e6dfb3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\controle_funcionarios\\templates\\menu.tpl',
      1 => 1670282093,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638e7b75b08c15_48431831 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
    <div class="default col-md-3 para_imprimir">
        <div class="list-group">
            <a href="#" class="list-group-item active">Menu de Usuários</a>
            <a href="index.php?ac=inserir_usuario" class="list-group-item <?php echo $_smarty_tpl->tpl_vars['botao']->value;?>
">Inserir Usuário</a>
            <a href="index.php?ac=editar_usuario" class="list-group-item <?php echo $_smarty_tpl->tpl_vars['botao']->value;?>
">Editar Usuário</a>
            <a href="index.php?ac=rel_usuario" class="list-group-item">Relatório Usuário</a>
            <a href="sair.php" class="list-group-item">Sair</a>
        </div>

        <div class="list-group mt-3">
            <a href="#" class="list-group-item active">Menu de Funcionários</a>
            <a href="index.php?ac=inserir_funcionario" class="list-group-item">Inserir Funcionário</a>
            <a href="index.php?ac=editar_funcionario" class="list-group-item">Editar Funcionário</a>
            <a href="#" class="list-group-item">Relatório Funcionário</a>
            <a href="#" class="list-group-item">Sair</a>
        </div>    
    </div><?php }
}
