<?php 
	$host="localhost";
	$banco="feira";
	$senha="123";
	$usuario="root";

	$con=mysqli_connect($host,$usuario,$senha)
		or die("Erro na conexao");

	mysqli_select_db($con,"feira");
 ?>