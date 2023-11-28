<?php

	include("conexao.php");
	$nome =$_POST['nome'];
	$senha =$_POST['senha'];
	
	$nome_prod=$_POST['nome_prod'];
	$qtd_prod=$_POST['qtd_prod'];
	$preco=$_POST['preco'];
	
	$sql="INSERT INTO cad(nome, senha)
	VALUES ('$nome', '$senha')";
	if(mysqli_query($conexao, $sql)){
		header("location: index.html");
	}else{
		echo "Erro". mysqli_connect_error($conexao);
	}

	$sql2="INSERT INTO prod_cad(nome_prod, qtd_prod, preco)
	VALUES ('$nome_prod', '$qtd_prod', '$preco')";
	if(mysqli_query($conexao, $sql2)){
		header("location: index.html");
	}else{
		echo "Erro". mysqli_connect_error($conexao);
	}




	mysqli_close($conexao);
?>