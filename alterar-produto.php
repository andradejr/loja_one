<?php
include('cabecalho.php');
include('function.php');
include('conecta.php');
$id = $_GET["id"];
$listaP = listaProduto($conexao,$id);
$usado = $listaP["usado"] ? "checked=checked":"";
?>

   <h1>Altera Cadastro</h1>
      <form action="adiciona-produto.php"method="post">
	    <input type="hidden" name="id" value="<?=$id?>">
      	<table class="table">
      		<tr>
			  <td><label>Nome</label></td>
			<td><input class="form-control" type="text" name="nome"value="<?=$listaP['nome']?>"></td>
      	    </tr>
      	    <tr>
			  <td><label>Preço</label></td>
      	     <td><input class="form-control" type="number" name="preco"value="<?=$listaP['preco']?>"></td>
      	    </tr>
			  <tr>
			  <td><label>Descrição</label></td>
      	     <td><textarea name="descricao"class="form-control"><?=$listaP['descricao']?></textarea></td>
      	    </tr>
			  <tr>
			      <td></td>
				  <td><input type="checkbox"name="usado"value="true"<?=$usado?>>Usado</td>
			  </tr>
			<tr>
			    <td>Categorias</td>
				<td>
				<select name="radio"class="form-control">
					 <?php foreach(listaCategoria($conexao) as $categoria):
						$essaEhCategoria = $listaP['categoria_id'] == $categoria['ID'];
						$selecao = $essaEhCategoria ? "selected='selected'" :"";
						?>
                       <option value="<?= $categoria['ID']?>"<?=$selecao?>>
					           <?= $categoria['nome']?>							   
                         </option>  
						 <?php endforeach ?>
					 </select>
				</td>
			</tr>
      	    <tr>
      	     <td><input class="btn btn-primary"type="submit" value="Alterar"></td>
      	    </tr>
      	     </table>
<?php include('rodape.php');?>

