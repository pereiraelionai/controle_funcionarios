<div class="col-md-9">
    <div class="panel panel-primary">
        <div class="panel panel-heading">
            <center><b>Editar Usuários</b></center>
        </div>
        <div class="panel-body" width="95%">
            <table id="tb_usuario" class="table table-striped table-bordered" cellspacing="0">
                <thead>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Usuário</th>
                    <th>Opções</th>
                </thead>
                {foreach from=$array_usuarios item=tb_usuario}
                <tr>
                    <td>{$tb_usuario.id_usuario}</td>
                    <td>{$tb_usuario.nome_completo}</td>
                    <td>{$tb_usuario.usuario}</td>
                    <td>
                        <a href="editar_usuario.php?id={$tb_usuario.id_usuario}" class="btn btn-warning">Editar</a>
                        <a href="excluir_usuario.php?id={$tb_usuario.id_usuario}" class="btn btn-danger">Excluir</a>
                    </td>
                </tr>                              
                {/foreach}
            </table>
        </div>
    </div>
</div>