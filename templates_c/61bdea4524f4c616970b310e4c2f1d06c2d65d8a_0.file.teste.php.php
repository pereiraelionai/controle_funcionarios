<?php
/* Smarty version 4.2.1, created on 2022-11-02 15:36:22
  from 'C:\xampp\htdocs\smarty\templates\teste.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6362806661beb2_85432554',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61bdea4524f4c616970b310e4c2f1d06c2d65d8a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\templates\\teste.php',
      1 => 1667399776,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6362806661beb2_85432554 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smarty</title>
</head>
<body>
    <h1><?php echo $_smarty_tpl->tpl_vars['minha_var']->value;?>
</h1>
    <p><?php echo $_smarty_tpl->tpl_vars['var1']->value;?>
</p>
    <p><?php echo $_smarty_tpl->tpl_vars['var2']->value;?>
</p>
    <p><?php echo $_smarty_tpl->tpl_vars['var3']->value;?>
</p>

    <hr>

    <h2>Array de nomes</h2>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nomes']->value, 'dados', false, 'k');
$_smarty_tpl->tpl_vars['dados']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['dados']->value) {
$_smarty_tpl->tpl_vars['dados']->do_else = false;
?>
    <b>Nome: </b><?php echo $_smarty_tpl->tpl_vars['dados']->value['nome'];?>
<br>
    <b>Sobrenome: </b><?php echo $_smarty_tpl->tpl_vars['dados']->value['sobrenome'];?>
<br><br>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <a href="#" class="btn btn-success" >Botão</a>
</body>
</html><?php }
}
