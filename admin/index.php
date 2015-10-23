<?php include 'Operacoes.php'; ?>


<!Doctype html>
<html>
	<head>
		<title>Seja bem vindo</title>
		<meta charset="utf8" />
		<meta name="viewport" content="width=device-width, user-scalable=no"/>
		<link rel="stylesheet" href="css/estilo.css" >
        <link href="css/bootstrap.min.css" rel="stylesheet">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js">
    </script>
		<script type="text/javascript" src="js/"></script>
	
		
	</head>
	
	<body >
	
    
    
		
		
			<div class="menu">
  	<ul class="menu-list">
  		  
           <li><a>Empresa</a>
	       <ul class="sub-menu">
	        <li><a href="index.php?pagina=missao">missão</a></li>
	        <li><a href="index.php?pagina=visao">Visão</a></li>
	        <li><a href="index.php?pagina=valores">Valores</a></li>
	      </ul>
	    </li>
	    <li><a href="index.php">livros</a>
         <ul class="sub-menu">
	        <li><a href="index.php?pagina=livron">Novo</a></li>
	        <li><a href="index.php?pagina=livros">Cadastrados</a></li>
	        <li><a href="">autor</a></li>
	      </ul>
	    </li>
        </li>
	    <li>
	    <a href="index.php?pagina=carrinho_produtos">Pedidos</a>
	    <li><a href="index.php?pagina=contato">Contato</a></li>
	  </ul>
	</div>
		
		<div id="conteudo">
	<?php	
		
		
		
		if(!isset($_GET['pagina'])){
			
		}else{
		
		$pagina = $_GET['pagina'];
		$arquivo = $pagina . ".php";
	
			include "$arquivo";
			
		}
		 
		
	?>	
		</div>
		
		<div id="rodape">
					
		</div>
	
	</body>
	
</html>
