<?php 
  include("cabecalho.php");
  include("rodape.php");
  include("conecta.php");
  include("function.php");
  //include("banco-mostra.php");
  $id = $_POST["id"];
  deletaProduto($conexao,$id);
  header("location:mostra-produto.php?removido=true");
?>
