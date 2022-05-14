<?php
 include_once("conexao.php");
 $nome= $_POST['tnome'];
 $sexo= $_POST['Tsexo'];
 $nr_bi= $_POST['nr_bi'];
 $data_nasc= $_POST['data_nasc'];
 $data_emissao= $_POST['data_emissao'];
 $morada= $_POST['morada'];
 $nr_celular= $_POST['nr_celular'];
 
 $sql="INSERT INTO `cliente`( `nome`, `sexo`, `nr_bi`, `data_nasc`, `data_emisao`, `morada`, `nr_celular`) VALUES ('$nome','$sexo', '$nr_bi','$data_nasc','$data_emissao','$morada','$nr_celular')";
 $salvar=mysqli_query($conexao,$sql);
 $registros=mysqli_affected_rows($conexao);
mysqli_close($conexao);

?>
<!DOCTYPE html>
<html>
<head>
	<title>teste conexao</title>
</head>
<body>
  <?php 
  if($registros>=1){
  	print("<script>alert('Registado com sucesso faça login...');
  		alert('user: ".$nome." | senha: ".$nr_bi."'); location.href='login.php'; </script>");
  	
  }elseif ($registros<1) {
  	
  	print("<script>alert('cadastro nao efectuado. Ja existe um cliente com este nr de BI: ".$nr_bi." ');  location.href='registar_cliente.php'; </script>");
  	

  }
 ?>

</body>
</html>