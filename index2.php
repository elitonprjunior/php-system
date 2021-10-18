
<?php
error_reporting(0);
?>

<?php
    session_start();

    if(isset($_SESSION["usuario"]) && is_array($_SESSION["usuario"])){
        require("acoes/conexao.php");

        $adm  = $_SESSION["usuario"][1];
        
    }else{
        echo "<script>window.location = 'abalogin.php'</script>";
    }
?>





<!DOCTYPE html>
<html lang="pt-br">
    <head>
        
        <meta charset="utf-8">


    </head>
    <style type="text/css">
     
#barra{
     
}


        h2{
            color:black;
        }
 

input[type=text]{
  
width: 900px;
height: 50px;
margin-left: 55%;
 background-color:#ebfffe;
 border-radius: 10px;


        
     
     

 


    
}
#barra{
    margin-right:650px;
                  box-shadow: -0px -0px 0px ##030000, 6px 9px 15px #030000;
-webkit-box-shadow: -0px -0px 0px #030000, 0px 5px 15px #030000;
-moz-box-shadow: -0px -0px 0px #030000, 0px 0px 15px #030000;
}


    </style>
   <link rel="stylesheet" type="text/css" href="css/paginas.css">
  
<?php
            include'menu2.php';

            ?>

<br/><br/><br/><br/>

                
    <body> 
        <form>

</form>
        <table>
                        <tr>
                        <form class="col-md-6"name="frmBusca" method="post" action="index.php" class="pesquisa">
                           
                            <td > 

                                <input  name="pesquisar" class="form-control" id="pesquisar" type="text" placeholder="">

                            </td>
                            
                            <td>
                                <button id="barra" class="btn btn-primary pull-right h2" type="submit">Buscar</button>
                            </td>
                            
                        </form>
                        </tr>
                    </table>





        
        


   
 
    
</div>     <!-- /#top -->

        <div class="rows">  

            <?php
           include'rows.php';
            
            ?>
        </div>
</body>
</html>