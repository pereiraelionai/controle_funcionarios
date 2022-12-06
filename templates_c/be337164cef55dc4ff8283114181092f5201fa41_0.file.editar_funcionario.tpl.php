<?php
/* Smarty version 4.2.1, created on 2022-12-05 20:15:05
  from 'C:\xampp\htdocs\controle_funcionarios\templates\editar_funcionario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_638e7b79cee5a1_58071330',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be337164cef55dc4ff8283114181092f5201fa41' => 
    array (
      0 => 'C:\\xampp\\htdocs\\controle_funcionarios\\templates\\editar_funcionario.tpl',
      1 => 1670281767,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638e7b79cee5a1_58071330 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-md-9">
    <div class="panel panel-primary">
        <div class="panel panel-heading">
            <center><b>Editar Funcionário</b></center>
        </div>
        <div class="panel-body" width="95%">
            <table id="tb_funcionario" class="table table-striped table-bordered" cellspacing="0">
                <thead>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Endereço</th>
                    <th>Telefone</th>
                    <th>Opções</th>
                </thead>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['array_funcionario']->value, 'tb_funcionario');
$_smarty_tpl->tpl_vars['tb_funcionario']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tb_funcionario']->value) {
$_smarty_tpl->tpl_vars['tb_funcionario']->do_else = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['tb_funcionario']->value['id_funcionario'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['tb_funcionario']->value['nome_completo'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['tb_funcionario']->value['cpf'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['tb_funcionario']->value['endereco'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['tb_funcionario']->value['telefone'];?>
</td>
                    <td>
                        <a href="index.php?ac=editar_func&id=<?php echo $_smarty_tpl->tpl_vars['tb_funcionario']->value['id_funcionario'];?>
" class="btn btn-warning">Editar</a>
                        <a href="index.php?ac=excluir_func&id=<?php echo $_smarty_tpl->tpl_vars['tb_funcionario']->value['id_funcionario'];?>
" class="btn btn-danger">Excluir</a>
                    </td>
                </tr>                              
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
        </div>
    </div>
</div>

<!--
<?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function() {
        $('#tb_usuario').DataTable();
    });
<?php echo '</script'; ?>
>
--><?php }
}
