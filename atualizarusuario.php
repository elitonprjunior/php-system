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
         width:600px;
         height: 500px;
         margin-left: 35%;
         padding-left: 1%;
         padding-top: 0%;
         border-radius: 50px;
          box-shadow: -0px -0px 0px ##030000, 6px 9px 15px #030000;
-webkit-box-shadow: -0px -0px 0px #030000, 0px 5px 15px #030000;
-moz-box-shadow: -0px -0px 0px #030000, 0px 0px 15px #030000;
padding-left: 8%;

       }

       input[type="text"]{
        width:250px;
         height: 40px;
         border-radius: 50px;
       }

        input[type="password"]{
        width:250px;
         height: 40px;
         border-radius: 50px;
       }

        select{

        width:250px;
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
    header("Location: indexusuarios.php");
}


if (!empty($_POST)) {

   $emailErro = null;
    
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $nome = $_POST['nome'];
    $adm = $_POST['adm'];
    


    //Validaçao dos campos:
    $validacao = true;
    if (empty($email)) {
        $setorErro = 'Por favor digite o seu nome!';
        $validacao = false;
    }

    

    // update data
    if ($validacao) {
        $pdo = Banco::conectar();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE usuarios  set    email= ?, senha= ?,nome= ?,adm= ? WHERE id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($email,$senha,$nome,$adm, $id));
        Banco::desconectar();
       header('Location: indexusuarios.php');
    exit();

    }

} else {
    $pdo = Banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM usuarios where id = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    $data = $q->fetch(PDO::FETCH_ASSOC);
    $email = $data['email'];
    $senha = $data['senha'];
    $nome = $data['nome'];
    $adm = $data['adm'];
    
    
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
  

    <body>
        <div id="corpo">
        

        <div class="container">
           <h5>Atualizar</h5>


           <form action="atualizarusuario.php?id=<?php echo $id ?>" method="post">
            
  

<div class="<?php echo!empty($emailErro) ? 'error ' : ''; ?>">
                       <h6>Email</h6>
                        <div >
                            <input class="text-center" name="email" type="text" placeholder="email" required="" value="<?php echo!empty($email) ? $email : ''; ?>">
                            <?php if (!empty($emailErro)): ?>
                                <span><?php echo $emailErro; ?></span>
                            <?php endif; ?>

                        </div>
                    </div>

                    <div class="<?php echo!empty($senhaErro) ? 'error ' : ''; ?>">
                       <h6>Senha</h6>
                        <div >
                            <input class="text-center" name="senha" type="password" placeholder="senha" required="" value="<?php echo!empty($senha) ? $senha : ''; ?>">
                            <?php if (!empty($senhaErro)): ?>
                                <span><?php echo $senhaErro; ?></span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="<?php echo!empty($nomeErro) ? 'error ' : ''; ?>">
                       <h6>Nome</h6>
                        <div >
                            <input class="text-center" name="nome" type="text" placeholder="Nome" required="" value="<?php echo!empty($nome) ? $nome : ''; ?>">
                            <?php if (!empty($nomeErro)): ?>
                                <span><?php echo $nomeErro; ?></span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="<?php echo!empty($admErro) ? 'error ' : ''; ?>">
                    
                        <h6>Adm</h6>
                                 <div >
                       <SELECT class="text-center" NAME="adm" ID=andar>
                      
                        
                            <option value="1">Administrador</option>
                            <option value="0">Usuarios</option>
                            
                            </SELECT>
                            
                            </div>
                            <?php if (!empty($admErro)): ?>
                                <span><?php echo $admErro; ?></span>
                            <?php endif; ?>
                       


                

                <br/>
                <div>
                     <button  class="btn btn-success" type="submit">Atualizar</button>
                        <a href="indexusuarios.php" class="btn btn-primary">Voltar</a>
                </div>
            </form>
        </div>                 
    </div> 
    <br/><br/><br/><br/>
</div>
        </body>

</body>
</html>
