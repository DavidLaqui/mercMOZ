<?php
 $hostname ="localhost";
 $user="root";
 $password="";
 $database="mercado";
 $conexao=mysqli_connect($hostname,$user,$password,$database);
 if (!$conexao) {
 	print("falha na conexao com base de dados");
 	# code...
 }
?>