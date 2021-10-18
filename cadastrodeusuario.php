<?php
        include'menu2.php';

        ?>
<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>
<div id="corpo-form-cad">
	
<h1>cadastro</h1>

<form method="POST" >
	<input type="email" placeholder="Email" name="email">
	<input type="password" name="senha">
    <input type="text" placeholder="Nome/sobrenome" name="nome">
    <input type="text" placeholder="adm" name="adm">
    <input type="submit" value="Cadastrar" name="">




</form>
<?php

class Usuario{
     private $pdo;
     public $msgErro ="";
	public function conectar($nome,$host,$usuario,$senha)
	{
       global $pdo;
       try
       {
       $pdo = new PDO("mysql:dbname=" .$nome.";host=".$host,$usuario,$senha);
	} catch (PDOException $e) {
		$msgErro = $e->getmessage();
	}


}


public function cadastrar($email,$senha,$nome,$adm)
{
   global $pdo;
   //verificar se já esta cadastrado
    $sql = $pdo->prepare("SELECT id FROM usuarios WHERE email = :e");
    $sql->BindValue(":e",$email);
    $sql->execute();
    if($sql->rowCount() > 0)
    {
    	return false; //ja esta cadastrado
    }
    else{
   //caso já esteja cadastrado
    	$sql = $pdo->prepare("INSERT INTO usuarios (email,senha,nome,adm) VALUES (:e, :s, :n, :a)");
    	$sql->BindValue(":e",$email);
    	$sql->BindValue(":s",$senha);
    	$sql->BindValue(":n",$nome);
    	$sql->BindValue(":a",$adm);
    	$sql->execute();
    	return true;
}

}

public function logar($email,$senha)
{

  global $pdo;
}
}

 ?>
</div>
</body>
</html>