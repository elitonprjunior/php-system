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
   <link rel="stylesheet" type="text/css" href="css/paginas.css">
  

    <body>
         <a href="index.php" class="btn btn-primary">Voltar</a>
         <?php
        include'menu.php';

        ?>

<div class="row">
<div class="col-md-12">
<table class="table">
<thead>
	<?php
	$pesquisar = $_POST['pesquisar'];
	$result_cursos = "SELECT * FROM patrimonio  WHERE setor LIKE '%$pesquisar%' LIMIT 5";
	$resultado_cursos = mysqli_query($conn, $result_cursos);
	?>
                            <tr>
                                <th>ID</th>
                                <th>Setor</th>
                                <th>Andar</th>
                                <th>Serie desktop</th>
                                <th>serie monitor</th>
                                <th>patrimônio monitor</th>
                                <th>patrimônio desktop</th>
                                <th>Registro</th>
                                <th>Detalhes</th>
                            </tr>
                        </thead>

            <div class="container">
            <div class="row">
                

  <?php
 $sql = "SELECT * FROM patrimonio";
 $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
 // Obtendo os dados por meio de um loop while
 while($rows_cursos = mysqli_fetch_array($resultado_cursos)){
 	
    $Setor = $rows_cursos['id'];
    $Setor = $rows_cursos['setor']; 
    $Andar = $rows_cursos['andar'];
    $SerieDesktop = $rows_cursos['seriedesktop'];
    $SerieMonitor = $rows_cursos['seriemonitor'];
    $PatrimonioMonitor = $rows_cursos['patrimoniomonitor'];
    $PatrimonioDesktop = $rows_cursos['patrimoniodesktop'];
    $Registro = $rows_cursos['registro'];
    $Detalhes = $rows_cursos['detalhes'];
   ?>

 <tbody>   
                    <tr>
                        <td> <?php echo $rows_cursos['id']; ?></td>
                        <td><?php echo $rows_cursos['setor']; ?></td>
                        <td> <?php echo $rows_cursos['andar']; ?></td>
                        <td> <?php echo $rows_cursos['seriedesktop']; ?></td>
                        <td> <?php echo $rows_cursos['seriemonitor']; ?></td>
                        <td> <?php echo $rows_cursos['patrimoniomonitor']; ?></td>
                        <td> <?php echo $rows_cursos['patrimoniodesktop']; ?></td>
                        <td> <?php echo $rows_cursos['registro']; ?></td>
                        <td> <?php echo $rows_cursos['detalhes']; ?></td>
                       
                   <td>    
                        <div class="text-center">    
                       <a href="listaratualizar.php?id=<?php echo $rows_cursos['id'];  ?>"class="btn btn-primary" >Listar</a>
                        <a href="atualizarfiltrar.php?id=<?php echo $rows_cursos['id'];  ?>"class="btn btn-warning">Atualizar</a>
                        <a href="excluir.php?id=<?php echo $rows_cursos['id'];  ?>" class="btn btn-danger">Excluir</a>
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
