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
      <link rel="stylesheet" href="../../css/style.css">
      <link rel="stylesheet" type="text/css" href="../../css/estilo.css">
      <link rel="stylesheet" type="text/css" href="../../css/estilo-reg-vendedor.css">
      
    </head>
    <body>
        <!-- CABEÇALHO --> 
        <header class="cabecalho container">
           <a href="contactos.html"><h1 class="logo"> Mercado zimpeto - aqui podes ver quais produtos estão disponiveis no mercado zimpeto </h1></a>
           <button class="btn-menu bg-gradient"><i class="fa fa-bars fa-lg"></i></button>
           <nav class="menu">
               <a class="btn-close"><i class="fa fa-times"></i></a>
               <ul>
                   <li><a href="inicio.php">Home</a></li>
                   <li><a href="admercMoz.php">vendedores</a></li>
                   <li><a href="entregador.php">entregadores</li></a></li>
                   <li><a href="cad_entregador.php">cadastrar entregador</li></a></li>
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
            <div class="buttons">
            <a href="../login.php"><button class="btn btn-sobre bg-black radius"> voltar <i class="fa fa-question-circle"></i></button></a>
          </div>
           
        </div>
        <!-- SERVICOS --> 
        <main class="servicos container">
          <div class="centralizar">
               <form action="processa_entregador.php" method="post">
  
                 <fieldset id="Dados Pessoais">  <legend>  <h2>Dados Pessoais entregador </h2> </legend><br>
                          <p><label for="cnome">Nome Completo:</label><input type="text" name="tnome" id="cnome" size="45" maxlength="40" placeholder="Digita o Seu Nome Completo" class="setinf" required=""></p>
                          <fieldset id="sexo"><legend> Sexo </legend><br>
                               <input type="radio" name="Tsexo" id="cmasculino" value="Masculino" required=""/><label for="cmasculino">Masculino</label> 
                               <input type="radio" name="Tsexo" id="cfemenino" value="Femenino" required=""/><label for="cfemenino">Femenino</label>
                         </fieldset><br>
                <p><label for="nrbi">Nr BI:</label><input type="number" name="nr_bi"  size="45" maxlength="40" placeholder="Digita o nr de BI" class="setinf" required=""></p>
              <p><label for="cdata">Data de Nascimento:</label><input type="date" class="setinf" name="data_nasc" required="" /> </p>
              <p><label for="cdataEmissao">Data de emissao do BI:</label><input type="date" class="setinf" name="data_emissao" required="" /> </p>
              </fieldset>
  
  <fieldset > <legend>  <h2>endereco | celular | carta </h2> </legend>
         <p><label for="nr">Morada:</label><input type="text" name="morada" size="50" maxlength="5000" placeholder="Bairro,quarterao nr casa" class="setinf" required=""></p>
        <p><label for="nrCelular">nr de celular:</label><input type="number" name="nr_celular"   size="9" maxlength="9" placeholder="Digita nr de celular" class="setinf" required=""> </p>
        
        <p><label for="nrCelular">nr da carta:</label><input type="number" name="nr_carta"   size="9" maxlength="9" placeholder="Digita nr de carta" class="setinf" required=""> </p>

        <p><label for="nr">Numero matricula:</label><input type="text" name="nr_matricula" size="50" maxlength="5000" placeholder="Digita a matricula do carro" class="setinf" required=""></p>

        <button type="submit" class="efeito efeito-3">Registar</button>
  </fieldset>
  </form>

          </div>
        </main>
        <!-- NEWSLETTER -->
        <section class="newsletter container bg-black">
          <h2> mercMOZ </h2>
           <h3> o marcado nas tuas mãos </h3>
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
        <script type="text/javascript" src="../bootstrap/js/jquery-3.4.0.js"></script>
        <script type="text/javascript" src="../bootstrap/js/popper.min.js"></script>
        <script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
        <script type="text/javascript" src="../bootstrap/_js/javaScript.js"></script>     
    </body>
</html>