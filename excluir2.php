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
require 'conectar.php';

$id = 0;

if (!empty($_GET['id'])) {
    $id = $_REQUEST['id'];

    
}

if (!empty($_POST)) {
    $id = $_POST['id'];


    //Delete do banco:
    $pdo = Banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $sql = "DELETE FROM usuarios where id = ?";



    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    Banco::desconectar();
  
    header('Location: indexusuarios.php');
    exit();

   
}
?>



<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
    </head>
   <?php
        include'menu.php';
        ?>
   <link rel="stylesheet" type="text/css" href="css/paginas.css">
  

    <body  >
        <div class="container">
            <br/><br/><br/><br/><br/><br/><br/>
            <div class="row">
           <div class="col-md-3">&nbsp;</div>
                <div class="col-md-6" style="border: #D7D5C9 1px solid; border-radius: 15px 0 15px 0; padding: 5px; background-color: #F1F1F1; ">  
                
                <form action="excluir2.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                   
                    <div class="text-center"> Deseja excluir essa informação?
                    </div>
                    <div>&nbsp;</div>
                    <div class="text-center">

                        
                       <button  type="submit" class="btn btn-danger" >Sim</button>

                     

                   

                        <a href="indexusuarios.php" class="btn btn-warning">Não</a>

                        
                   
                    </div>
                    <div>&nbsp;</div>
                </form>
            </div> 
            <div class="col-md-3">&nbsp;</div>
            </div>
        </div>
        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        
    </body>    
</html>

