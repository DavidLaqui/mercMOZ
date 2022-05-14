
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
      <link rel="stylesheet" type="text/css" href="../../css/estilo-login.css">
      <style type="text/css">
        table#tabela{
  border: 1px solid #606060;
  border-spacing: 0px;
  width: 300px;
}
table#tabela td{
  border: 1px solid #606060;
  padding: 5px;
  width: 15px;
  height: 15px;
}
table#tabela th{
  border: 1px solid #606060;
  padding: 5px;
  width: 15px;
  height: 15px;
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
                     $id= $_REQUEST['id'];
                     echo "<li><a href='inicio.php?id=$id'>Home</a></li>";
                     echo "<li><a href='entregas.php?id=$id'>entregas</a></li>";
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
               <a href="registar_vendedor.php"><button class="btn btn-cadastrar bg-white radius"> Cadastrar <i class="fa fa-arrow-circle-right"></i></button></a> 
                 <a href="../login.php"> <button class="btn btn-sobre bg-black radius"> Sair <i class="fa fa-question-circle"></i></button></a>
            </div>
        </div>
        <!-- SERVICOS --> 
        <main class="servicos container" >
          <div id=" content">
            <table id="tabela">
  <thead>
    <tr>
      <th >*</th>
      <th >Nome do vendedor</th>
      <th >Numero da banca</th>
      <th >celular vendedor</th>
      <th >produto</th>
      <th >preco</th>
      <th >quantidade</th>
      <th >nome do cliente</th>
      <th >celular cliente</th>
       <th >Morada</th>
      <th >Concluir</th>
      <th >Abortar</th>
    </tr>
  </thead>
  <tbody>
   
    
      <?php 
          include_once("../conexao.php");
               $sql="select * from entrega where id_entregador='$id'";
               $resultado=mysqli_query($conexao,$sql);
               $t=1;
               while ($linha=mysqli_fetch_array($resultado)) {
                  $id_produto=$linha['id_produto'];
                $sql_produto="SELECT `nome_produto`, `preco`, `nr_banca`, `nr_celular`, `nome_vendedor` FROM `produto` WHERE id_produto=$id_produto";
               $resultado_produto=mysqli_query($conexao,$sql_produto);
                $produto=mysqli_fetch_array($resultado_produto);
                 $id_cliente=$linha['id_cliente'];
               $sql_cliente="SELECT `nome`, `morada`, `nr_celular` FROM `cliente` WHERE nr_bi=$id_cliente";
               $resultado_cliente=mysqli_query($conexao,$sql_cliente);
               $cliente=mysqli_fetch_array($resultado_cliente);
              echo "<tr>";
              echo "<form action='#' method='post'>";
              echo "<input type='text' name='nr_bi' value='".$produto['nome_vendedor']."' id='transparente'> ";
              echo "<td> ".$t."</td> "; 
              echo "<td><input type='text' name='nr_bi' value='".$produto['nome_vendedor']."' ></td> ";
                echo "<td> <input type='text' name='nr_banca' value='".$produto['nr_banca']."'></td> "; 
                echo "<td><input type='text' name='nr_bi' value='".$produto['nr_celular']."' disabled></td> "; 
                echo " <td> <input type='text' name='sexo' value='".$produto['nome_produto']."'></td> ";
                echo " <td><input type='data' name='data_nasc' value='".$produto['preco']."'></td> "; 
                echo " <td><input type='data' name='data_emisao' value='".$linha['quantidade']."'></td> "; 
                echo " <td><input type='text' name='morada'value='".$cliente['nome']."'></td> "; 
                echo " <td><input type='text' name='nr_celular' value='".$cliente['nr_celular']."'> </td>";
                echo " <td><input type='text' name='nr_carta' value='".$cliente['morada']."'> </td>";
                
                echo " <td>"."<button type='submit' class='efeito efeito-1' >concluir</button>"." </td>"; 
                echo " <td>"."<a href='#' type='button' class='efeito efeito-4'>Abortar</a>"." </td>";  
                  echo "</tr>";
                  echo "</form>";
                  $t=$t+1;
               }
                 mysqli_close($conexao);
             ?>
             

               
             
    
     
  </tbody>
</table>
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
          </p>
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