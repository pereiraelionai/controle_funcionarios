<div class="col-md-9">
    <div class="panel panel-primary">
        <div class="panel panel-heading">
            <center><b>Relatório de Usuários - {$data_atual}</b></center>
        </div>
        <div class="panel-body" width="95%">
            <table id="tb_usuario" class="table table-striped table-bordered" cellspacing="0">
                <thead>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Usuário</th>
                </thead>
                {foreach from=$array_usuarios item=tb_usuario}
                <tr>
                    <td>{$tb_usuario.id_usuario}</td>
                    <td>{$tb_usuario.nome_completo}</td>
                    <td>{$tb_usuario.usuario}</td>
                </tr>                              
                {/foreach}
            </table>
        </div>
        <center>
            <a href="index.php" class="btn btn-danger para_imprimir">Cancelar</a>
            <button class="btn btn-success para_imprimir" onclick="imprimir_rel()">Imprimir</button>
        </center>
        <br>
    </div>
</div>

<script type="text/javascript">
    function imprimir_rel() {
        $(".para_imprimir").hide();
        window.print();
        $(".para_imprimir").show();
    }
</script>