<?php session_start(); ?>
<div id="main" class="container-fluid">
    <div id="top" class="row">
        <div class="col-md-5">
            <h2>Cadastro de Usuários</h2>
        </div>

        <div class="col-md-6">
            <div class="input-group h2">
                <?php if (logged()) : ?>
                    Bem Vindo <?php echo userLogged(); ?>
                <?php else : ?>
                    Visitante
                <?php endif;  ?>
            </div>
        </div>

        <div class="col-md-1">
            <a href="/logout" class="btn btn-danger pull-right h2">Logout</a>
        </div>
    </div> <!-- /#top -->

</div> <!-- /#top -->

<hr />

<form action="/user/store" method="POST">
<div class="form-group">
  <label for="exampleInputEmail1">Email</label>
    <input type="text" class="form-control" id="email" name="email" placeholder="Digite seu Email" required>
    
  </div>
  <?php  echo getFlash('email'); ?>
  <div class="form-group">
    <label for="exampleInputEmail1">Usuário</label>
    <input type="text" class="form-control" id="user_login" name="user_login" aria-describedby="emailHelp" placeholder="Digite seu nome de Usuário" required>
    <?php  echo getFlash('user'); ?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control" id="senha_login" name="senha_login" placeholder="Digite sua Senha" required>
    <?php  echo getFlash('password'); ?> 
  </div>
  
  <div class="form-check">
  </div>
  <a href="/home"><button type="button" class="btn btn-danger">Voltar</button></a>
  <button type="submit" class="btn btn-success">Cadastrar</button>
</form>