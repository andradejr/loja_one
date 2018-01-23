<?php
function insereProduto($conexao,$nome,$preco,$descricao){
	$query = "INSERT INTO produtos (nome,preco,descricao) VALUES ('{$nome}',{$preco},'{$descricao}')";
	return mysqli_query($conexao,$query);

}

function mostraProduto($conexao){
	$produto = array();
$resultado = mysqli_query($conexao,"SELECT * FROM produtos");
while($produtos = mysqli_fetch_assoc($resultado)){
	array_push($produto,$produtos);
}
   return $produto;
}
//colocar a forma como está no banco de dados
function deletaProduto($conexao,$id){
   $query = "DELETE FROM produtos where id = {$id}";
     return mysqli_query($conexao,$query);
}
function listaCategoria($conexao){
	$categorias = [];
	$resultado = mysqli_query($conexao,"SELECT * FROM categorias");
	while($cat = mysqli_fetch_assoc($resultado)){
        array_push($categorias,$cat);
	}
    return $categorias;
}