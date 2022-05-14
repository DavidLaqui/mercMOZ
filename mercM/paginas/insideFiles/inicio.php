

<!DOCTYPE html>
<html lang="pt-br">
    <head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title> Mercado - zimpeto </title>
    	<meta name="description" content="grupo de estudantes Especializados em criação de paginas web e Aplicativos Mobile.">
    	<meta name="keywords" content="produtos,preços,Marketing, Sites">
    	<meta name="robots" content="index, follow">
    	<meta name="author" content="David Basilio laqui...and Ivan Baloi framework by Rodrigo Oliveira">
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    	<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
      <link rel="stylesheet"  type="text/css" href="../../js/menu/font-awesome.min.css">
        <link rel="stylesheet"  type="text/css" href="../../js/menu/css.css">
    	<link rel="icon" href="../../img/icon.png">
      <link rel="stylesheet" href="../../css/style.css">
      <link rel="stylesheet" type="text/css" href="../../css/estilo.css">
    </head>
    <body>
        <!-- CABEÇALHO --> 
        <header class="cabecalho container">
           
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
                <h3> publique teus produtos online de forma facil e muito mais rapida! deixe teus produtos mais perto dos teus clientes.</h3>
            </div>
            <div class="buttons"> 
                <a href="../login.php"><button class="btn btn-sobre bg-black radius"> Sair <i class="fa fa-question-circle"></i></button></a> 
            </div>
        </div>
        <!-- SERVICOS --> 

        <main class="servicos container">
<?php 
          include_once("../conexao.php");
               $sql="select * from produto";
               $resultado=mysqli_query($conexao,$sql);
               $a=1;
               $b=2;
               $c=3;
               $control=$a;

               while ($linha=mysqli_fetch_array($resultado)) {
                       
                       if($control==$a){

                        echo "<main class='servicos container'>";
                echo "<article class='servico bg-white radius'>";
                echo " <a href='../imagem/".$linha['imagem']."'><img src='../imagem/".$linha['imagem']."' alt='produto' ></a>";       
                echo "<div class='inner'>"; 
                echo " <a href='#'>".$linha['nome_produto']."</a>";
                echo "<p class='descricao'>".$linha['descricao_produto']."</p>";
                echo "<p>Nr banca:".$linha['nr_banca']."</p>";
                echo "<p>Nr telefone : +2558 ".$linha['nr_celular']."</p>";
                echo "<p class='preco'>".$linha['preco']." MZN</p>";
                echo "</div>";
                echo "</article>";
                $control=$b;
                }elseif ($control==$b) {
                  echo "<article class='servico bg-white radius'>";
                echo " <a href='../imagem/".$linha['imagem']."'><img src='../imagem/".$linha['imagem']."' alt='produto' ></a>";       
                echo "<div class='inner'>"; 
                echo " <a href='#'>".$linha['nome_produto']."</a>";
                echo "<p class='descricao'>".$linha['descricao_produto']."</p>";
                echo "<p>Nr banca:".$linha['nr_banca']."</p>";
                echo "<p>Nr telefone : +2558 ".$linha['nr_celular']."</p>";
                echo "<p class='preco'>".$linha['preco']." MZN</p>";
                echo "</div>";
                echo "</article>";
                $control=$c;
                }elseif ($control==$c) {
                    echo "<article class='servico bg-white radius'>";
                echo " <a href='../imagem/".$linha['imagem']."'><img src='../imagem/".$linha['imagem']."' alt='produto' ></a>";       
                echo "<div class='inner'>"; 
                echo " <a href='#'>".$linha['nome_produto']."</a>";
                echo "<p class='descricao'>".$linha['descricao_produto']."</p>";
                echo "<p>Nr banca:".$linha['nr_banca']."</p>";
                echo "<p>Nr telefone : +2558 ".$linha['nr_celular']."</p>";
                echo "<p class='preco'>".$linha['preco']." MZN</p>";
                echo "</div>";
                echo "</article>";
                echo '</main>';
                   $control=$a;
                }




               }
                 mysqli_close($conexao);
                 if($control==$a){
                   echo '</main>';
                 }elseif ($control==$b) {
                   echo '</main>';
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