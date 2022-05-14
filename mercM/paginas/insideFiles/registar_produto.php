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
      <link rel="stylesheet"  type="text/css" href="../../js/menu/font-awesome.min.css">
        <link rel="stylesheet"  type="text/css" href="../../js/menu/css.css">
    	<link rel="icon" href="../../img/icon.png">
      <link rel="stylesheet" href="../../css/style.css">
      <link rel="stylesheet" type="text/css" href="../../css/estilo.css">
      <link rel="stylesheet" type="text/css" href="../../css/estilo-reg-produto.css">
      <style type="text/css">
        .elemento{
          margin: 10px;
          padding: 2px;
        
          border: 1px solid #dcdcdc;
        }

      </style>
    </head>
    <body>
        <!-- CABEÇALHO --> 
        <header class="cabecalho container">
           <a href="contactos.html"><h1 class="logo"> Mercado zimpeto - aqui podes ver quais produtos estão disponiveis no mercado zimpeto </h1></a>
           <button class="btn-menu bg-gradient"><i class="fa fa-bars fa-lg"></i></button>
           <nav class="menu">
               <a class="btn-close"><i class="fa fa-times"></i></a>
               <ul>
                   <?php  
                $id= $_REQUEST['id'];
                   echo "<li><a href='inicio.php?id=$id'>Home</a></li>";
                   echo "<li><a href='meusProdutos.php?id=$id' >Meus produtos</a></li>";
                   echo "<li><a href='registar_produto.php?id=$id'>Registar produto</a></li>";
                   echo "<li><a href='sobrenos.php?id=$id'>Quem somos</a></li>";
                   echo "<li><a href='contactos.php?id=$id'>Contato</a></li>";
                   ?>
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
                <a href="../login.php"><button class="btn btn-sobre bg-black radius"> Sair <i class="fa fa-question-circle"></i></button></a> 
            </div>
           
        </div>
        <!-- SERVICOS --> 
        <main class="servicos container">
          <div class="servicos">

            <div id=" content">
              <?php 
       echo "<form method='post' action='../processar_produto.php?id=$id' enctype='multipart/form-data'>" ?>
     
      <input type="hidden" name="size" value="1000000" class="elemento">
      <div>
        <input type="file" name="image">
      </div>
      <div>
        <label> Nome do produto : </label><input type="text" name="nome" class="elemento">
      </div>
      <div>
        <textarea name="descricao" cols="40" rows="4" placeholder=" descreva teu produto" class="elemento"></textarea>
      </div>
      <div>
        <label>preco :   </label><input type="number" name="preco" class="elemento">
      </div>
     <!-- <div>
        <label>numero da banca :   </label><input type="number" name="nr_banca" class="elemento">
      </div>
      <div>
        <label>numero celular :   </label><input type="number" name="nr_celular" maxlength="9"  required class="elemento" >
      </div>
      <div>
        <label>Nome :   </label><input type="text" name="nome_vend" class="elemento">
      </div> -->

      <div>
        <input type="submit" name="upload" value="Carregar"  class="elemento">
      </div>
      
    </form>
    
  </div>
            
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
       <script src="../../js/menu/jquery-1.12.0.min.js"></script>
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