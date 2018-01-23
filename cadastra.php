<?php include('cabecalho.php');?>
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
			   <td><input class="btn btn-primary"type="radio" value="categorias"><?php $categoria['nome'] ?> </td>
      	      </tr>
			  <?php 
			}
			?>
      	     
      	    <tr>
      	     <td><input class="btn btn-primary"type="submit" value="Cadastra"></td>
      	    </tr>
			  
      	     </table>
<?php include('rodape.php');?>
