<div class="default col-md-9">
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
                        <input class="form-control" type="text" name="nome_completo" id="nome_completo" placeholder="Insira seu nome completo" value="{$nome_completo}" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            CPF &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                        </span>
                        <input class="form-control" type="text" name="cpf" id="cpf" placeholder="Insira seu CPF" value="{$cpf}" required>
                    </div>
                </div>               
                
                <input type="hidden" id="id_funcionario" name="id_funcionario" value="{$id_funcionario}">

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            Endereço &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                        </span>
                        <input class="form-control" type="text" name="endereco" id="endereco" value="{$endereco}" placeholder="Insira o seu endereço" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            Telefone &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp
                        </span>
                        <input class="form-control" type="text" name="telefone" id="telefone" value="{$telefone}" placeholder="Insira seu telefone" required>
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
</div>