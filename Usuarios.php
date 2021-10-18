<?php
error_reporting(0);
?>
<?php
session_start();
include('verifica_login.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
<?php include_once"conectar.php"  ?>
<?php
// Conectando ao banco de dados: 
include_once("conectar.php");
// Criando tabela e cabeçalho de dados:
?>
    </head>
    <style>
 select{
     background-color:#ebfffe;
     border-radius:10px;
 }
        .row{

  color: white;
  font-family: arial;

 }
  button{

 box-shadow: -0px -0px 0px ##030000, 6px 9px 15px #030000;
-webkit-box-shadow: -0px -0px 0px #030000, 0px 5px 15px #030000;
-moz-box-shadow: -0px -0px 0px #030000, 0px 0px 15px #030000;
 }



  
    </style>
    <link rel="stylesheet" type="text/css" href="css/paginas.css">
  

    <body >
         
         <?php

        include'menu.php';

        ?>

<div id="row">
<div class="col-md-12">
<table class="table">
<thead>


    
    <?php

    $sql = "SELECT * FROM usuarios";

    $pesquisar = $_POST['pesquisar'];
     $result_cursos = "SELECT * FROM usuarios  WHERE email like'%$pesquisar%' or senha like'%$pesquisar%' or nome like'%$pesquisar%' or adm like'%$pesquisar%'or id like'%$pesquisar%'";

    
    
    
    
    $resultado_cursos = mysqli_query($conn, $result_cursos);
    $sql = "SELECT * FROM usuarios";

   
      

    
    ?> 
                            <table class="table  table-hove">
                            <tr>
                                <th>Email</th>
                                <th>Senha</th>
                                <th>Nome</th>
                                <th>adm</th>
                                <th>id</th>
                                
                                <th>




            

            <div class="container">
            <div class="row">
                

  <?php

 $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
 // Obtendo os dados por meio de um loop while
 while($rows_cursos = mysqli_fetch_array($resultado_cursos))

 {
    
    $email = $rows_cursos['email'];
    $senha = $rows_cursos['senha'];
    $nome = $rows_cursos['nome']; 
    $adm = $rows_cursos['adm'];
    $id = $rows_cursos['id'];    
    
    
   ?>

 <tbody>   
                    <tr>
                        <td> <?php echo $rows_cursos['email']; ?></td>
                        <td><?php echo $rows_cursos['senha']; ?></td>
                        <td> <?php echo $rows_cursos['nome']; ?></td>
                        <td> <?php echo $rows_cursos['adm']; ?></td>
                        <td> <?php echo $rows_cursos['id']; ?></td>

                        
                       
                  <td>    
                        <div class="text-center">    
                       
                        <a  id="caixas" href="atualizarusuario.php?id=<?php echo $rows_cursos['id'];  ?>"class="btn btn-warning">Atualizar</a>
                        <a id="caixas" href="excluir2.php?id=<?php echo $rows_cursos['id'];  ?>" class="btn btn-danger">Excluir</a>
                     </td>
                    </tr>
                    
                    </tbody>

                    </div>


    
<?php
   echo " </tr>";
 
 }
 mysqli_close($conn);
 echo "</table>";
 ?>
 </div>                
       

    </body>

</html>
