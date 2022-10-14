<?php 
	require_once 'Conexao.php';

	$usuario=$_POST['username'];
	$senha=$_POST['password'];
	$sql=mysqli_query($con,"select * from seg_info where usuario='$usuario' and senha='$senha'")
		or die('<script>
			alert("Erro de SQL");
			window.location.href="Login.html"
			</script>');

		$linha=mysqli_num_rows($sql);

	if($linha==0){
		echo '<script>
			alert("Usuario e/ou senha incorreto(s)");
			window.location.href="Login.html"
			</script>';
	}
	else{
		echo '<script>
			window.location.href="TrabsonJS.html"
			</script>';
	}
 ?>