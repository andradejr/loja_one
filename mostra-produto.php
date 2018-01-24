
<?php 
include("cabecalho.php");
include("conecta.php");
include("function.php");
include("rodape.php");


if(array_key_exists("removido",$_GET) && $_GET["removido"] == true){
?>
    <div class="container">
	<p class="text-success">O produto foi removido com sucesso</p>
	</div>
<?php
}
?>
<div class="container">
<form action="remove-produto.php"method="post">
<table class="table table-bordered table-striped">
	<?php
foreach(mostraProduto($conexao) as $produtos){ ?>

   <tr>
	<td><?=  $produtos['nome'];?></td>
	<td><?=  $produtos['preco'];?></td>
	<td><?=  substr($produtos['descricao'],0,40)?></td>
	<td><?= $produtos['categoria_nome']?></td>
	<input type="hidden" name="id" value="<?=$produtos['ID']?>"/>
	<td><a href="alterar-produto.php?id=<?= $produtos["ID"]?>"class="btn btn-primary">Alterar</a></td>
	<td><button type="submit" class="btn btn-danger">Remover</button></td>
  </tr>

<?php 
}
?>
</table>
</form>
</div>