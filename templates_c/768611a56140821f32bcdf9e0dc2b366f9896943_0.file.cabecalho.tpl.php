<?php
/* Smarty version 4.2.1, created on 2022-12-04 15:53:46
  from 'C:\xampp\htdocs\controle_funcionarios\templates\cabecalho.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_638cecba6b51c5_62502009',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '768611a56140821f32bcdf9e0dc2b366f9896943' => 
    array (
      0 => 'C:\\xampp\\htdocs\\controle_funcionarios\\templates\\cabecalho.tpl',
      1 => 1670180007,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638cecba6b51c5_62502009 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>

    <link rel="stylesheet" type="text/css" href="templates/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="templates/css/bootstrap3.min.css">
    <link rel="stylesheet" type="text/css" href="templates/css/dataTable.min.css">
    <link rel="stylesheet" type="text/css" href="templates/css/fontawesome.min.css">

    <?php echo '<script'; ?>
 type="text/javascript" src="templates/js/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="templates/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="templates/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="templates/js/dataTables.bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://kit.fontawesome.com/bb3315e9fa.js" crossorigin="anonymous"><?php echo '</script'; ?>
>

</head>
<body>

    <div class="container" style="width: 90%;">
        <div class="row">
            <div class="col-12 text-center mb-5 para_imprimir">
                <h1 class="display-4"><i class="fas fa-user-friends text-secondary"></i> Sistema de Gerenciamento</h1>
                <p style="font-size: 20px;">Controle de funcionários</p>
            </div>
        </div>

<?php }
}
