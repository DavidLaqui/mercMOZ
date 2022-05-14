

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
    	<link rel="icon" href="../../img/icon.png">
      <link rel="stylesheet" href="../../css/style.css">
      <link rel="stylesheet" type="text/css" href="../../css/estilo.css">
      <style type="text/css">
         .opcoes {
          display: block;

          position: absolute;
        }
        .opcoes a{
          display: inline-block;
          padding: 4px;
          background: #dcdcdc;
          color: #fff;
    
        }
        .opcoes a#button{
         margin-right: 100px;
         background: blue;
        }
        .opcoes a#eliminar{
          margin-left:  100px;
          background: red;
        }
        .opcoes a#button:hover{
         margin-right: 100px;
         background: #fff;
         color: blue;
        }
        .opcoes a#eliminar:hover{
          margin-left:  100px;
          background: #fff; 
          color: red;
        }
        .insirir{
          display: block;
           position: relative;
           top: 0px;
        }
        .servico .inner input.preco {
  position: relative;
  top: 0px;
  font-size: 25px;
  color: #f6b62b;
  text-shadow: rgba(0,0,0,.3);
  text-align: center;
  border-radius: 80%;
   box-shadow: 1px 1px 25px rgba(0,0,0,.6);
   margin: 0;
}
      input#transparente{
  width: 0;
  padding: 0;
  display: block;
  float: left;
  top: -10000px;
  color: rgba(0,0,0,0.1);
  top: -10000px;
}
        
      </style>
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
                <h3> publique teus produtos online de forma facil e muito mais rapido! deixe teus produtos mais pertos dos teus clientes.</h3>
            </div>
            <div class="buttons"> 
                <a href="../login.php"><button class="btn btn-sobre bg-black radius"> Sair <i class="fa fa-question-circle"></i></button></a> 
            </div>
        </div>
        <!-- SERVICOS --> 

        <main class="servicos container">
          <?php 
          include_once("../conexao.php");
               $sql="select * from produto where id_vendedor='$id'";
               $resultado=mysqli_query($conexao,$sql);
               $a=1;
               $b=2;
               $c=3;
               $control=$a;
               while ($linha=mysqli_fetch_array($resultado)) {
                    if($control==$a){
                      echo "<main class='servicos container'>";
                echo "<article class='servico bg-white radius'>";
               echo "<form action='../editar_produto.php?id=".$linha['id_produto']."' method='post' enctype='multipart/form-data'>";
               echo " <td>"."<div class='opcoes'><button type='submit' name='upload' id='editar' >Editar</button>"." </td>"; 
                echo " <td>"."<a href='eliminar_produto.php?id=".$linha['id_produto']."' type='button' id='eliminar'>Eliminar</a>"." </td></div>";
                echo " <a href='../imagem/".$linha['imagem']."'><img src='../imagem/".$linha['imagem']."' alt='produto' ></a>";
                echo "<input type='file' name='image' class='insirir'>";
                echo "<div class='inner'>";  
                  echo "<input type='text' name='id_vendedor' value='".$id."' id='transparente'> ";
            //  echo "<td> ".$t."</td> "; 
                echo "<td> <input type='text' name='nome_produto' value='".$linha['nome_produto']."'></td> "; 
                echo "<td><p class='descricao'><input type='text' name='descricao_produto' value='".$linha['descricao_produto']."'></p></td> "; 
                echo "<p>Nr banca:".$linha['nr_banca']."</p>";
                echo "<p>Nr telefone : +2558 ".$linha['nr_celular']."</p>";
                echo " <td> <input class='preco' type='text' name='preco_produto' value='".$linha['preco']."'></td> ";
                echo "</tr>";
                  echo "</div>";
                  echo "</form>";
                   echo "</article>";
                   $control=$b;
                 }elseif ($control==$b) {
                    echo "<article class='servico bg-white radius'>";
               echo "<form action='../editar_produto.php?id=".$linha['id_produto']."' method='post' enctype='multipart/form-data'>";
               echo " <td>"."<div class='opcoes'><button type='submit' name='upload' id='editar' >Editar</button>"." </td>"; 
                echo " <td>"."<a href='eliminar_produto.php?id=".$linha['id_produto']."' type='button' id='eliminar'>Eliminar</a>"." </td></div>";
                echo " <a href='../imagem/".$linha['imagem']."'><img src='../imagem/".$linha['imagem']."' alt='produto' ></a>";
                echo "<input type='file' name='image' class='insirir'>";
                echo "<div class='inner'>";  
                  echo "<input type='text' name='id_vendedor' value='".$id."' id='transparente'> ";
            //  echo "<td> ".$t."</td> "; 
                echo "<td> <input type='text' name='nome_produto' value='".$linha['nome_produto']."'></td> "; 
                echo "<td><p class='descricao'><input type='text' name='descricao_produto' value='".$linha['descricao_produto']."'></p></td> "; 
                echo "<p>Nr banca:".$linha['nr_banca']."</p>";
                echo "<p>Nr telefone : +2558 ".$linha['nr_celular']."</p>";
                echo " <td> <input class='preco' type='text' name='preco_produto' value='".$linha['preco']."'></td> ";
                echo "</tr>";
                  echo "</div>";
                  echo "</form>";
                   echo "</article>";
                   $control=$c;
                   
                 }elseif ($control==$c) {
                   echo "<article class='servico bg-white radius'>";
               echo "<form action='../editar_produto.php?id=".$linha['id_produto']."' method='post' enctype='multipart/form-data'>";
               echo " <td>"."<div class='opcoes'><button type='submit' name='upload' id='editar' >Editar</button>"." </td>"; 
                echo " <td>"."<a href='eliminar_produto.php?id=".$linha['id_produto']."' type='button' id='eliminar'>Eliminar</a>"." </td></div>";
                echo " <a href='../imagem/".$linha['imagem']."'><img src='../imagem/".$linha['imagem']."' alt='produto' ></a>";
                echo "<input type='file' name='image' class='insirir'>";
                echo "<div class='inner'>";  
                  echo "<input type='text' name='id_vendedor' value='".$id."' id='transparente'> ";
            //  echo "<td> ".$t."</td> "; 
                echo "<td> <input type='text' name='nome_produto' value='".$linha['nome_produto']."'></td> "; 
                echo "<td><p class='descricao'><input type='text' name='descricao_produto' value='".$linha['descricao_produto']."'></p></td> "; 
                echo "<p>Nr banca:".$linha['nr_banca']."</p>";
                echo "<p>Nr telefone : +2558 ".$linha['nr_celular']."</p>";
                echo " <td> <input class='preco' type='text' name='preco_produto' value='".$linha['preco']."'></td> ";
                echo "</tr>";
                  echo "</div>";
                  echo "</form>";
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