<?php
	include_once('conexao.php');
	
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$nome = $_POST['nome'];
	$adm = $_POST['adm'];
	
	$result_msg_contato = "INSERT INTO mensagens_contatos(email,senha,nome,adm) VALUES ('$email', '$senha', '$nome', '$adm', NOW())";
	$resultado_msg_contato= mysqli_query($conn, $result_msg_contato)
?>