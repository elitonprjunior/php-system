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
  
    </style>
    <link rel="stylesheet" type="text/css" href="css/paginas.css">
  
 
    <body  >

         
         <?php

        include'menu.php';

        ?>




<div id="row">
<div class="col-md-12">
<table class="table">
<thead>

<?php
$sql = "SELECT * FROM patrimonio";
$pesquisarr = $_POST['pesquisarr'];
 $Rack = "SELECT * FROM patrimonio  WHERE Rack like'%$pesquisarr%'";
 $Rackk = mysqli_query($conn, $Rack);
$sql = "SELECT * FROM patrimonio";
 ?>
    
    <?php

    $sql = "SELECT * FROM patrimonio";

    $pesquisar = $_POST['pesquisar'];
     $result_cursos = "SELECT * FROM patrimonio  WHERE setor like'%$pesquisar%' or sala like'%$pesquisar%' or rack like'%$pesquisar%' or seriedesktop like'%$pesquisar%' or seriemonitor like'%$pesquisar%'or patrimoniomonitor like'%$pesquisar%' or patrimoniodesktop like'%$pesquisar%'";
     


    
    
    
    
    $resultado_cursos = mysqli_query($conn, $result_cursos);
    
    $sql = "SELECT * FROM patrimonio";

   
      

    
    ?> 

    <?php
          $busca = $_POST['palavra'];
           $sql = "select * from patrimonio where seriedesktop like'%$busca%' or seriemonitor like'%$busca%'or patrimoniomonitor like'%$busca%' or patrimoniodesktop like'%$busca%'  ";
               


    ?>

     
 <div id="btnovo" class="col-md-16">
        <a id="caixas" href="cadastro.php" class="btn btn-success">Novo Item</a>
    </div>
   <h2>Lista</h2>

<div id="top" class="">
   

                            <table class="table  table-hove">
                                
                            <tr>
                                <th>ID</th>
                                <th>Setor</th>
                                <th>Sala</th>
                                <th>Rack<SELECT id="pesquisarr"  NAME="pesquisarr" ID=pesquisarr>
                            <option value="A">A</option>
                            <option value="B">B </option>
                            <option value="D">D </option>
                            <option value="E">E </option>
                            <option value="EBS">EBS </option>
                            <option value="CA">CA </option>
                            <option value="CB">CB</option>
                            <option value="CC">CC</option>
                            <option value="CD">CD</option>
                            <option value="A1">A1</option>
                            <option value="A2">A2</option>
                            <option value="A3">A3</option>
                            <option value="A4">A4</option>
                            </SELECT></th>
                    

                                <th>Ponto de rede</th>
                                <th>Andar</th>
                                <th>Serie desktop</th>
                                <th>serie monitor</th>
                                <th>patrimônio monitor</th>
                                <th>patrimônio desktop</th>
                                <th>Registro</th>
                                <th>

<form  method="POST" action="index.php">

                      <SELECT id="caixas"  NAME="pesquisar" ID=pesquisar>

                            <option value=""> Inicio</option>
                             
                            <option value="ALMOXARIFADO"> ALMOXARIFADO</option>
                            <option value="AMBULATORIO"> AMBULATORIO </option>
                            <option value="ANATOMIA">ANATOMIA </option>
                            <option value="APACE">APACE </option>
                            <option value="ARQUIVO">ARQUIVO </option>
                            <option value="BANCO SANGUE"> BANCO SANGUE</option>
                            <option value="BANCO SANGUE CHEFIA"> BANCO SANGUE CHEFIA</option>
                            <option value="BLH"> BLH</option>
                            <option value="BIBLIOTECA"> BIBLIOTECA </option>
                            <option value="BRASILIA"> BRASILIA</option>
                            <option value="BRIGADA">BRIGADA </option>
                            <option value="CC">CC </option>
                            <option value="CIDOT"> CIDOT</option>
                            <option value="CL C/CL ORTO"> CL C/CL ORTO</option>
                            <option value="CLINICA MEDICA"> CLINICA MEDICA</option>
                            <option value="CME">CME </option>
                            <option value="CO">CO</option>
                            <option value="COREME"> COREME</option>
                            <option value="CTR">CTR </option>
                            <option value="CUSTOS"> CUSTOS</option>
                            <option value="ENGENHARIA CLINICA">ENGENHARIA CLINICA </option>
                            <option value="ENSINO E PESQUISA">ENSINO E PESQUISA </option>
                            <option value="FARMACIA CENTRAL"> FARMACIA CENTRAL</option>
                            <option value="FARMACIA CLINICA">FARMACIA CLINICA </option>
                            <option value="FATURAMENTO"> FATURAMENTO</option>
                            <option value="FISIO">FISIO </option>
                            <option value="GEADT">GEADT </option>
                            <option value="GEREF">GEREF </option>
                            <option value="GEREM"> GEREM</option>
                            <option value="GERENCIA ADMINISTRATIVA"> GERENCIA ADMINISTRATIVA</option>
                            <option value="GERENCIA DE CUIDADO">GERENCIA DE CUIDADO </option>
                            <option value="GERENCIA DE LOGISTICA">GERENCIA DE LOGISTICA </option>
                            <option value="GERENCIA GERAL">GERENCIA GERAL </option>
                            <option value="GERIN RUBER"> GERIN RUBER</option>
                            <option value="GIR"> GIR</option>
                            <option value="HUMANIZAÇÃO">HUMANIZAÇÃO </option>
                            <option value="IPE">IPE </option>
                            <option value="LABORATORIO">LABORATORIO </option>
                            <option value="LAVANDERIA"> LAVANDERIA</option>
                            <option value="MANUTENÇÃO">MANUTENÇÃO </option>
                            <option value="MATERNIDADE">MATERNIDADE </option>
                            <option value="MOBILIDADE">MOBILIDADE </option>
                            <option value="MV"> MV</option>
                            <option value="NCPC">NCPC </option>
                            <option value="NEFROLOGIA">NEFROLOGIA </option>
                            <option value="NGPESP"> NGPESP</option>
                            <option value="NIA">NIA </option>
                            <option value="NÚCLEO DE CONTROLE DE INFECÇÃO">NÚCLEO DE CONTROLE DE INFECÇÃO </option>
                            <option value="NÚCLEO DE QUALIDADE E SEGURANÇA">NÚCLEO DE QUALIDADE E SEGURANÇA </option>
                            <option value="NURAM">NURAM </option>
                            <option value="NUREM">NUREM </option>
                            <option value="NUSEG">NUSEG </option>
                            <option value="NUTRIÇÃO">NUTRIÇÃO </option>
                            <option value="OBITOS">OBITOS </option>
                            <option value="ODONTOLOGIA">ODONTOLOGIA </option>
                            <option value="OUVIDORIA"> OUVIDORIA</option>
                            <option value="P.S"> P.S</option>
                            <option value="P.S.COVID">P.S.COVID </option>
                            <option value="PAV">PAV</option>
                            <option value="PROTOCOLO"> PROTOCOLO</option>
                            <option value="PSICOLOGIA">PSICOLOGIA </option>
                            <option value="RADIOLOGIA">RADIOLOGIA </option>
                            <option value="RESERVA">RESERVA </option>
                            <option value="RETAGUARDA 3º ANDAR">RETAGUARDA 3º ANDAR </option>
                            <option value="RETAGUARDA 4° ANDAR">RETAGUARDA 4° ANDAR </option>
                            <option value="RH IGES">RH IGES </option>
                            <option value="SERVIÇO SOCIAL">SERVIÇO SOCIAL </option>
                            <option value="SESMETH"> SESMETH</option>
                            <option value="SUPERINTENDENCIA ADMINISTRATIVA">SUPERINTENDENCIA ADMINISTRATIVA</option>
                            <option value="SUPERINTENDENCIA HOSPITALAR"> SUPERINTENDENCIA HOSPITALAR</option>
                            <option value="NUTIC">NUTIC</option>
                            <option value="UCIN">UCIN </option>
                            <option value="UCP">UCP</option>
                            <option value="UTI COVID">UTI COVID </option>
                            <option value="UTIA ADULTO">UTIA ADULTO </option>
                            <option value="UTINEO">UTINEO </option>
                            <option value="VIGILÂNCIA EPIDEMIOLOGICA">VIGILÂNCIA EPIDEMIOLOGICA </option>
                            </SELECT> 
                            <button id="caixas" class="btn btn-primary pull-right h2" type="submit">Buscar</button>
</form>
</th>
                                
                            </tr>
                        </thead>

            

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
                       <a id="caixas" href="listar.php?id=<?php echo $rows_cursos['id'];  ?>"class="btn btn-primary" >Listar</a>
                        <a  id="caixas" href="atualizar.php?id=<?php echo $rows_cursos['id'];  ?>"class="btn btn-warning">Atualizar</a>
                        <a id="caixas" href="excluir.php?id=<?php echo $rows_cursos['id'];  ?>" class="btn btn-danger">Excluir</a>
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
