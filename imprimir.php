<?php include_once"conectar.php";?>
<header>
	<script type="text/javascript">"window.close();"</script>
</header>
<?php//A baixo Recebe os dados vindo formulario.php
    $setor = $_POST['setor'];
    $sala = $_POST['sala'];
    $rack = $_POST['rack'];
    $rede = $_POST['rede'];
    $andar = $_POST['andar'];
    $seriedesktop = $_POST['seriedesktop'];
    $seriemonitor = $_POST['seriemonitor'];
    $patrimoniomonitor = $_POST['patrimoniomonitor'];
    $patrimoniodesktop = $_POST['patrimoniodesktop'];
    $registro = $_POST['registro'];
    $detalhes = $_POST['drtalhes'];

    //criar a conexão
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
    //checa a conexao
    if(!$conn){
    	die ("conexao falhou:" . mysql_connect_erro());

    }

    //echo "conetado com sucesso";

    $sql = "INSERT INTO patrimonio (setor,Sala,Rack,Rede,andar,seriedesktop,seriemonitor,patrimoniomonitor,patrimoniodesktop,registro,detalhes) VALUES(?,?,?,?,?,?,?,?,?,?,?)";
    if(mysqli_query($conn, $sql)) {

    	//echo "foi cadastrado com Sucesso";
    	//header("");

    }else{
    	echo "erro:" . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
    ?>

    <?php
    $setor = $_POST['setor'];
    $sala = $_POST['sala'];
    $rack = $_POST['rack'];
    $rede = $_POST['rede'];
    $andar = $_POST['andar'];
    $seriedesktop = $_POST['seriedesktop'];
    $seriemonitor = $_POST['seriemonitor'];
    $patrimoniomonitor = $_POST['patrimoniomonitor'];
    $patrimoniodesktop = $_POST['patrimoniodesktop'];
    $registro = $_POST['registro'];
    $detalhes = $_POST['drtalhes'];


                      
                                
                        ?php echo $rows_cursos['id']; ?>
                        <td><?php echo $rows_cursos['setor']; ?></td>
                        <td> <?php echo $rows_cursos['Sala']; ?></td>
                        <td> <?php echo $rows_cursos['Rack']; ?></td>
                        <td> <?php echo $rows_cursos['Rede']; ?></td>
                        <td> <?php echo $rows_cursos['andar']; ?></td>
                        <td> <?php echo $rows_cursos['seriedesktop']; ?></td>
                        <td> <?php echo $rows_cursos['seriemonitor']; ?></td>
                        <td> <?php echo $rows_cursos['patrimoniomonitor']; ?></td>
                        <td> <?php echo $rows_cursos['patrimoniodesktop']; ?></td>
                        <td> <?php echo $rows_cursos['registro']; ?></td>
                     
                      ?>
                      <script type="text/javascript">
                      	window.print();


                      </script>
                      <script type="text/javascript">
                      	window.onload = function() {window.print();}
                      </script>