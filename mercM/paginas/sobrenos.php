<!DOCTYPE html>
<html lang="pt-br">
    <head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title> Sobre nos </title>
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
      <link rel="stylesheet" type="text/css" href="../css/estilo-sobre-nos.css">
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
               
                <a href="login.php"><button class="btn btn-sobre bg-black radius"> Login <i class="fa fa-question-circle"></i></button></a> 
            </div>
        </div>
        <!-- SERVICOS --> 
        <main class="servicos container">

           <article class="servico bg-white radius cont">
          
                                <div class="box">
                                   <div class="icon">
                                       <img src="../icon/search.png" class="fa fa-search" width="50px" height="50px">
                                   </div>
                                 <div class="content">
                             <h3>procura</h3>
                           <p>procura a melhor pagina web para anuciar os teus produtos  mais rapido e com muita facilidade esta no site certo!. </p>  
                          </div>
                        </div>
                
              </article>

              <article class="servico bg-white radius cont">
                
              <div class="box">
                   <div class="icon">
                         <img src="../icon/people(111).png" class="fa fa-search" width="50px" height="50px">
                   </div>
                <div class="content">
                        <h3>Administrador</h3>
                         <p>David Basilio Laqui proprietario da pagina web, a pagina foi criada não para fins lucrativos mais por questões educacionais e bem social. </p>
                        </div>
                      </div>
                  
                    </article>
                    <article class="servico bg-white radius cont">
                      
                <div class="box">
                     <div class="icon">
                           <img src="../icon/localization.png" class="fa fa-search" width="50px" height="50px">
                           </div>
                             <div class="content">
                                 <h3>Localização</h3>
                                 <p>Estamos localizados na baixa da Cidade de Maputo. AV.25 de setembro.</p>
                            </div>
                         </div>
                    
                   </article>
                 
                          

            

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