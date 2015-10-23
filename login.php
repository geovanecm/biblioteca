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
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        <meta name="viewport" content="width=500, initial-scale=1">
        <meta name="viewport" content="width=device-width, user-scalable=no">
		<link rel="stylesheet" type="text/css" href="css/estilologin.css" >
        <link href="css/bootstrap.min.css" rel="stylesheet">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
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