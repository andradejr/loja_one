<?php
include("cabecalho.php");
include("conecta.php");
include("function.php");

$nome = $_POST["nome"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
$categoria_id = $_POST["radio"];

if(array_key_exists("usado",$_POST)){
      $usado = "true";
}else{
      $usado = "false";
}

if(insereProduto($conexao,$nome,$preco,$descricao,$categoria_id,$usado)){?>
      
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
