<?php 
#require_once 'db.php';


function pegaData(){
	$data = date("d/m/Y");
	echo $data;

	//passa a data atual ja formatada
}


function getNumFichaCadastral($conexao){
	$query = "select id from table";
	$resultado = mysqli_query($conexao, $query);
	$id += $resultado; 
	return $id;

	//seleciona o id do paciente anterior e adiciona 1, para apresentar na view de cadastro
}


function listaPlanosDeSaude($conexao){
	$planos = array();
	$query = "select * from table";
	$resultado = mysqli_query($conexao, $query);

	while ($categoria = mysqli_fetch_assoc($resultado)) {
		array_push($planos, $categoria);
	}

	return $planos;
}


 ?>