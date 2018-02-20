<?php
include("cabecalho.php");
include("banco-categoria.php");
include("logica-usuario.php");

verificaUsuario();

$produto = array("nome" => "", "descricao" =>"", "preco" => "","categoria_id" =>"3");
$usado ="";
$categorias = listaCategorias($conexao);
?>
			<h1>Formulário de produto</h1>

			<form action="adiciona-produto.php" method="POST">
				<table class="table">
					<?php include("produto-formulario-base.php");?>
					<tr>
						<td>
							<input type="submit" class="btn btn-primary" value="Cadastrar">
						</td>
					</tr>
				</table>	

			</form>
<?php include("rodape.php") ?>
