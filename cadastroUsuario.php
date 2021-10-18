<?php
error_reporting(0);
?>
<?php
        include'menu2.php';

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
<html>
<head>
	<title>Cadastro Usuario</title>
	<style type="text/css">
		#formulario{
			background-color:#c0eced;
			width:415px;
			height:700px;
			border-radius: 40px;
			margin-left: 40%;
			margin-top: 10%;
			padding-top: 7%;
			padding-bottom: 0%;
			 box-shadow: -0px -0px 0px ##030000, 6px 9px 15px #030000;
-webkit-box-shadow: -0px -0px 0px #030000, 0px 5px 15px #030000;
-moz-box-shadow: -0px -0px 0px #030000, 0px 0px 15px #030000;


		}

		textarea{
			padding-left: 2%;
			padding-right: 10%;
			padding-top: 2%;
			border-radius: 10px;
			margin-left: 10px;	
			background-color:#e3feff;
			border:none;





		}

select{
      padding-left: 10%;
      padding-right: 10%;
      padding-top: 10%;
      border-radius: 10px;
      
      background-color:#e3feff;
      border:none;
        
      
    }

input[type="text"]{
      padding-left: 10%;
      padding-right: 10%;
      padding-top: 10%;
      border-radius: 10px;
      
      background-color:#e3feff;
      border:none;
        
      
    }

		input[type="password"]{
			padding-left: 0%;
			padding-right: 10%;
			padding-top: 10%;
			border-radius: 10px;
			padding-left: 5%;
			background-color:#e3feff;
			border:none;
				
			
		}
		button[type="submit"]{

			
			padding-top: 4%;
			padding-left: 1%;
			border-radius: 8px;
			background-color: #07b1b8;
			color: white;
			margin-left: 64%;
			margin-top: 20%;
			padding-right: 1%;
			font-family: arial black;
			border:none;
			box-shadow: -0px -0px 0px ##030000, 6px 9px 15px #030000;
            -webkit-box-shadow: -0px -0px 0px #030000, 0px 5px 15px #030000;
            -moz-box-shadow: -0px -0px 0px #030000, 0px 0px 15px #030000;
		}

h2{
	text-align: center
}

#formulario{
  margin-left: 40%;
  padding-left: 30px;
  padding-right: 30px;
}

	</style>


</head>
<body>
 <form  method="post">
	<div id="formulario">
		<h2>Cadastrar</h2><br/>
		 <div class="<?php echo!empty($detalhesErro) ? 'error ' : ''; ?>">
         
          <input class="col-md-12" name="email" type="text" placeholder="Email" required="" value="<?php echo!empty($email) ? $email : ''; ?>">
           <br /><br />
          <?php if (!empty($emailErro)): ?>
          <span><?php echo $emailErro; ?></span>
          <?php endif; ?>
            </div>
         <div class="<?php echo!empty($detalhesErro) ? 'error ' : ''; ?>">
           <input class="col-md-12" name="senha" type="password" placeholder="senha" required="" value="<?php echo!empty($senha) ? $senha : ''; ?>">
            <br /><br />
          <?php if (!empty($senhaErro)): ?>
          <span><?php echo $senhaErro; ?></span>
          <?php endif; ?>
           </div>
         <div class="<?php echo!empty($detalhesErro) ? 'error ' : ''; ?>">
          <input class="col-md-12" name="nome" type="text" placeholder="Nome" required="" value="<?php echo!empty($nome) ? $nome : ''; ?>"><br /><br />

          <?php if (!empty($nomeErro)): ?>
          <span><?php echo $nomeErro; ?></span>
          <?php endif; ?>
            </div>
         <div class="<?php echo!empty($detalhesErro) ? 'error ' : ''; ?>">
          <FORM>
                            <DIV>
                                
                       <SELECT class="col-md-12" NAME="adm">
                      
                        
                            <option value="1">Administrador</option>
                            <option value="0">Usuario </option>
                            
                            </SELECT>

                            </div>
                            </DIV>
          <?php if (!empty($admErro)): ?>
          <span><?php echo $admErro; ?></span>
          <?php endif; ?>
          
          
<button  class="btn btn-success" type="submit">Adicionar</button>
           
          
           </div>
          
           
           
</div>
</form>

                             
</body>
</html>
  <?php
            include'menu.php';
            ?>
<?php
require 'conectar.php';

if (!empty($_POST)) {
    //Acompanha os erros de validação
    $emailErro = null;
    

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $nome = $_POST['nome'];
    $adm = $_POST['adm'];
    

    

    //Validaçao dos campos:
    $validacao = true;
    if (empty($email)) {
        $emailErro = 'Por favor digite o seu nome!';
        $validacao = false;
    }

   

    //Inserindo no Banco:
    if ($validacao) {
        $pdo = Banco::conectar();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO usuarios (email,senha,nome,adm) VALUES(?,?,?,?)";
        $q = $pdo->prepare($sql);
        $q->execute(array($email,$senha,$nome,$adm));
        Banco::desconectar();

        
   
        
    }




}
?>