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
<?php
 include'menu.php';

        ?>



<!DOCTYPE html>

<html lang="pt-br">
    <head>
        
        <meta charset="utf-8">
    </head>
    <style>
       


   
        
     #menu,a{
        background-color:  ;
        font-family: arial black;
        color: white;
        padding: 0%;
        margin: 0%;
     }

   #form-group{
    margin-left: 30%;
    border-radius: 10px 10px 10px 10px;
   }
input[type=text]:{
    border-radius: 10px;
}

h3{
    padding-left: 30%;

}
   input[type=text]{border-radius: 10px;}
   select{border-radius: 10px;}
</style>
   <?php
            include'menu2.php';
            ?>

    <body  >
        
       
       <div id="form-group">
        <br/><br/><br/>
        <div >

          
            

           <div class="col-md-3">&nbsp;</div>
                <div class="col-md-6" style="border: #e6fcfc 1px solid; border-radius: 40px 0 50px 0; padding: 10px; background-color: #67cadb ;  box-shadow: -0px -0px 0px ##030000, 6px 9px 15px #030000;
-webkit-box-shadow: -0px -0px 0px #030000, 0px 5px 15px #030000;
-moz-box-shadow: -0px -0px 0px #030000, 0px 0px 15px #030000;">            <h3 > Adicionar patrimônio </h3>         
                    <div>
                        <div class="text-center" style="background-color: #67cadb;">
                
                <form  method="post">

                    <div class="<?php echo!empty($setorErro) ? 'error ' : ''; ?>">
                       <h6>Setor</h6>
                        <FORM>
    
                       <SELECT type="col-md-6" class="col-md-6" NAME="setor" >

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
                            <option value="NUTIC"> NUTIC</option>
                            <option value="UCIN">UCIN </option>
                            <option value="UCP">UCP</option>
                            <option value="UTI COVID">UTI COVID </option>
                            <option value="UTIA ADULTO">UTIA ADULTO </option>
                            <option value="UTINEO">UTINEO </option>
                            <option value="VIGILÂNCIA EPIDEMIOLOGICA">VIGILÂNCIA EPIDEMIOLOGICA </option>
                            </SELECT>
                            </div>
                             <div class="text-center" style="background-color: #67cadb;">
                           
                            <?php if (!empty($setorErro)): ?>
                                <span><?php echo $setorErro; ?></span>
                            <?php endif; ?>
                        </div>


                         <div class="<?php echo!empty($SalaErro) ? 'error ' : ''; ?>">
                        <h6>Sala</h6>
                        <div >
                            <input class="col-md-6" name="Sala" type="text" placeholder="Sala" required="" value="<?php echo!empty($Sala) ? $Sala : ''; ?>">
                            <?php if (!empty($SalaErro)): ?>
                                <span><?php echo $SalaErro; ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
 <div class="text-center" style="background-color: #67cadb;">
                    <div class="<?php echo!empty($RackErro) ? 'error ' : ''; ?>">
                        <FORM>
                            <DIV>
                                <h6>Rack</h6>
                       <SELECT class="col-md-6" NAME="Rack">
                      
                        
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
                        <div >
                            
                        </div>
 <div class="text-center" style="background-color: #67cadb;">
                         <div class="<?php echo!empty($SalaErro) ? 'error ' : ''; ?>">
                       <h6>Rede</h6>
                        <div >
                            <input class="col-md-6" name="Rede" type="text" placeholder="Ponto de Rede" required="" value="<?php echo!empty($Rede) ? $Rede : ''; ?>">
                            <?php if (!empty($RedeErro)): ?>
                                <span><?php echo $RedeErro; ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
 <div class="text-center" style="background-color: #67cadb;">
                    <div class="<?php echo!empty($setorErro) ? 'error ' : ''; ?>">
                        <FORM>
                            <DIV>
                                <h6>Andar</h6>
                       <SELECT class="col-md-6" NAME="andar" ID=andar>
                      
                        
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

   </FORM>
</div>
 <div class="text-center" style="background-color: #67cadb;">

                    <div class="<?php echo!empty($seriedesktopErro) ? 'error ' : ''; ?>">
                         <h6>serie desktop </h6>
                        <div >
                            <input class="col-md-6" name="seriedesktop" type="text" placeholder="serie desktop" required="" value="<?php echo!empty($seriedesktop) ? $seriedesktop : ''; ?>">
                            <?php if (!empty($seriedesktopErro)): ?>
                                <span><?php echo $seriedesktopErro; ?></span>
                            <?php endif; ?>
                        </div>
                    </div>

 <div class="text-center" style="background-color: #67cadb;">
<div class="<?php echo!empty($seriemonitorErro) ? 'error ' : ''; ?>">
                         <h6>Serie Monitor </h6>
                        <div >
                            <input class="col-md-6" name="seriemonitor" type="text" placeholder="serie monitor" required="" value="<?php echo!empty($seriemonitor) ? $seriemonitor : ''; ?>">
                            <?php if (!empty($seriemonitorErro)): ?>
                                <span><?php echo $seriemonitorErro; ?></span>
                            <?php endif; ?>
                        </div>
                    </div>


 <div class="text-center" style="background-color: #67cadb;">

<div class="<?php echo!empty($patrimoniomonitorErro) ? 'error ' : ''; ?>">
                         <h6>Patrimônio Monitor</h6>
                        <div >
                            <input class="col-md-6" name="patrimoniomonitor" type="text" placeholder="patrimonio monitor" required="" value="<?php echo!empty($patrimoniomonitor) ? $patrimoniomonitor : ''; ?>">
                            <?php if (!empty($patrimoniomonitorErro)): ?>
                                <span><?php echo $patrimoniomonitorErro; ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
 <div class="text-center" style="background-color: #67cadb;">
                    <div class="<?php echo!empty($patrimoniodesktopErro) ? 'error ' : ''; ?>">
                         <h6>Patrimônio Desktop </h6>
                        <div >
                            <input class="col-md-6" name="patrimoniodesktop" type="text" placeholder="patrimonio desktop" required="" value="<?php echo!empty($patrimoniodesktop) ? $patrimoniodesktop : ''; ?>">
                            <?php if (!empty($patrimoniodesktopErro)): ?>
                                <span><?php echo $patrimoniodesktopErro; ?></span>
                            <?php endif; ?>
                        </div>
                    </div>

 <div class="text-center" style="background-color: #67cadb;">
<div class="<?php echo!empty($registroErro) ? 'error ' : ''; ?>">
                        <h6>Registro </h6>
                        <div >
                            <input class="col-md-6" name="registro" type="text" placeholder="registro" required="" value="<?php echo!empty($registro) ? $registro : ''; ?>">
                            <?php if (!empty($registroErro)): ?>
                                <span><?php echo $registroErro; ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
 <div class="text-center" style="background-color: #67cadb;">
                 <div class="<?php echo!empty($detalhesErro) ? 'error ' : ''; ?>">
                        <h6>Detalhes </h6>
                        <div >
                            <textarea name="detalhes" cols="40"  placeholder="detalhes"></textarea  value="<?php echo!empty($detalhes) ? $detalhes : ''; ?>">
                          
                            <?php if (!empty($detalhesErro)): ?>
                                <span><?php echo $detalhesErro; ?></span>
                            <?php endif; ?>
                        </div>
                    </div>   

 <div class="text-center" style="background-color: #67cadb;">
                    <div>
                        <br/>

                        <button  class="btn btn-success" type="submit">Adicionar</button>

                      <a href="index.php" class="btn btn-primary" header('location: /index.php');>Voltar</a> 

      </div>
      </div>
                <div class="col-md-3">&nbsp;</div>
            </div></div>
    </body>
</html>


<?php
require 'conectar.php';

if (!empty($_POST)) {
    //Acompanha os erros de validação
    $setorErro = null;
    

    $setor = $_POST['setor'];
    $Sala = $_POST['Sala'];
    $Rack = $_POST['Rack'];
    $Rede = $_POST['Rede'];
    $setor = $_POST['setor'];
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

   

    //Inserindo no Banco:
    if ($validacao) {
        $pdo = Banco::conectar();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO patrimonio (setor,Sala,Rack,Rede,andar,seriedesktop,seriemonitor,patrimoniomonitor,patrimoniodesktop,registro,detalhes) VALUES(?,?,?,?,?,?,?,?,?,?,?)";
        $q = $pdo->prepare($sql);
        $q->execute(array($setor,$Sala,$Rack,$Rede,$andar,$seriedesktop,$seriemonitor,$patrimoniomonitor,$patrimoniodesktop,$registro,$detalhes));
        Banco::desconectar();

        
   
        
    }




}
?>