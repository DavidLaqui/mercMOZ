<?php
include_once("../conexao.php");
$nr_bi = $_REQUEST['id'];
$sql="DELETE FROM `entregador` WHERE `nr_bi` = '$nr_bi'";
$salvar=mysqli_query($conexao,$sql);
mysqli_close($conexao);
?>

<?php
echo "<script>location.href='entregador.php';</script>";
?>
