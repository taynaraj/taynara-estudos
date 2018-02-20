<?php require_once("cabecalho.php");
require_once("banco-produto.php");
?>
<?php  
mostraAlerta("success");
?>

<table class="table table-striped table-bordered">
<thead>
	<th>Produto</th>
	<th>Preço</th>
	<th>Descrição</th>
	<th>Categoria</th>
	<th>Usado</th>
	<th>Alterar</th>
	<th>Remover Produto</th>
</thead>
<?php 
$produtos = listaProdutos($conexao);
foreach($produtos as $produto) :
?>
<tr>
	<td><?=$produto['nome'];?></td>
	<td><?=$produto['preco'];?></td>
	<td><?= substr($produto['descricao'],0,40);?></td>
	<td><?= $produto['categoria_nome'];?></td>
	<td><?= $produto['usado'];?></td>
	<td><a href="produto-altera-formulario.php?id=<?=$produto['id']?>" class="btn btn-primary">alterar</a>
	<td>
		<form action="remove-produto.php" method="POST">
			<input type="hidden" name="id" value="<?=$produto['id']?>"/>
			<button class="btn btn-danger">remover</button>
		</form>	
	</td>
</tr>
<?php
	endforeach
?>

<?php include("rodape.php") ?>