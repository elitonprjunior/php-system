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

   
#btnovo{
            margin-left: 85%;


        }
   
          #caixas{
              box-shadow: -0px -0px 0px ##030000, 6px 9px 15px #030000;
-webkit-box-shadow: -0px -0px 0px #030000, 0px 5px 15px #030000;
-moz-box-shadow: -0px -0px 0px #030000, 0px 0px 15px #030000;
          }

        .row{

  color: white;
  font-family: arial;}

 td{ font-family: arial;}

 select{
     background-color:#ebfffe;
     border-radius:10px;
 }

  html, body {
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 0;
}

 tr th {
    background: black; 
    border="1"/* cor antes da impressão */
    border: solid;
    color: white;

}

@media print{
  table thead tr th{
    box-shadow: 0 0 0 1000px red inset;  /* cor para impressão */
  }
}
.div {
  border: solid;
  display: inline-block;
  width: 300px;
  overflow: auto;
}

input[type=button]{
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin-left: 95%;
}
    </style>
    <link rel="stylesheet" type="text/css" href="css/paginas.css">
    <link rel="stylesheet" type="text/css" href="/print.css" media="print" />
  
 
    <body  >

         
        
        <?php

        include'menu2.php';

        ?>
        <?php

        include'menu.php';

        ?>




<div id="row">
<div class="col-md-12">
<table class="table">
<thead>


    
    <?php

    $sql = "SELECT * FROM patrimonio";

    $pesquisar = $_POST['pesquisar'];
     $result_cursos = "SELECT * FROM patrimonio  WHERE setor like'%$pesquisar%' or sala like'%$pesquisar%'  or seriedesktop like'%$pesquisar%' or seriemonitor like'%$pesquisar%'or patrimoniomonitor like'%$pesquisar%' or patrimoniodesktop like'%$pesquisar%'";

    
    
    
    
    $resultado_cursos = mysqli_query($conn, $result_cursos);
    $sql = "SELECT * FROM patrimonio";

   
      

    
    ?> 
     <?php

    $sql = "SELECT * FROM patrimonio";

    $pesquisar = $_POST['pesquisar'];
     $result_cursos = "SELECT * FROM patrimonio  WHERE setor like'%$pesquisar%' or sala like'%$pesquisar%'  or seriedesktop like'%$pesquisar%' or seriemonitor like'%$pesquisar%'or patrimoniomonitor like'%$pesquisar%' or patrimoniodesktop like'%$pesquisar%'";

    
    
    
    
    $resultado_cursos = mysqli_query($conn, $result_cursos);
    $sql = "SELECT * FROM patrimonio";

   
      

    
    ?> 
    <?php
          $busca = $_POST['palavra'];
           $sql = "select * from patrimonio where seriedesktop like'%$busca%' or seriemonitor like'%$busca%'or patrimoniomonitor like'%$busca%' or patrimoniodesktop like'%$busca%'  ";
               


    ?>
     
 <div id="btnovo" class="col-md-16">
        
    </div>
    <form>

<input type="button" onclick="printDiv('printable')" value="Imprimir" />
</form>
 <table>
                        <tr>
                        <form class="col-md-6"name="frmBusca" method="post" action="formulario.php" class="pesquisa">
                           
                            <td > 

                                <input  name="pesquisar" class="form-control" id="pesquisar" type="text" placeholder="">

                            </td>
                            
                            <td>
                                <button id="barra" class="btn btn-primary pull-right h2" type="submit">Buscar</button>
                            </td>
                            
                        </form>
                        </tr>
                    </table>
<script>
        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
    </script>
<div id="print" class="conteudo">
   <h2>Lista</h2>

<div  id='printable' class="">
   

                            <table  border='1' class="table  table-hove">
                                
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
                                


                        </thead>

            

            <div id='printable' class="container">
            <div id='printable' class="row">
                

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
                        
                    
                    
                    </tbody>

                    


    
<?php
   echo " </tr>";
 
 }
 mysqli_close($conn);
 echo "</table>";
 ?>

 
 </div>                
       
</div>
    </body>

</html>
