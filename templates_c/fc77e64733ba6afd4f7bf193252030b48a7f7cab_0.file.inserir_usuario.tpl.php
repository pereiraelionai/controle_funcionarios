<?php
/* Smarty version 4.2.1, created on 2022-11-06 20:42:33
  from 'C:\xampp\htdocs\smarty\templates\inserir_usuario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63680e295bca07_60220644',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc77e64733ba6afd4f7bf193252030b48a7f7cab' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\templates\\inserir_usuario.tpl',
      1 => 1667763746,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63680e295bca07_60220644 (Smarty_Internal_Template $_smarty_tpl) {
?>    <div class="default col-md-9">
        <div class="panel panel-primary">
            <div class="panel panel-heading">
                <center><b>Adicionar Usuário</b></center>
            </div>
            <div class="panel-body" width="95%">
                <form name="inserir_usuario" method="post">
                    <?php echo $_smarty_tpl->tpl_vars['alerta']->value;?>

                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">
                                Nome Completo &nbsp
                            </span>
                            <input class="form-control" type="text" name="nome_completo" id="nome_completo" placeholder="Insira seu nome completo" value="<?php echo $_POST['nome_completo'];?>
" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">
                                Nome Usuário &nbsp &nbsp
                            </span>
                            <input class="form-control" type="text" name="usuario" id="usuario" placeholder="Insira o nome de usuário" value="<?php echo $_POST['usuario'];?>
" required>
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
                    
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">
                                Confirmar Senha
                            </span>
                            <input class="form-control" type="password" name="confirm_senha" id="confirm_senha" placeholder="Confirme a senha" required>
                        </div>
                    </div>
                    
                    <center>
                        <input type="submit" name="btn_inserir" value="Inserir Usuário" class="btn btn-primary">
                        <a href="index.php" class="btn btn-danger">&nbsp &nbsp Cancelar &nbsp &nbsp</a>
                    </center>

                </form>
            </div>
        </div>
    </div>
</div><?php }
}
