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
<html>
<head>
    </head>
    <style type="text/css">
        
     #menu,a{
        background-color: black ;
        font-family: arial black;
        color: white;
        padding: 0%;
        margin: 0%;
        padding: 15px 15px;


     }

     #texto{
        padding-left: 55%;
        color: white;
     }


   #Image1{
    padding-right: 70%;
    color: white;

   }
#texxto{
        
        color: white;
            padding-right: 1%;
     }
#barra{
    margin-left: 70%;
}



    </style>
    <body>

<div id="menu">
    <tr>


                   <th>  <img id="Image1" class="c_Image1" src="logoo.png" style="border-width:0px;"></th> 
                    
                  <th>  <a id="texxto" href="index.php" >HOME</a></th> 
                  <th>   <a id="texxto" href="formulario.php" >Formulario</a></th> 
                  <th>   <a id="texxto" href="cadastroUsuario.php" >Novo Usuario</a></th> 
                  <th>   <a id="texxto" href="indexusuarios.php" >Permissões</a></th> 
                  <th>   <a  id="texxto"  href="logout.php" >Sair</a></th> 
                    
        
    
                    
                     

                </div>
                
            </body>
            </html>
