<?php
/* Smarty version 4.2.1, created on 2022-11-30 21:45:05
  from 'C:\xampp\htdocs\controle_funcionarios\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6387f91124dec9_18445151',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1db68e3f1a9711a63d34821810160e1166c465ec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\controle_funcionarios\\templates\\login.tpl',
      1 => 1669855501,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6387f91124dec9_18445151 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="default col-md-9">
    <div class="panel panel-primary">
        <div class="panel panel-heading">
            <center><b>Efetuar Login</b></center>
        </div>
        <div class="panel-body" width="95%">
            <form name="loginu" method="post">
                <?php echo $_smarty_tpl->tpl_vars['alerta']->value;?>

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            Nome Usuário &nbsp &nbsp
                        </span>
                        <input class="form-control" type="text" name="usuario" id="usuario" placeholder="Insira o nome de usuário" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            Senha &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                        </span>
                        <input class="form-control" type="password" name="senha" id="senha" placeholder="Insira sua senha" required>
                    </div>
                </div>
                
                <center>
                    <input type="submit" name="btn_login" value="Logar" class="btn btn-primary">
                </center>

            </form>
        </div>
    </div>
</div>
</div><?php }
}
