<?php
include_once("../conexao.php");
$nome= $_POST['nome'];
 $sexo= $_POST['sexo'];
 $nr_bi= $_POST['nr_bi'];
 $data_nasc= $_POST['data_nasc'];
 $data_emisao= $_POST['data_emisao'];
 $morada= $_POST['morada'];
 $nr_celular= $_POST['nr_celular'];
 $nr_carta= $_POST['nr_carta'];
 $nr_matricula= $_POST['nr_matricula'];

$sql="UPDATE `entregador` SET `nome` = '$nome',`sexo` = '$sexo', `data_nasc` = '$data_nasc', `data_emisao` = '$data_emisao', `morada` = '$morada',`nr_celular` = '$nr_celular', `nr_carta` = '$nr_carta', `nr_matricula` = '$nr_matricula' WHERE nr_bi = '$nr_bi'";
$salvar=mysqli_query($conexao,$sql);
mysqli_close($conexao);
?>

<?php
echo "<script>location.href='entregador.php';</script>";
?>
