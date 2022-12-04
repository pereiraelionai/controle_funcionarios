<div class="col-md-9">
    <div class="panel panel-primary">
        <div class="panel panel-heading">
            <center><b>Editar Usuários</b></center>
        </div>
        <div class="panel-body" width="95%">
            <div class="alert alert-danger" role="alert">
                <h3>
                    <span class="sr-only">Erro:</span>
                    Deseja excluir o usuário <b>{$nome_completo}</b>
                </h3>
                <hr>
                Ao excluir o usuário perderá todos os privilégios e todas as suas informações serão excluídas do banco de dados!!!
                <br>
                <br>
                <center>
                    <a class="btn btn-primary" href="index.php?ac=excluir_usuario&id={$id_usuario}&opc=del">Excluir definitivamente</a>
                    <a class="btn btn-danger" href="index.php">Cancelar</a>
                </center>
            </div>
        </div>
    </div>
</div>