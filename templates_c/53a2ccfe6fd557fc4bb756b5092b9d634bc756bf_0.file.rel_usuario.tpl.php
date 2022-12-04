<?php
/* Smarty version 4.2.1, created on 2022-12-04 15:51:08
  from 'C:\xampp\htdocs\controle_funcionarios\templates\rel_usuario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_638cec1c447445_66046351',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53a2ccfe6fd557fc4bb756b5092b9d634bc756bf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\controle_funcionarios\\templates\\rel_usuario.tpl',
      1 => 1670179865,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638cec1c447445_66046351 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-md-9">
    <div class="panel panel-primary">
        <div class="panel panel-heading">
            <center><b>Relatório de Usuários - <?php echo $_smarty_tpl->tpl_vars['data_atual']->value;?>
</b></center>
        </div>
        <div class="panel-body" width="95%">
            <table id="tb_usuario" class="table table-striped table-bordered" cellspacing="0">
                <thead>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Usuário</th>
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
                </tr>                              
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
        </div>
        <center>
            <a href="index.php" class="btn btn-danger para_imprimir">Cancelar</a>
            <button class="btn btn-success para_imprimir" onclick="imprimir_rel()">Imprimir</button>
        </center>
        <br>
    </div>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
    function imprimir_rel() {
        $(".para_imprimir").hide();
        window.print();
        $(".para_imprimir").show();
    }
<?php echo '</script'; ?>
><?php }
}
