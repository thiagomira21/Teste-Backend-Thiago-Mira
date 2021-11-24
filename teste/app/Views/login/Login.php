

<div class="box-parent-login">
	<div class="well bg-white box-login">
		<h1 class="ls-login-logo">Login</h1>
		<?php echo getFlash('message'); ?>
		<form role="form" action="/login" method="POST">
			<fieldset>
		
				<div class="form-group ls-login-user">
					<label for="userLogin">Usuário</label>
					<input class="form-control ls-login-bg-user input-lg" id="user" name="user" type="text" aria-label="Usuário" placeholder="Usuário">
				</div>
 
				<div class="form-group ls-login-password">
					<label for="userPassword">Senha</label>
					<input class="form-control ls-login-bg-password input-lg" id="senha" name="senha" type="password" aria-label="Senha" placeholder="Senha">
				</div>
  
				<input type="submit" value="Entrar" class="btn btn-primary btn-lg btn-block">
 
			</fieldset>
		</form>
	</div>
</div>