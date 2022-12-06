<div class="col-md-9">
    <div class="panel panel-primary">
        <div class="panel panel-heading">
            <center><b>Editar Funcionário</b></center>
        </div>
        <div class="panel-body" width="95%">
            <table id="tb_funcionario" class="table table-striped table-bordered" cellspacing="0">
                <thead>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Endereço</th>
                    <th>Telefone</th>
                    <th>Opções</th>
                </thead>
                {foreach from=$array_funcionario item=tb_funcionario}
                <tr>
                    <td>{$tb_funcionario.id_funcionario}</td>
                    <td>{$tb_funcionario.nome_completo}</td>
                    <td>{$tb_funcionario.cpf}</td>
                    <td>{$tb_funcionario.endereco}</td>
                    <td>{$tb_funcionario.telefone}</td>
                    <td>
                        <a href="index.php?ac=editar_func&id={$tb_funcionario.id_funcionario}" class="btn btn-warning">Editar</a>
                        <a href="index.php?ac=excluir_func&id={$tb_funcionario.id_funcionario}" class="btn btn-danger">Excluir</a>
                    </td>
                </tr>                              
                {/foreach}
            </table>
        </div>
    </div>
</div>

<!--
<script type="text/javascript">
    $(document).ready(function() {
        $('#tb_usuario').DataTable();
    });
</script>
-->