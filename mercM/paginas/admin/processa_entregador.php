<?php
 include_once("../conexao.php");
 $nome= $_POST['tnome'];
 $sexo= $_POST['Tsexo'];
 $nr_bi= $_POST['nr_bi'];
 $data_nasc= $_POST['data_nasc'];
 $data_emissao= $_POST['data_emissao'];
 $morada= $_POST['morada'];
 $nr_celular= $_POST['nr_celular'];
 $nr_carta= $_POST['nr_carta'];
 $nr_matricula= $_POST['nr_matricula'];
 $sql="INSERT INTO `entregador`( `nome`, `sexo`, `nr_bi`, `data_nasc`, `data_emisao`, `morada`, `nr_celular`, `nr_carta`, `nr_matricula` ) VALUES ('$nome','$sexo', '$nr_bi','$data_nasc','$data_emissao','$morada','$nr_celular','$nr_carta','$nr_matricula')";
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
  	print("<script>alert('Registado com sucesso...'); location.href='cad_entregador.php'; </script>");
  	
  }elseif ($registros<1) {
  	
  	print("<script>alert('cadastro nao efectuado. Ja existe um transportador com este nr de BI: ".$nr_bi." ');  location.href='cad_entregador.php'; </script>");
  	

  }
 ?>

</body>
</html>