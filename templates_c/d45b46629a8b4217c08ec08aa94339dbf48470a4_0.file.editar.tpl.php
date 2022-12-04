<?php
/* Smarty version 4.2.1, created on 2022-12-03 22:34:15
  from 'C:\xampp\htdocs\controle_funcionarios\templates\editar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_638bf917a67f62_76993867',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd45b46629a8b4217c08ec08aa94339dbf48470a4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\controle_funcionarios\\templates\\editar.tpl',
      1 => 1670117651,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638bf917a67f62_76993867 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="default col-md-9">
    <div class="panel panel-primary">
        <div class="panel panel-heading">
            <center><b>Editar Usuário</b></center>
        </div>
        <div class="panel-body" width="95%">
            <form name="inserir_usuario" method="post">
                
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            Nome Completo &nbsp
                        </span>
                        <input class="form-control" type="text" name="nome_completo" id="nome_completo" placeholder="Insira seu nome completo" value="<?php echo $_smarty_tpl->tpl_vars['nome_completo']->value;?>
" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            Nome Usuário &nbsp &nbsp
                        </span>
                        <input class="form-control" type="text" name="usuario" id="usuario" placeholder="Insira o nome de usuário" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
" required>
                    </div>
                </div>

                <input type="hidden" id="id_usuario" name="id_usuario" value="<?php echo $_smarty_tpl->tpl_vars['id_usuario']->value;?>
">

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            Senha &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                        </span>
                        <input class="form-control" type="password" name="senha" id="senha" placeholder="Insira sua senha" value="<?php echo $_smarty_tpl->tpl_vars['senha']->value;?>
" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            Confirmar Senha
                        </span>
                        <input class="form-control" type="password" name="confirm_senha" id="confirm_senha" placeholder="Confirme a senha" value="<?php echo $_smarty_tpl->tpl_vars['confirm_senha']->value;?>
" required>
                    </div>
                </div>
                
                <center>
                    <input type="submit" name="btn_editar" value="Editar Usuário" class="btn btn-primary">
                    <a href="index.php" class="btn btn-danger">&nbsp &nbsp Cancelar &nbsp &nbsp</a>
                </center>

            </form>
        </div>
    </div>
</div>
</div><?php }
}
