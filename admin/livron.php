<?php 
include "../conexao.php";

	//Verifica se o formulário foi enviado


	if(!empty($_POST)){
		
		//Resgatar as variáveis
		$autor= intval($_POST['autor']);
		$titulo = $_POST['titulo'];
		$sinopse = $_POST['sinopse'];
		
			if($_FILES['fimagem'] != "")
			$caminhoImagem = Operacoes::uploadImg($_FILES['fimagem'], "imagens");
		else 
			$caminhoImagem = "imagens/sem-imagem.jpg";
		
		//Monstagem do script de inserção
		$sql = "INSERT INTO livros(titulo, sinopse, imagem, autor_codigo)VALUES('$titulo',  '$sinopse', '$caminhoImagem', $autor)";
		
		//Executar  o script de inserção
		$res = mysqli_query($con, $sql) or die(mysqli_error($con));
		
		if($res==1){
			Operacoes::mensagem("Cadastrado com sucesso!");
			Operacoes::redirecionaJS("index.php?pagina=livros");
		} else {
			Operacoes::mensagem("Erro ao cadastrar  o livro!");
		}
		
	}

?>

<script type="text/javascript">
		function enviar(){  
    document.form.action = "control?valor=upload";  
    document.form.submit();   // da erro aqui no IE8  
		}  
		  
		function upload(c) {  
		    c.click();  
		}  
</script>


<div class="cont_livron">

<form action="" method="post" enctype="multipart/form-data" class="formulario">

	<div class="con1_livron">

	    <input type="file" name="fimagem" onchange="enviar()" id="input">  
	  <a class="link" href="#" id="foto_n" onclick="upload(document.getElementById('input'))">Carregar</a>
	
	</div>

	<div class="cont2_livron">

	<p id="titulo">
		<label for="nome">Titulo: </label>
		<br />
		<input type="text" name="titulo" class="form-control" id="pwd"  placeholder="Digite o titulo do livro" required />
	</p>


		<br />

	<p>
		<label for="Autor">Autor: </label>
		<br />	
		<select name="autor" class="form-control" id="sel1" required>
			<option value="" disabled="disabled">Escolha um autor</option>
			<?php 
				$sql = "SELECT codigo, nome FROM autor ORDER BY nome ASC";
				$res = mysqli_query($con, $sql);
				while ($linha = mysqli_fetch_array($res)){
					echo "<option value='{$linha['codigo']}'>{$linha['nome']}</option>";
				}
			?>
		</select>
	</p>
	
	</div>

	 <div class="cont3_livron">
	<p>
		<label for="descricao">sinopse: </label>
		<br />
        
		<textarea class="form-control" rows="8" cols="30" name="sinopse" id="sinopse" placeholder="Sinopse do livro"></textarea>
	</p>

	<p>
		<input type="submit" value="Cadastrar" />
		<input type="reset" value="Limpar" />
	</p>
</div>
</div>


</form>
