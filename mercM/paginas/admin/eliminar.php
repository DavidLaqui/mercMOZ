<?php
include_once("../conexao.php");
$nr_bi = $_REQUEST['id'];
$sql="DELETE FROM `vendedor` WHERE `nr_bi` = '$nr_bi'";
$salvar=mysqli_query($conexao,$sql);
$sqll="DELETE FROM `produto` WHERE `id_vendedor` = '$nr_bi'";
$salvar=mysqli_query($conexao,$sqll);
mysqli_close($conexao);
?>

<?php
echo "<script>location.href='admercMoz.php';</script>";
?>
