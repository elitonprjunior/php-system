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
            include'menu2.php';
            ?>
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
} else {
    $pdo = Banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM patrimonio where id = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    $data = $q->fetch(PDO::FETCH_ASSOC);
    Banco::desconectar();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <style type="text/css">
            label{
              text-align: center;
            }

        </style>
 
    </head>
   <link rel="stylesheet" type="text/css" href="css/paginas.css">
  

    <body  >
        



        <div class="container">
            <br/><br/>
            <div class="row">

                <div class="col-md-3">&nbsp;</div>
                <div class="col-md-6" style="border: #e6fcfc 1px solid; border-radius: 40px 0 50px 0; padding: 10px; background-color: #a5e7f2 ;  box-shadow: -0px -0px 0px ##030000, 6px 9px 15px #030000;
-webkit-box-shadow: -0px -0px 0px #030000, 0px 5px 15px #030000;
-moz-box-shadow: -0px -0px 0px #030000, 0px 0px 15px #030000;">                   
                    <div>
                        <div class="text-center" style="background-color: #67cadb;">
                            <label>
                                Setor
                            </label>
                        </div>
                        <div>&nbsp;</div>
                        <div>
                            <label>
                                <?php echo $data['setor']; ?>
                            </label>
                        </div>
                        <div class="text-center" style="background-color: #67cadb;">
                            <label>
                                Sala
                            </label>
                        </div>
                        <div>&nbsp;</div>
                        <div>
                            <label>
                                <?php echo $data['Sala']; ?>
                            </label>
                        </div>

                        <div class="text-center" style="background-color: #67cadb;">
                            <label>
                                Rack
                            </label>
                        </div>
                        <div>&nbsp;</div>
                        <div>
                            <label>
                                <?php echo $data['Rack']; ?>
                            </label>
                        </div>

                        <div class="text-center" style="background-color: #67cadb;">
                            <label>
                               Ponto de Rede
                            </label>
                        </div>
                        <div>&nbsp;</div>
                        <div>
                            <label>
                                <?php echo $data['Rede']; ?>
                            </label>
                        </div>
                    </div>
                    <hr>
                    <div>
                        <div class="text-center" style="background-color: #67cadb;">
                            <label>
                                Andar
                            </label>
                        </div>
                        <div>&nbsp;</div>
                        <div>
                            <label>
                                <?php echo $data['andar']; ?>
                            </label>
                        </div>
                    </div>
                    <hr>
                    <div>
                        <div class="text-center" style="background-color: #67cadb;">
                            <label>
                                Serie Desktop
                            </label>
                        </div>
                        <div>&nbsp;</div>
                        <div>
                            <label>
                                <?php echo $data['seriedesktop']; ?>
                            </label>
                        </div>
                    </div>
                    <hr>
                    <div>
                        <div class="text-center" style="background-color: #67cadb;">
                            <label>
                                Serie Monitor
                            </label>
                        </div>
                        <div>&nbsp;</div>
                        <div>
                            <label>
                                <?php echo $data['seriemonitor']; ?>
                            </label>
                        </div>
                    </div>
                    <hr>
                    <div>
                        <div class="text-center" style="background-color: #67cadb;">
                            <label>
                                Patrimônio Monitor
                            </label>
                        </div>
                        <div>&nbsp;</div>
                        <div>
                            <label>
                                <?php echo $data['patrimoniomonitor']; ?>
                            </label>
                        </div>
                    </div>
                    <hr><div>
                        <div class="text-center" style="background-color: #67cadb;">
                            <label>
                               Patrimonio Desktop
                            </label>
                        </div>
                        <div>&nbsp;</div>
                        <div>
                            <label>
                                <?php echo $data['patrimoniodesktop']; ?>
                            </label>
                        </div>
                    </div>
                    <hr><div>
                        <div class="text-center" style="background-color: #67cadb;">
                            <label>
                                registro
                            </label>
                        </div>
                        <div>&nbsp;</div>
                        <div>
                            <label>
                                <?php echo $data['registro']; ?>
                            </label>
                        </div>
                    </div>
                    <hr><div>
                        <div class="text-center" style="background-color: #67cadb;">
                            <label>
                               detalhes
                            </label>
                        </div>
                        <div>&nbsp;</div>
                        <div>
                            <label>
                                <?php echo $data['detalhes']; ?>
                            </label>
                        </div>
                    </div>
                    <hr>
                    
                   
                   <a id="bt"class="btn btn-danger" href="index.php">Voltar</a>
                    </div>

                </div>
                <div class="col-md-3">&nbsp;</div>
            </div></div>
        <br/><br/><br/><br/>
        
    </body>
</html>

