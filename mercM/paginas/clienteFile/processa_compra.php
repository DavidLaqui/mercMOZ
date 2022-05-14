<?php
 include_once("../conexao.php");
 $id= $_REQUEST['id'];
 $id_produto= $_POST['id_produto'];
 $id_entregador= $_POST['entregador'];
 $quantidade= $_POST['quantidade'];
 $preco= $_POST['preco'];
 $total= $quantidade*$preco;
 
 $sql="insert into `entrega`(`id_cliente`, `id_produto`, `id_entregador`, `quantidade`, `preco`, `total`) VALUES ('$id','$id_produto', '$id_entregador','$quantidade','$preco','$total')";
 
 

  if($salvar=mysqli_query($conexao,$sql)){
  	mysqli_close($conexao);
  	print("<script>alert('compra efectuada com sucesso...'); </script>
  		<script>alert('valor da compra: ".$total." MZN...');</script>
  		<script>alert('Valor da entrega: 200 MZN...');</script>
  		<script>alert('Valor total da compra: ".($total+200)." MZN...');</script>
  		<script>alert('Aguarde pelo produto...obrigado');location.href='inicio.php?id=$id'; </script>");

  	
  }else {
  	print("<script>alert('compra nao efecuada');  location.href='inicio.php?id=$id'; </script>");
  	

  }
mysqli_close($conexao);
?>
