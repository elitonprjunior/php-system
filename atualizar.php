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


<style type="">
   
       #corpo{
         background-color: #67cadb;
         width:650px;
         height: 900px;
         margin-left: 35%;
         padding-left: 0%;
         padding-top: 0%;
         border-radius: 50px;
          box-shadow: -0px -0px 0px ##030000, 6px 9px 15px #030000;
-webkit-box-shadow: -0px -0px 0px #030000, 0px 5px 15px #030000;
-moz-box-shadow: -0px -0px 0px #030000, 0px 0px 15px #030000;
padding-left: 8%;

       }

       input[type="text"]{
        width:200px;
         height: 40px;
         border-radius: 50px;
       }

        select{
        width:200px;
         height: 40px;
         border-radius: 50px;
       }
textarea{
 width:300px;
         height: 100px;
          
}
</style>
<?php
        include'menu.php';

        ?>
<?php
require 'conectar.php';

$id = null;
if (!empty($_GET['id'])) {
    $id = $_REQUEST['id'];
}

if (null == $id) {
    header("Location: rows.php");
}

if (!empty($_POST)) {

   $setorErro = null;
    
    $setor = $_POST['setor'];
    $Sala = $_POST['Sala'];
    $Rack = $_POST['Rack'];
    $Rede = $_POST['Rede'];
    $andar = $_POST['andar'];
    $seriedesktop = $_POST['seriedesktop'];
    $seriemonitor = $_POST['seriemonitor'];
    $patrimoniomonitor = $_POST['patrimoniomonitor'];
    $patrimoniodesktop = $_POST['patrimoniodesktop'];
    $registro = $_POST['registro'];
     $detalhes = $_POST['detalhes'];



    //Validaçao dos campos:
    $validacao = true;
    if (empty($setor)) {
        $setorErro = 'Por favor digite o seu nome!';
        $validacao = false;
    }

    

    // update data
    if ($validacao) {
        $pdo = Banco::conectar();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE patrimonio  set    setor= ?, Sala= ?,Rack= ?,Rede= ?,andar= ?,seriedesktop= ?,seriemonitor= ?,patrimoniomonitor= ?,patrimoniodesktop= ?,registro= ?,detalhes= ? WHERE id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($setor,$Sala,$Rack,$Rede,$andar,$seriedesktop,$seriemonitor,$patrimoniomonitor,$patrimoniodesktop,$registro,$detalhes, $id));
        Banco::desconectar();
       header('Location: index.php');
    exit();

    }
} else {
    $pdo = Banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM patrimonio where id = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    $data = $q->fetch(PDO::FETCH_ASSOC);
    $setor = $data['setor'];
    $Sala = $data['Sala'];
    $Rack = $data['Rack'];
    $Rede = $data['Rede'];
    $andar = $data['andar'];
    $seriedesktop = $data['seriedesktop'];
    $seriemonitor = $data['seriemonitor'];
    $patrimoniomonitor = $data['patrimoniomonitor'];
    $patrimoniodesktop = $data['patrimoniodesktop'];
    $registro = $data['registro'];
     $detalhes = $data['detalhes'];
    
    Banco::desconectar();
}
?>


<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
    </head>

        <br/><br/><br/>
    <link rel="stylesheet" type="text/css" href="css/paginas.css">
  
<div id="corpo">
    <body   >
        <div id="body">
        

        <div class="container">
            <h5>Atualizar</h5>
            

            <form action="atualizar.php?id=<?php echo $id ?>" method="post">

                
                <div class="col-md-24 <?php echo!empty($setorErro) ? 'error ' : ''; ?>">
                       
                        <h6>Setor</h6>
                        <div >
                            
                            <div >
                
                <form action="cadastro.php" method="post">

                    <div class="<?php echo!empty($setorErro) ? 'error ' : ''; ?>">

                        <FORM>
    
                       <SELECT class="text-center" NAME="setor" ID=setor>

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
                            <option value="TI"> TI</option>
                            <option value="UCIN">UCIN </option>
                            <option value="UCP">UCP</option>
                            <option value="UTI COVID">UTI COVID </option>
                            <option value="UTIA ADULTO">UTIA ADULTO </option>
                            <option value="UTINEO">UTINEO </option>
                            <option value="VIGILÂNCIA EPIDEMIOLOGICA">VIGILÂNCIA EPIDEMIOLOGICA </option>
                            </SELECT>
                            </div>
                           
                            

                            <?php if (!empty($setorErro)): ?>
                                <span><?php echo $setorErro; ?></span>
                            <?php endif; ?>
                        </div>
                    </div>

                     </div>

                     <div class="<?php echo!empty($SalaErro) ? 'error ' : ''; ?>">

                        <h6>Sala</h6>
                        <div >
                            <input class="text-center" name="Sala" type="text" placeholder="Sala" required="" value="<?php echo!empty($Sala) ? $Sala : ''; ?>">
                            <?php if (!empty($SalaErro)): ?>
                                <span><?php echo $SalaErro; ?></span>
                            <?php endif; ?>
                        </div>

                    </div>

                    <div class="<?php echo!empty($RackErro) ? 'error ' : ''; ?>">
                        <FORM>
                            <DIV>
                                <h6>Rack</h6>
                       <SELECT class="text-center" NAME="Rack" ID=Rack>
                      
                        
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
                            </SELECT>
                            </div>
                            </DIV>
                            <?php if (!empty($RackErro)): ?>
                                <span><?php echo $RackErro; ?></span>
                            <?php endif; ?>


                            <div class="<?php echo!empty($RedeErro) ? 'error ' : ''; ?>">

                        <h6>Ponto de Rede</h6>
                        <div >
                            <input class="text-center" name="Rede" type="text" placeholder="Rede" required="" value="<?php echo!empty($Rede) ? $Rede : ''; ?>">
                            <?php if (!empty($RedeErro)): ?>
                                <span><?php echo $RedeErro; ?></span>
                            <?php endif; ?>
                        </div>

                    </div>


                        <div >
                            
                       

                    <div class="<?php echo!empty($setorErro) ? 'error ' : ''; ?>">
                        <FORM>
                            <DIV>
                                <h6>Andar</h6>
                       <SELECT class="text-center" NAME="andar" ID=andar>
                      
                        
                            <option value="SUB SOLO">SUB SOLO </option>
                            <option value="TERREO">TERREO </option>
                            <option value="1 ANDAR">1 ANDAR </option>
                            <option value="2 ANDAR">2 ANDAR </option>
                            <option value="3 ANDAR">3 ANDAR </option>
                            <option value="4 ANDAR">4 ANDAR </option>
                            <option value="5 ANDAR">5 ANDAR</option>
                            </SELECT>
                            </div>
                            </DIV>
                            <?php if (!empty($ANDARErro)): ?>
                                <span><?php echo $ANDARErro; ?></span>
                            <?php endif; ?>
                        <div >
                            
                        </div>
                    </div>
                 



                    <div class="<?php echo!empty($seriedesktopErro) ? 'error ' : ''; ?>">
                       <h6>Serie Desktop</h6>
                        <div >
                            <input class="text-center" name="seriedesktop" type="text" placeholder="serie desktop" required="" value="<?php echo!empty($seriedesktop) ? $seriedesktop : ''; ?>">
                            <?php if (!empty($seriedesktopErro)): ?>
                                <span><?php echo $seriedesktopErro; ?></span>
                            <?php endif; ?>
                        </div>
                    </div>


<div class="<?php echo!empty($seriemonitorErro) ? 'error ' : ''; ?>">
                        <h6>Serie monitor</h6>
                        <div >
                            <input class="text-center" name="seriemonitor" type="text" placeholder="serie monitor" required="" value="<?php echo!empty($seriemonitor) ? $seriemonitor : ''; ?>">
                            <?php if (!empty($seriemonitorErro)): ?>
                                <span><?php echo $seriemonitorErro; ?></span>
                            <?php endif; ?>
                        </div>
                    </div>




<div class="<?php echo!empty($patrimoniomonitorErro) ? 'error ' : ''; ?>">
                        <h6>Patrimônio Monitor</h6>
                        <div >
                            <input class="text-center" name="patrimoniomonitor" type="text" placeholder="patrimonio monitor" required="" value="<?php echo!empty($patrimoniomonitor) ? $patrimoniomonitor : ''; ?>">
                            <?php if (!empty($patrimoniomonitorErro)): ?>
                                <span><?php echo $patrimoniomonitorErro; ?></span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="<?php echo!empty($patrimoniodesktopErro) ? 'error ' : ''; ?>">
                        <h6>Patrimonio Desktop</h6>
                        <div >
                            <input class="text-center" name="patrimoniodesktop" type="text" placeholder="patrimonio desktop" required="" value="<?php echo!empty($patrimoniodesktop) ? $patrimoniodesktop : ''; ?>">
                            <?php if (!empty($patrimoniodesktopErro)): ?>
                                <span><?php echo $patrimoniodesktopErro; ?></span>
                            <?php endif; ?>
                        </div>
                    </div>


<div class="<?php echo!empty($registroErro) ? 'error ' : ''; ?>">
                        <h6>Registro</h6>
                        <div >
                            <input class="text-center" name="registro" type="text" placeholder="registro" required="" value="<?php echo!empty($registro) ? $registro : ''; ?>">
                            <?php if (!empty($registroErro)): ?>
                                <span><?php echo $registroErro; ?></span>
                            <?php endif; ?>
                        </div>
                    </div>

                 <div class="<?php echo!empty($detalhesErro) ? 'error ' : ''; ?>">
                        <h6>Detalhes</h6>
                       <div >
                            
                          <input class="text-center" name="detalhes" cols="40" type="text" placeholder="detalhes" required="" value="<?php echo!empty($detalhes) ? $detalhes : ''; ?>">
                            <?php if (!empty($detalhesErro)): ?>
                                <span><?php echo $detalhesErro; ?></span>
                            <?php endif; ?>
                        </div>
                    </div> 






                

                <br/>
                <div>
                     <button  class="btn btn-success" type="submit">Atualizar</button>
                        <a href="index.php" class="btn btn-primary">Voltar</a>
                </div>
            </form>
        </div>                 
    </div> 
    <br/><br/><br/><br/>
</div>
        </body>

</body>
</html>

