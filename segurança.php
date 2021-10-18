
           <?php
session_start();    
//Incluindo a conexão com banco de dados
include_once("conectar.php");    
//O campo usuário e senha preenchido entra no if para validar


    function seguranca_adm(){
        if((empty($_SESSION['usuarioId'])) || (empty($_SESSION['usuarioEmail'])) || (empty($_SESSION['usuarioNiveisAcessoId']))){       
            $_SESSION['loginErro'] = "Área restrita";
            header("Location: index3.php");
        }else{
            if($_SESSION['usuarioNiveisAcessoId'] != "1"){
                $_SESSION['loginErro'] = "Área restrita";
                header("Location: index3.php");
            }
        }
    }
?>