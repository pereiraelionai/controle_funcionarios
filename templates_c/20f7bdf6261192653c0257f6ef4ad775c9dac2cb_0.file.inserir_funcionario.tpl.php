<?php
/* Smarty version 4.2.1, created on 2022-12-05 19:53:40
  from 'C:\xampp\htdocs\controle_funcionarios\templates\inserir_funcionario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_638e7674aec065_38459272',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20f7bdf6261192653c0257f6ef4ad775c9dac2cb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\controle_funcionarios\\templates\\inserir_funcionario.tpl',
      1 => 1670280818,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638e7674aec065_38459272 (Smarty_Internal_Template $_smarty_tpl) {
?>    <div class="default col-md-9">
        <div class="panel panel-primary">
            <div class="panel panel-heading">
                <center><b>Adicionar Funcionário</b></center>
            </div>
            <div class="panel-body" width="95%">
                <form name="inserir_usuario" method="post">
                    <?php echo $_smarty_tpl->tpl_vars['alerta']->value;?>

                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">
                                Nome Completo &nbsp
                            </span>
                            <input class="form-control" type="text" name="nome_completo" id="nome_completo" placeholder="Insira seu nome completo" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">
                                CPF &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                            </span>
                            <input class="form-control" type="text" name="cpf" id="cpf" placeholder="Insira seu CPF" required>
                        </div>
                    </div>                    

                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">
                                Endereço &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                            </span>
                            <input class="form-control" type="text" name="endereco" id="endereco" placeholder="Insira o seu endereço" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">
                                Telefone &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp
                            </span>
                            <input class="form-control" type="text" name="telefone" id="telefone" placeholder="Insira seu telefone" required>
                        </div>
                    </div>
                    
                    <center>
                        <input type="submit" name="btn_inserir" value="Inserir Funcionário" class="btn btn-primary">
                        <a href="index.php" class="btn btn-danger">&nbsp &nbsp Cancelar &nbsp &nbsp</a>
                    </center>

                </form>
            </div>
        </div>
    </div>
</div><?php }
}
