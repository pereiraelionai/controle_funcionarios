<?php
/* Smarty version 4.2.1, created on 2022-12-05 20:53:03
  from 'C:\xampp\htdocs\controle_funcionarios\templates\editar_func.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_638e845f43bdf0_27220159',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7451510b0ea5a3c6511459b5cda8d1be5197689a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\controle_funcionarios\\templates\\editar_func.tpl',
      1 => 1670284332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638e845f43bdf0_27220159 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="default col-md-9">
    <div class="panel panel-primary">
        <div class="panel panel-heading">
            <center><b>Editar Funcionário</b></center>
        </div>
        <div class="panel-body" width="95%">
            <form name="inserir_funcionario" method="post">
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
                            CPF &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                        </span>
                        <input class="form-control" type="text" name="cpf" id="cpf" placeholder="Insira seu CPF" value="<?php echo $_smarty_tpl->tpl_vars['cpf']->value;?>
" required>
                    </div>
                </div>               
                
                <input type="hidden" id="id_funcionario" name="id_funcionario" value="<?php echo $_smarty_tpl->tpl_vars['id_funcionario']->value;?>
">

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            Endereço &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                        </span>
                        <input class="form-control" type="text" name="endereco" id="endereco" value="<?php echo $_smarty_tpl->tpl_vars['endereco']->value;?>
" placeholder="Insira o seu endereço" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            Telefone &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp
                        </span>
                        <input class="form-control" type="text" name="telefone" id="telefone" value="<?php echo $_smarty_tpl->tpl_vars['telefone']->value;?>
" placeholder="Insira seu telefone" required>
                    </div>
                </div>
                
                <center>
                    <input type="submit" name="btn_inserir" value="Editar Funcionário" class="btn btn-primary">
                    <a href="index.php" class="btn btn-danger">&nbsp &nbsp Cancelar &nbsp &nbsp</a>
                </center>

            </form>
        </div>
    </div>
</div>
</div><?php }
}
