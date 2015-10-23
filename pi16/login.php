<?php

	if(isset($_GET['pagina'])){
		$pagina = $_GET['pagina'];
	} else {
		$pagina = "login";
	}

?>

<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="css/estilologin.css" >
	</head>
		<body>
		
       <div class="pagina">
       
       <?php
	   
	   if($pagina == "login"){
	 		include "plogin.php";
	   }elseif($pagina == "cadastro"){
		   include "pcadastro.php";
	   }else{
		    echo "error";
	   }
	   
	   ?>

	<div class="rodape">
    </div>		  
	</div>

		</body>
</html>