<?php
include_once("../conexao.php");
$nome=$_POST['nome'];
$nr_bi=$_POST['nr_bi'];
$sexo=$_POST['sexo'];
$data_nasc=$_POST['data_nasc'];
$data_emissao=$_POST['data_emissao'];
$nr_banca=$_POST['nr_banca'];
$nr_celular=$_POST['nr_celular'];

$sql="UPDATE `vendedor` SET `nome` = '$nome',`sexo` = '$sexo', `data_nasc` = '$data_nasc', `data_emissao` = '$data_emissao', `nr_banca` = '$nr_banca',`nr_celular` = '$nr_celular' WHERE nr_bi = '$nr_bi'";
$salvar=mysqli_query($conexao,$sql);
$sqll="UPDATE `produto` SET `nr_banca` = '$nr_banca', `nr_celular` = '$nr_celular', `nome_vendedor` = '$nome' WHERE `id_vendedor` ='$nr_bi' ";

$salvar=mysqli_query($conexao,$sqll);
mysqli_close($conexao);
?>

<?php
echo "<script>location.href='admercMoz.php';</script>";
?>
