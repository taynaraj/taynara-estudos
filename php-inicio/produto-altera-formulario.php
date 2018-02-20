<?php
require_once("cabecalho.php");
require_once("conecta.php");
require_once("banco-categoria.php");
require_once("banco-produto.php");


$id= $_GET['id'];
$produto = buscaProduto($conexao,$id);
$categorias = listaCategorias($conexao);
$usado=$produto['usado'] ?"checked='checked'":"";
?>
			<h1>Alterando Produto</h1>

			<form action="altera-produto.php" method="POST">
				<input type="hidden" name="id" value="<?=$produto['id']?>">
				<table class="table">
					<?php include("produto-formulario-base.php");?>
					<tr>
						<td>
							<input type="submit" class="btn btn-primary" value="Alterar">
						</td>
					</tr>
				</table>	

			</form>
<?php include("rodape.php") ?>
