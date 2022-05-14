<?php
include_once("conexao.php");
     $user=$_POST["nomeUsuario"];
     $senha=$_POST["senha"];
     
 $sql="select *  from vendedor where nome like '%$user' AND nr_bi='$senha'";
 $consulta=mysqli_query($conexao,$sql);
 $registros=mysqli_num_rows($consulta);

  $sqll="select *  from admin where nome_admin='$user' AND pass_admin='$senha'";
 $consulta2=mysqli_query($conexao,$sqll);
 $registros2=mysqli_num_rows($consulta2);

 $sqlll="select *  from cliente where nome='$user' AND nr_bi='$senha'";
 $consulta3=mysqli_query($conexao,$sqlll);
 $registros3=mysqli_num_rows($consulta3);

  $sqle="select *  from `entregador` where nome='$user' AND nr_bi='$senha'";
 $consulte=mysqli_query($conexao,$sqle);
 $registo=mysqli_num_rows($consulte); 

   mysqli_close($conexao);
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
                   <li><a href="../index.html">Home</a></li>
                   <li><a href="#">Clientes</a></li>
                   <li><a href="#">Serviços</a></li>
                   <li><a href="#">Blog</a></li>
                   <li><a href="sobrenos.html">Quem somos</a></li>
                   <li><a href="contactos.html">Contato</a></li>
               </ul>
           </nav>          
        </header>
        <!-- BANNER --> 
        <div class="banner container">
            <div class="title">
                <h2> Mercado zimpeto! </h2>
                <h3> publique teus produtos online de forma facil e muito mais rapido! deixe teus produtos mais perto dos teus clientes.</h3>
            </div>
           
        </div>
        <!-- SERVICOS --> 
        <main class="servicos container">
          <?php
    if($registros!=0){
      print("<script>alert('logado com sucesso....::".$user."'); location.href='insideFiles/inicio.php?id=".$senha."'; </script>");
    }elseif ($registros2!=0) {
      print("<script>alert('logado com sucesso Admin....::".$user."'); location.href='admin/admercMoz.php'; </script>");
    }
    elseif ($registros3!=0) {
      print("<script>alert('logado com Cliente....::".$user."'); location.href='clienteFile/inicio.php?id=".$senha."'; </script>");
    }
     elseif ($registo!=0) {
      print("<script>alert('logado com entregador....::".$user."'); location.href='eFile/inicio.php?id=".$senha."'; </script>");
    }
    
    else {
      print("<script>alert('erro ao logar verifique a  tua autenticação '); location.href='login.php'; </script>");
    }

            ?>
            

        </main>
        <!-- NEWSLETTER -->
        <section class="newsletter container bg-black">
          <h2> mercMOZ </h2>
           <h3> o mercado nas tuas mãos </h3>
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