<?php
function insereProduto($conexao,$nome,$preco,$descricao,$categoria_id,$usado){
	$query = "INSERT INTO produtos (nome,preco,descricao,categoria_id,usado) VALUES ('{$nome}',{$preco},'{$descricao}',{$categoria_id},{$usado})";
	return mysqli_query($conexao,$query);

}

function mostraProduto($conexao){
	$produto = array();
$resultado = mysqli_query($conexao,"SELECT p.*,c.nome as categoria_nome FROM produtos as p join categorias as c on p.categoria_id=c.id");
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
function listaProduto($conexao,$id){
	$query = "SELECT * FROM produtos WHERE id = {$id} ";
	$resultado = mysqli_query($conexao,$query);
	return mysqli_fetch_assoc($resultado);
}
function alteraProduto($conexao,$id,$nome,$preco,$descricao,$categoria_id,$usado){
	$query = "update produtos set nome = '{$nome}',preco = {$preco},descricao = '{$descricao}',categoria_id = {$categoria_id},usado = {$usado} where ID = {$id}";
	return mysqli_query($conexao,$query);
}