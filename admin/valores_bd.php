<html>
	<head>
    	<title>Missao</title>
        <style>
		 #notificacao{
		 	text-align: center;
			margin-top: 10%;
		 }
			</style>
        <meta charset="utf8" />
		<meta name="viewport" content="width=device-width, user-scalable=no"/>
        <link href="css/bootstrap.min.css" rel="stylesheet">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   		 <script src="js/bootstrap.min.js"></script>
    </head>
    	<body>
        
        
        	<?php
			include "../conexao.php";

$texto = $_POST['texto'];

	$sql = "UPDATE 
				empresa 
			SET
				valores='$texto'";
	
	//Executa o script sql no banco de dados e armazena a resposta
	$res = mysqli_query($con, $sql) or die(mysql_error());

			
				if( $res == 1 ){ ?>	
	<script type="text/javascript">
		setTimeout("document.location = 'index.php?pagina=valores'",1000);
	</script>
	<div class="alert alert-success" id="notificacao" role="alert">Dados atualizados com sucesso !!</div>
<?php	
	}else{
?>		
		<script type="text/javascript">
		setTimeout("document.location = 'index.php?pagina=valores'",2000);
	</script>
		<div class="alert alert-danger" id="notificacao" role="alert">Erro ao atualizar, tente mais tarde ou consute o admin!!!</div>
<?php	
    }
	
	
			?>
        
        </body>
</html>
