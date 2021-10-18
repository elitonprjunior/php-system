<?php
error_reporting(0);
?>
<?php
    session_start();

    if(isset($_SESSION["usuario"]) && is_array($_SESSION["usuario"])){
        require("acoes/conexao.php");

        $adm  = $_SESSION["usuario"][1];
        $nome = $_SESSION["usuario"][0];
    }else{
        echo "<script>window.location = 'abalogin.php'</script>";
    }
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

        .row{

  color: white;
  font-family: arial;

   #caixas{
    border-radius: 500px;
   }
  
    </style>
    <link rel="stylesheet" type="text/css" href="css/paginas.css">
  
 
    <body id="corpo" >

         
         <?php

        include'menu.php';

        ?>

<div id="top" class="">
    <div id="btnovo" class="col-md-16">
        <a href="cadastro.php" class="btn btn-success">Novo Item</a>
    </div>
<div id="row">
<div class="col-md-12">
<table class="table">
<thead>


    
    <?php

     $sql = "SELECT * FROM patrimonio";
    $pesquisar = $_POST['pesquisar'];
    $result_cursos = "SELECT * FROM patrimonio  WHERE setor  LIKE '%$pesquisar%'";
    
    
    
    
    $resultado_cursos = mysqli_query($conn, $result_cursos);
    $sql = "SELECT * FROM patrimonio";

   
      

    
    ?> 



   

                            <table class="table  table-hove">
                            <tr>
                                <th>ID</th>
                                <th>Setor</th>
                                <th>Sala</th>
                                <th>Rack</th>
                                <th>Ponto de rede</th>
                                <th>Andar</th>
                                <th>Serie desktop</th>
                                <th>serie monitor</th>
                                <th>patrimônio monitor</th>
                                <th>patrimônio desktop</th>
                                <th>Registro</th>
                                <th>

<form  method="POST" action="index.php">

                    <form  method="POST" action="index.php">


    <input type="text" name="pesquisar" value="">
    <input type="submit" name="pesquisar" value="Consultar">

            

            <div class="container">
            <div class="row">

  <?php

 $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
 // Obtendo os dados por meio de um loop while
 while($rows_cursos = mysqli_fetch_array($resultado_cursos))

 {
    
    $Setor = $rows_cursos['id'];
    $Setor = $rows_cursos['setor'];
    $Sala = $rows_cursos['Sala']; 
    $Rack = $rows_cursos['Rack'];
    $Rede = $rows_cursos['Rede'];    
    $Andar = $rows_cursos['andar'];
    $SerieDesktop = $rows_cursos['seriedesktop'];
    $SerieMonitor = $rows_cursos['seriemonitor'];
    $PatrimonioMonitor = $rows_cursos['patrimoniomonitor'];
    $PatrimonioDesktop = $rows_cursos['patrimoniodesktop'];
    $Registro = $rows_cursos['registro'];
    
   ?>

 <tbody>   
                    <tr>
                        <td> <?php echo $rows_cursos['id']; ?></td>
                        <td><?php echo $rows_cursos['setor']; ?></td>
                        <td> <?php echo $rows_cursos['Sala']; ?></td>
                        <td> <?php echo $rows_cursos['Rack']; ?></td>
                        <td> <?php echo $rows_cursos['Rede']; ?></td>
                        <td> <?php echo $rows_cursos['andar']; ?></td>
                        <td> <?php echo $rows_cursos['seriedesktop']; ?></td>
                        <td> <?php echo $rows_cursos['seriemonitor']; ?></td>
                        <td> <?php echo $rows_cursos['patrimoniomonitor']; ?></td>
                        <td> <?php echo $rows_cursos['patrimoniodesktop']; ?></td>
                        <td> <?php echo $rows_cursos['registro']; ?></td>
                        
                       
                   <td>    
                        <div class="text-center">    
                       <a href="listar.php?id=<?php echo $rows_cursos['id'];  ?>"class="btn btn-primary" >Listar</a>
                        <a href="atualizar.php?id=<?php echo $rows_cursos['id'];  ?>"class="btn btn-warning">Atualizar</a>
                        <a href="excluir.php?id=<?php echo $rows_cursos['id'];  ?>" class="btn btn-danger">Excluir</a>
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
