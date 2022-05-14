<?php 

 

 if(isset($_POST['upload'])){
        $nome_produto=$_POST['nome_produto'];
       $descricao_produto=$_POST['descricao_produto'];
       $preco_produto=$_POST['preco_produto'];
       $id=$_POST['id_vendedor'];
       $nr_produto= $_REQUEST['id'];
         $nI=$_FILES['image']['name'];
       
        // echo $nome_produto ;
echo $descricao_produto;
echo $preco_produto;
echo "----------";
echo $id;

}
 $nome_produto=$_POST['nome_produto'];
       $descricao_produto=$_POST['descricao_produto'];
       $preco_produto=$_POST['preco_produto'];
       $id=$_POST['id_vendedor'];
       $nr_produto= $_REQUEST['id'];
         $nI=$_FILES['image']['name'];
echo "--------";
echo $descricao_produto;
echo $preco_produto;
echo "----------";
echo $id;
       
?>
