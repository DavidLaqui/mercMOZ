<?php 

 include_once ("conexao.php");
        
        
        if(isset($_POST['upload'])){
         
         $nome_produto=$_POST['nome'];
        $descricao_produto=$_POST['descricao'];
        $preco=$_POST['preco'];
        $nr_banca=$_POST['nr_banca'];
        $nr_celular=$_POST['nr_celular'];
        $nome_vendedor=$_POST['nome_vendedor'];


        $msg="";
        $target= "imagem/".basename($_FILES['image']['name']);
        include_once("conexao.php");
        $image=$_FILES['image']['name'];
        $sql="INSERT INTO `produto`( `imagem`, `nome_produto`, `descricao_produto`, `preco`, `nr_banca`, `nr_celular`, `nome_vendedor`) VALUES ('$image','$nome_produto','$descricao_produto','$preco','$nr_banca','$nr_celular','$nome_vendedor')";
        $salvar=mysqli_query($conexao,$sql);
       
      if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
        $msg="sucessfully";
        echo "<script>alert('Registado com sucesso , registe novamente se quiser '); location.href='registar_produto.php'; </script>";
      }else{
        $msg="falied try agin";
        echo "<script>alert('falha ao carregar a foto, certifique se e realmente uma foto, muito obrigado!!! '); location.href='registar_produto.php'; </script>";
      }
      


mysqli_close($conexao);

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