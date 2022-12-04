<div class="default col-md-9">
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
                        <input class="form-control" type="text" name="nome_completo" id="nome_completo" placeholder="Insira seu nome completo" value="{$nome_completo}" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            Nome Usuário &nbsp &nbsp
                        </span>
                        <input class="form-control" type="text" name="usuario" id="usuario" placeholder="Insira o nome de usuário" value="{$usuario}" required>
                    </div>
                </div>

                <input type="hidden" id="id_usuario" name="id_usuario" value="{$id_usuario}">

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            Senha &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                        </span>
                        <input class="form-control" type="password" name="senha" id="senha" placeholder="Insira sua senha" value="{$senha}" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            Confirmar Senha
                        </span>
                        <input class="form-control" type="password" name="confirm_senha" id="confirm_senha" placeholder="Confirme a senha" value="{$confirm_senha}" required>
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
</div>