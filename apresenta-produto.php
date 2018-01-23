<?php
$nome = $_POST["nome"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
include("cabecalho.php");
include("conecta.php");
include("function.php");

if(insereProduto($conexao,$nome,$preco,$descricao)){?>
      
      <p class="text-success">O produto <?= $nome;?>,que custa <?= $preco;?> ,foi cadastrado com sucesso.</p>

<?php }else{
     
     $msg = mysqli_error($conexao);

	?>
     
     <p class="text-danger">O produto <?= $nome;?>, não foi cadastrado com sucesso:<?= $msg ?></p>

<?php
mysqli_close($conexao);

}

?>
	

	<?php include("rodape.php"); ?>
