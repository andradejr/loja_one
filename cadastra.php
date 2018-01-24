<?php include('cabecalho.php');?>
<?php include('function.php')?>
<?php include('conecta.php')?>
   <h1>Formulário de Cadastro</h1>
      <form action="apresenta-produto.php"method="post">
      	<table class="table">
      		<tr>
			  <td><label>Nome</label></td>
			<td><input class="form-control" type="text" name="nome"></td>
      	    </tr>
      	    <tr>
			  <td><label>Preço</label></td>
      	     <td><input class="form-control" type="number" name="preco"></td>
      	    </tr>
			  <tr>
			  <td><label>Descrição</label></td>
      	     <td><textarea name="descricao"class="form-control"></textarea></td>
      	    </tr>
			  <tr>
			      <td></td>
				  <td><input type="checkbox"name="usado"value="true">Usado</td>
			  </tr>
			<tr>
			    <td>Categorias</td>
				<td>
				<select name="radio"class="form-control">
				     <?php foreach(listaCategoria($conexao) as $categoria):?>
                       <option value="<?= $categoria['ID']?>">
					           <?= $categoria['nome']?>							   
                         </option>  
						 <?php endforeach ?>
					 </select>
				</td>
			</tr>
      	    <tr>
      	     <td><input class="btn btn-primary"type="submit" value="Cadastra"></td>
      	    </tr>
      	     </table>
<?php include('rodape.php');?>
