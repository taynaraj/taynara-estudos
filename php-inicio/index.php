<?php require_once("logica-usuario.php") ?>
<?php require_once("cabecalho.php") ?>

				<h1>Bem vindo!</h1>	

				<?php if(usuarioEstaLogado()) {?>
					<p class="text-success">Você está logado como <?= usuarioLogado()?></p>
					<a href="logout.php">Deslogar</a>
				<?php } else {?>

				<form action="login.php" method="post">
					<h1>- Login -</h1>	
					<table>
						<tr>
							<td>E-mail</td>
							<td><input class="form-control" type="email" name="email"></td>
						</tr>
						<tr>
							<td>Senha</td>
							<td><input class="form-control" type="password" name="senha"></td>
						</tr>
						<tr>
							<td><button type="submit" class="btn btn-primary">Login</button></td>
						</tr>
					</table>
				</form>
			<?php }?>

<?php include("rodape.php") ?>