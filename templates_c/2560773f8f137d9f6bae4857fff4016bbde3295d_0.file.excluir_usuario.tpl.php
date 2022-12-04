<?php
/* Smarty version 4.2.1, created on 2022-12-04 15:34:27
  from 'C:\xampp\htdocs\controle_funcionarios\templates\excluir_usuario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_638ce833877a18_89838289',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2560773f8f137d9f6bae4857fff4016bbde3295d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\controle_funcionarios\\templates\\excluir_usuario.tpl',
      1 => 1670178863,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638ce833877a18_89838289 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-md-9">
    <div class="panel panel-primary">
        <div class="panel panel-heading">
            <center><b>Editar Usuários</b></center>
        </div>
        <div class="panel-body" width="95%">
            <div class="alert alert-danger" role="alert">
                <h3>
                    <span class="sr-only">Erro:</span>
                    Deseja excluir o usuário <b><?php echo $_smarty_tpl->tpl_vars['nome_completo']->value;?>
</b>
                </h3>
                <hr>
                Ao excluir o usuário perderá todos os privilégios e todas as suas informações serão excluídas do banco de dados!!!
                <br>
                <br>
                <center>
                    <a class="btn btn-primary" href="index.php?ac=excluir_usuario&id=<?php echo $_smarty_tpl->tpl_vars['id_usuario']->value;?>
&opc=del">Excluir definitivamente</a>
                    <a class="btn btn-danger" href="index.php">Cancelar</a>
                </center>
            </div>
        </div>
    </div>
</div><?php }
}
