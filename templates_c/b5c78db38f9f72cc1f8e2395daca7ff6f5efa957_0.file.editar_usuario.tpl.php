<?php
/* Smarty version 4.2.1, created on 2022-11-30 22:06:53
  from 'C:\xampp\htdocs\controle_funcionarios\templates\editar_usuario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6387fe2de181a4_64135362',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5c78db38f9f72cc1f8e2395daca7ff6f5efa957' => 
    array (
      0 => 'C:\\xampp\\htdocs\\controle_funcionarios\\templates\\editar_usuario.tpl',
      1 => 1669856811,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6387fe2de181a4_64135362 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-md-9">
    <div class="panel panel-primary">
        <div class="panel panel-heading">
            <center><b>Editar Usuários</b></center>
        </div>
        <div class="panel-body" width="95%">
            <table id="tb_usuario" class="table table-striped table-bordered" cellspacing="0">
                <thead>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Usuário</th>
                    <th>Opções</th>
                </thead>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['array_usuarios']->value, 'tb_usuario');
$_smarty_tpl->tpl_vars['tb_usuario']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tb_usuario']->value) {
$_smarty_tpl->tpl_vars['tb_usuario']->do_else = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['tb_usuario']->value['id_usuario'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['tb_usuario']->value['nome_completo'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['tb_usuario']->value['usuario'];?>
</td>
                    <td>
                        <a href="editar_usuario.php?id=<?php echo $_smarty_tpl->tpl_vars['tb_usuario']->value['id_usuario'];?>
" class="btn btn-warning">Editar</a>
                        <a href="editar_usuario.php?id=<?php echo $_smarty_tpl->tpl_vars['tb_usuario']->value['id_usuario'];?>
" class="btn btn-danger">Excluir</a>
                    </td>
                </tr>                              
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
        </div>
    </div>
</div><?php }
}
