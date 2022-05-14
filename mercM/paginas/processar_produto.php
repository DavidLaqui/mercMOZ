<?php 

 include_once ("conexao.php");

 if(isset($_POST['upload'])){
        $id= $_REQUEST['id'];
         $sql="select * from vendedor where nr_bi='$id'";
               $resultado=mysqli_query($conexao,$sql);
               $t=1;
               $nome="";
               $banca="";
               $celular="";
               while ($linha=mysqli_fetch_array($resultado)) {
                 $nome=$linha['nome'];
                 $banca=$linha['nr_banca'];
                 $celular=$linha['nr_celular'];
                 }
                

           




         $nI=$_FILES['image']['name'];
         $nome_produto=$_POST['nome'];
        $descricao_produto=$_POST['descricao'];
        $preco=$_POST['preco'];
    /*    $nr_banca=$_POST['nr_banca'];
        $nr_celular=$_POST['nr_celular'];
        $nome_vendedor=$_POST['nome_vend']; */

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
       
        $sql="INSERT INTO `produto`( `imagem`, `nome_produto`, `descricao_produto`, `preco`, `nr_banca`, `nr_celular`, `nome_vendedor`,`id_vendedor`) VALUES ('$nI','$nome_produto','$descricao_produto','$preco','$banca','$celular','$nome','$id')";
        
       
      if($salvar=mysqli_query($conexao,$sql)){
        $msg="sucessfully";
       echo "<script>alert('Registado com sucesso , registe novamente se quiser '); location.href='insideFiles/registar_produto.php?id=$id'; </script>"; 
      }else{
        $msg="falied try agin";
        echo "<script>alert('falha ao carregar a foto, certifique se e realmente uma foto, muito obrigado!!! '); location.href='insideFiles/registar_produto.php?id=$id'; </script>"; 
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
    
  
        $sql="INSERT INTO `produto`( `imagem`, `nome_produto`, `descricao_produto`, `preco`, `nr_banca`, `nr_celular`, `nome_vendedor`,`id_vendedor`) VALUES ('$nI','$nome_produto','$descricao_produto','$preco','$banca','$celular','$nome','$id')";
        
       
      if($salvar=mysqli_query($conexao,$sql)){
        $msg="sucessfully";
        echo "<script>alert('Registado com sucesso , registe novamente se quiser '); location.href='insideFiles/registar_produto.php?id=$id'; </script>"; 
      }else{
        $msg="falied try agin";
       echo "<script>alert('falha ao carregar a foto, certifique se e realmente uma foto, muito obrigado!!! '); location.href='insideFiles/registar_produto.php?id=$id'; </script>"; 
      }
      


mysqli_close($conexao);



      
    break;
  endswitch;




}






        
        
        

 ?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title> contactos </title>
    	<meta name="description" content="grupo de estudantes Especializados em criação de paginas web e Aplicativos Mobile.">
    	<meta name="keywords" content="produtos,preços,Marketing, Sites">
    	<meta name="robots" content="index, follow">
    	<meta name="author" content="David Basilio laqui... framework by Rodrigo Oliveira">
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    	<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
    	<link rel="icon" href="../img/icon.png">
      <link rel="stylesheet" href="../css/style.css">
      <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    </head>
    <body>
        <!-- CABEÇALHO --> 
        <header class="cabecalho container">
           <a href="contactos.html"><h1 class="logo"> Mercado zimpeto - aqui podes ver quais produtos estão disponiveis no mercado zimpeto </h1></a>
           <button class="btn-menu bg-gradient"><i class="fa fa-bars fa-lg"></i></button>
           <nav class="menu">
               <a class="btn-close"><i class="fa fa-times"></i></a>
               <ul>
                   <li><a href="../index.php">Home</a></li>
                   <li><a href="#">Clientes</a></li>
                   <li><a href="#">Serviços</a></li>
                   <li><a href="#">Blog</a></li>
                   <li><a href="sobrenos.php">Quem somos</a></li>
                   <li><a href="contactos.php">Contato</a></li>
               </ul>
           </nav>          
        </header>
        <!-- BANNER --> 
        <div class="banner container">
            <div class="title">
                <h2> Mercado zimpeto! </h2>
                <h3> publique teus produtos online de forma facil e muito mais rapido! deixe teus produtos mais pertos dos teus clientes.</h3>
            </div>
           
        </div>
        <!-- SERVICOS --> 
        <main class="servicos container">
          <div class="servicos">
            

            
          </div>
            

        </main>
        <!-- NEWSLETTER -->
        <section class="newsletter container bg-black">
           <h2> Anucia teus produtos! </h2>
           <h3>  </h3>
           
        </section>
        <!-- RODAPÉ -->
        <footer class="rodape container bg-gradient">
          <div class="social-icons">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-google"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-envelope"></i></a>
          </div>
          <p class="copyright">
            Copyright © UDM-mercadoZimpeto 2019. Todos os direitos reservados.
        </footer>       
        
        <!-- JQUERY --> 
        <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>
        $(".btn-menu").click(function(){
          $(".menu").show();
        });
        $(".btn-close").click(function(){
          $(".menu").hide();
        });
        </script>      
    </body>
</html>