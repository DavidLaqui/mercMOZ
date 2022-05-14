<?php
include_once("../conexao.php");
$id_prod = $_REQUEST['id'];
$vededor="";
$sql="select * from produto where id_produto='$id_prod'";
               $resultado=mysqli_query($conexao,$sql);
               while ($linha=mysqli_fetch_array($resultado)) {
                $vededor=$linha['id_vendedor'];

            }



$sqll="DELETE FROM `produto` WHERE `id_produto` = '$id_prod'";
$salvar=mysqli_query($conexao,$sqll);
mysqli_close($conexao);
?>

<?php
echo "<script>location.href='meusProdutos.php?id=$vededor';</script>";
?>
