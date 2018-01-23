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
			
			<?php
			   foreach(listaCategoria($conexao) as $categoria){?>
			   <tr>
			   <td>
			   <input class=""type="radio" value="<?=$categoria['ID']?>"><span><?= $categoria['nome']?></span><br>
			   </td>
      	      </tr>
			  <?php 
			}
			?>
      	     
      	    <tr>
      	     <td><input class="btn btn-primary"type="submit" value="Cadastra"></td>
      	    </tr>
			  
      	     </table>
<?php include('rodape.php');?>
