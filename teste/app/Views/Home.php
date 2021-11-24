<?php session_start(); ?>
<div id="main" class="container-fluid">
    <div id="top" class="row">
        <div class="col-md-3">
            <h2>Usuários</h2>
        </div>

        <div class="col-md-5">
            <div class="input-group h2">
                <?php if (logged()) : ?>
                    Bem Vindo <?php echo userLogged(); ?>
                <?php else : ?>
                    Bem Vindo Visitante
                <?php endif;  ?>
            </div>
        </div>

        <div class="col-md-4">
            <a href="/logout" class="btn btn-danger pull-right h2">Logout</a>
            <a class="btn btn-danger pull-right h2" style="margin-right: 15px;" href="#" data-toggle="modal" data-target="#delete-modal">Excluir Usuário</a>
            <a href="/user/create" class="btn btn-primary pull-right h2" style="margin-right: 15px;">Novo Usuário</a>


        </div>
    </div> <!-- /#top -->

</div> <!-- /#top -->

<hr />
<div id="list" class="row">

    <div class="table-responsive col-md-12">
        <table class="table table-striped" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Login</th>
                    <th>Senha</th>
                    <th class="actions">Ações</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($users as $user) : ?>
                    <tr>
                        <td><?php echo $user['id_login']; ?></td>
                        <td><?php echo $user['email']; ?></td>
                        <td><?php echo $user['user_login']; ?></td>
                        <td><?php echo $user['senha_login']; ?></td>
                        <td class="actions">
                            <a class="btn btn-warning btn-xs" href="/user/edit/">Editar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
</div> <!-- /#list -->

</div> <!-- /#list -->

</div> <!-- /#main -->

<!-- Modal -->
<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
    <form action="/user/deletar" method="POST">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="modalLabel">Excluir Item</h4>
                </div>
                <input type="text" class="form-control" id="id_login" name="id_login" placeholder="Digite o Id do Usuário" required>
            <div class="modal-body">Deseja realmente excluir este item? </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Sim</button>
                <a href="/home"><button type="button" class="btn btn-danger">N&atilde;o</button></a>
            </div>
        </div>
</div>
</form>
</div>