
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
            if($adm){include'index2.php';}
            else{
            include'index3.php';
            }
            ?>
