<div class="default col-md-9">
    <div class="panel panel-primary">
        <div class="panel panel-heading">
            <center><b>Efetuar Login</b></center>
        </div>
        <div class="panel-body" width="95%">
            <form name="loginu" method="post">
                {$alerta}
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
</div>