<?php 

 include_once ("conexao.php");

 if(isset($_POST['upload'])){
   $nome_produto=$_POST['nome_produto'];
$descricao_produto=$_POST['descricao_produto'];
$preco_produto=$_POST['preco_produto'];
           $id=$_POST['id_vendedor'];
   $nr_produto= $_REQUEST['id'];
//echo $nome_produto ;
//echo $descricao_produto;
//echo $preco_produto;
//echo $id;
//echo $nr_produto;

  
         $nI=$_FILES['image']['name'];
        

   if(!$_FILES['image']['name']){
       $sql="UPDATE `produto` SET  `nome_produto` = '$nome_produto', `descricao_produto` = '$descricao_produto', `preco` = '$preco_produto' WHERE `id_produto` = '$nr_produto'";


       if($salvar=mysqli_query($conexao,$sql)){
        $msg="sucessfully";
       echo "<script>location.href='insideFiles/meusProdutos.php?id=$id';</script>"; 
      }else{
        $msg="falied try agin";
        echo "<script>alert('falha ao carregar a foto, certifique se e realmente uma foto, muito obrigado!!! '); location.href='insideFiles/meusProdutos.php?id=$id'; </script>"; 
      }
   }



      
         
   
       $altura = "427";
  $largura = "640";
  switch($_FILES['image']['type']):
    case 'image/jpeg';
    case 'image/pjpeg';
      $imagem_temporaria = imagecreatefromjpeg($_FILES['image']['tmp_name']);
      
      $largura_original = imagesx($imagem_temporaria);
      
      $altura_original = imagesy($imagem_temporaria);
      
      $nova_largura = $largura ? $largura : floor (($largura_original / $altura_original) * $altura);
      
      $nova_altura = $altura ? $altura : floor (($altura_original / $largura_original) * $largura);
      
      $imagem_redimensionada = imagecreatetruecolor($nova_largura, $nova_altura);
      imagecopyresampled($imagem_redimensionada, $imagem_temporaria, 0, 0, 0, 0, $nova_largura, $nova_altura, $largura_original, $altura_original);
        



         
        imagejpeg($imagem_redimensionada, 'imagem/' . $_FILES['image']['name']);
        
        
        $diretorio="imagem/";
       
        $sql="UPDATE `produto` SET `imagem` = '$nI', `nome_produto` = '$nome_produto', `descricao_produto` = '$descricao_produto', `preco` = '$preco_produto' WHERE `id_produto` = '$nr_produto'";
        
       
      if($salvar=mysqli_query($conexao,$sql)){
        $msg="sucessfully";
      echo "<script>location.href='insideFiles/meusProdutos.php?id=$id'; </script>"; 
      }else{
        $msg="falied try agin";
        echo "<script>alert('falha ao carregar a foto, certifique se e realmente uma foto, muito obrigado!!! '); location.href='insideFiles/meusProdutos.php?id=$id'; </script>"; 
      }
      


mysqli_close($conexao);






      
      
      
    break;
    
    //Caso a imagem seja extensão PNG cai nesse CASE
    case 'image/png':
    case 'image/x-png';
      $imagem_temporaria = imagecreatefrompng($_FILES['image']['tmp_name']);
      
      $largura_original = imagesx($imagem_temporaria);
      $altura_original = imagesy($imagem_temporaria);
      
      
      /* Configura a nova largura */
      $nova_largura = $largura ? $largura : floor(( $largura_original / $altura_original ) * $altura);

      /* Configura a nova altura */
      $nova_altura = $altura ? $altura : floor(( $altura_original / $largura_original ) * $largura);
      
      /* Retorna a nova imagem criada */
      $imagem_redimensionada = imagecreatetruecolor($nova_largura, $nova_altura);
      
      /* Copia a nova imagem da imagem antiga com o tamanho correto */
      //imagealphablending($imagem_redimensionada, false);
      //imagesavealpha($imagem_redimensionada, true);

      imagecopyresampled($imagem_redimensionada, $imagem_temporaria, 0, 0, 0, 0, $nova_largura, $nova_altura, $largura_original, $altura_original);

         imagejpeg($imagem_redimensionada, 'imagem/' . $_FILES['image']['name']);
    
  
        $sql="UPDATE `produto` SET `imagem` = '$nI', `nome_produto` = '$nome_produto', `descricao_produto` = '$descricao_produto', `preco` = '$preco_produto' WHERE `id_produto` = '$nr_produto'";
       
      if($salvar=mysqli_query($conexao,$sql)){
        $msg="sucessfully";
      echo "<script>location.href='insideFiles/meusProdutos.php?id=$id'; </script>"; 
      }else{
        $msg="falied try agin";
     echo "<script>alert('falha ao carregar a foto, certifique se e realmente uma foto, muito obrigado!!! '); location.href='insideFiles/meusProdutos.php?id=$id'; </script>"; 
      }
      


mysqli_close($conexao);



      
    break;
  endswitch;




}
 ?>

