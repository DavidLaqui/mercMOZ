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
      <link rel="stylesheet"  type="text/css" href="../js/menu/font-awesome.min.css">
        <link rel="stylesheet"  type="text/css" href="../js/menu/css.css">
    	<link rel="icon" href="../img/icon.png">
      <link rel="stylesheet" href="../css/style.css">
      <link rel="stylesheet" type="text/css" href="../css/estilo.css">
      <link rel="stylesheet" type="text/css" href="../css/estilo-login.css">
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
                   <li><a href="sobrenos.php">Quem somos</a></li>
                   <li><a href="contactos.php">Contato</a></li>
               </ul>
           </nav>          
        </header>
        <!-- BANNER --> 
        <div class="banner container">
            <div class="title">
                <h2> Mercado zimpeto! </h2>
                <h3> publique teus produtos online de forma facil e muito mais rapido! deixe teus produtos mais perto dos teus clientes.</h3>
            </div>
            <div class="buttons">
                
                 
            </div>
        </div>
        <!-- SERVICOS --> 
        <main class="servicos container">
          <div class="centralizar">
          <article class="servico bg-white radius cont">

                     <div class="box">
                        <h2>Login</h2>
                   <form action="processa_login.php" method="POST">
                       <div class="inputBox">
                       <input type="text" name="nomeUsuario" required=""><label>Username</label>
        
                        </div>
                  <div class="inputBox">
                  <input type="password" name="senha" required=""><label>Password</label>
                  </div>
                       <input type="submit" name="bt_log" value="Entrar">
                       <a href="registar_cliente.php" name="bt_log">Registar</a>
                        </form>
    
             </div>
            
          </article>
        </div>
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
       
        <script src="../js/menu/jquery-1.12.0.min.js"></script>
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