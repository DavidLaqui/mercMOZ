<?php
      include_once("../conexao.php");
      $id= $_POST['id_cliente'];
      $id_produto= $_POST['id_produto'];
      $sql="SELECT `imagem`, `nome_produto`, `descricao_produto`, `preco`, `nr_banca`, `nr_celular`, `nome_vendedor`, `id_vendedor` FROM `produto` WHERE id_produto='".$id_produto."'";
      $resultado=mysqli_query($conexao,$sql);
      $linha=mysqli_fetch_array($resultado);
      $id_v=$linha['id_vendedor'];
      $sqll="SELECT `nome`, `sexo`, `nr_bi`, `data_nasc`, `data_emissao`, `nr_banca`, `nr_celular`, `id_admin` FROM `vendedor` WHERE nr_bi='".$id_v."'";
       $resultado1=mysqli_query($conexao,$sqll);
      $linha1=mysqli_fetch_array($resultado1);

      
      

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
      <link rel="stylesheet"  type="text/css" href="../../js/menu/font-awesome.min.css">
        <link rel="stylesheet"  type="text/css" href="../../js/menu/css.css">
    	<link rel="icon" href="../../img/icon.png">
      <link rel="stylesheet" href="../../css/style.css">
      <link rel="stylesheet" type="text/css" href="../../css/estilo.css">
        <link rel="stylesheet" type="text/css" href="../../css/estilo-botoes.css">
      <link rel="stylesheet" type="text/css" href="../../css/estilo-reg-produto.css">
      <style type="text/css">
        .elemento{
          margin: 10px;
          padding: 2px;
        
          border: 1px solid #dcdcdc;
        }
        @keyframes bouce {
  0%, 20%, 60%, 100%{
    -webkit-transform: translateY(0);
    transform: translateY(0);
  }
  40%{
        -webkit-transform: translateY(-20px);
    transform: translateY(-20px);
  }
  80%{
        -webkit-transform: translateY(-10px);
    transform: translateY(-10px);
  }
  }
}
.btns{
  text-align:center;
  margin-top: 50px;
}
.efeito{
  border:none;
  color: #ffffff;
  padding: 20px;
  margin: 10px;
  font-size: 24px;
  line-height: 24px;
  border-radius: 10px;
  position: relative;
  box-sizing: border-box;
  cursor: pointer;
  transition: all 400ms ease;
}
.efcomprar{
  border:none;
  color: #ffffff;
  padding: 20px;
  margin: 10px;
  font-size: 24px;
  line-height: 24px;
  border-radius: 10px;
  position: relative;
  box-sizing: border-box;
  cursor: pointer;
  transition: all 400ms ease;
  width: 400px;
}
.ef-1{
  background-color: #28348A;

}
.ef-1:before{
  content: '';
  position: absolute;
  top: 0px;
  left: 0px;
  width: 0px;
  height: 64px;
  background: rgba(255,255,255,0.3);
  border-radius: 10px;
  transition: all 2s ease;

}
.efeito-1{
  background-color: #28348A;

}
.servicos .container .efeito-1:before{
  content: '';
  position: absolute;
  top: 0px;
  left: 0px;
  width: 0px;
  height: 64px;
  background: rgba(255,255,255,0.3);
  border-radius: 10px;
  transition: all 2s ease;

}
.efeito-1:hover:before{
  width: 100%;
}

.efeito-2{
  background-color: #772150;

}
.efeito-2:before{
  content: '';
  position: absolute;
  top: 0px;
  left: 0px;
  width: 100%;
  height: 0px;
  background: rgba(255,255,255,0.3);
  border-radius: 10px;
  transition: all 2s ease;

}
.efeito-2:hover:before{
  height:  64px;
}
.efeito-3{
  background: #009c3d;
}
.efeito-3:hover{
  background: rgba(0,0,0,0);
  color: #009c3d;
  box-shadow: inset 0 0 0 3px #009c3d;
}
.efeito-4 {
  background: #f18f01;
}
.efeito-4:hover {
  animation: bouce 1s; 
}
.efeito-5 {
  background: #db3a34;
}
.efeito-5:hover {
  transform: skew(-10deg);
}
.efeito-6 {
  background: #376693;
  transform-style: preserve-3d;
}
.efeito-6:after {
  top: -100%;
  left: 0px;
  width: 100%;
  padding: 20px;
  position: absolute;
  background: #3a9999;
  border-radius: 10px;
  box-sizing:  border-box;
  content: 'mudou';
  transform-origin: left bottom;
  transform: rotateX(90deg);
}
.efeito-6:hover{
  transform-origin: center bottom;
  transform: rotateX(-90deg) translateY(100%);

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
           <a href="contactos.html"><h1 class="logo"> Mercado zimpeto - aqui podes ver quais produtos estão disponiveis no mercado zimpeto </h1></a>
           <button class="btn-menu bg-gradient"><i class="fa fa-bars fa-lg"></i></button>
           <nav class="menu">
               <a class="btn-close"><i class="fa fa-times"></i></a>
               <ul>
                   <?php  
               
                   echo "<li><a href='inicio.php?id=$id'>Home</a></li>";
    
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
          
          <?php 
              
                echo "<main class='servicos container'>";
                echo "<article class=' bg-white radius'>";
                echo " <a href='../imagem/".$linha['imagem']."'><img src='../imagem/".$linha['imagem']."' alt='produto' ></a>";       
                echo "<div class='inner'>"; 
                echo " <a href='../imagem/".$linha['imagem']."'>".$linha['nome_produto']."</a>";
                echo "<p class='descricao'>".$linha['descricao_produto']."</p>";
                echo "<p>preço:".$linha['preco']." MZN</p>";
                echo "<p>Nome vendedor: ".$linha1['nome']."</p>";
                echo "<p>Nr banca:".$linha['nr_banca']."</p>";
                echo "<p>Nr telefone : +2558 ".$linha['nr_celular']."</p>";

                echo "<p>Quantidade : </p>";
                echo"<form action='processa_compra.php?id=$id' method='POST'>";
            
          
                echo"<select name='quantidade'>";
            echo"<option value='1'>1</option>";
            echo"<option value='2'>2</option>";
            echo"<option value='3'>3</option>";
            echo"<option value='4'>4</option>";
            echo"<option value='5'>5</option>";
            echo"<option value='6'>6</option>";
            echo"<option value='7'>7</option>";
            echo"<option value='8'>8</option>";
            echo"<option value='9'>9</option>";
            echo"<option value='10'>10</option>";
            echo "</select>";

                echo "<p>selecionar entregador(+200 mzn):</p>";
                echo"<select name='entregador'>";
            echo"<option value='0'>none</option>";
            
            $sql_e="SELECT * FROM `entregador` ";
               $resultado_e=mysqli_query($conexao,$sql_e);
              while ($linha_e=mysqli_fetch_array($resultado_e)) {
                echo"<option value='".$linha_e['nr_bi']."'>".$linha_e['nome']."</option>";
              }
              

              mysqli_close($conexao);
              
          echo"</select>";echo"</br>";
          echo "<input type='text' name='id_produto' value='".$id_produto."' id='transparente'> ";
        
          echo "<input type='text' name='preco' value='".$linha['preco']."' id='transparente'> ";
          echo "<button type='submit' class='efeito efeito-1' >processar a compra</button>";
          echo "</form>";

                echo "</div>";
                echo "</div>";
                echo "</article>";
                echo "</main>";
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