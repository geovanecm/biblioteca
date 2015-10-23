<script>

	function addProduto(id_produto){ //Quando clicado no elemento input
		
			$.ajax({
		        url: 'ajax/addProdutoCarrinho.php',
		        method: "POST",
		        data: { id_produto: id_produto },
		        
		        success: function(data) {
			        alert(data);
			        var totalProdutos = parseFloat($("#totalProdutos").html()) + 1;
		         	$("#totalProdutos").html(totalProdutos);
		        }
		        
		  });
			  
	}
	
</script>


<?php 

include "../conexao.php";

	$sql = "SELECT codigo, imagem, titulo, sinopse, autor_codigo FROM livros"; 

	$res = mysqli_query($con, $sql) or die(mysqli_error($con));
	
	while( $linha = mysqli_fetch_array($res) ){
	
?>

	<div class="listagem_livros">
    
      <div class="imagem_ll">
        <img src="<?php echo $linha['imagem']; ?>" />
       </div>
       
       <div class="p2_ll">
       
       <p class="lead" > <?php echo $linha['titulo']; ?></p>
    	
       
    	<p class="lead" id="autor"><?php 
		$codigo = $linha['autor_codigo'];
		 $sql ="select nome from autor where codigo = '$codigo'";
		 $resP = mysqli_query($con, $sql) or die(mysqli_error($con));
		 $traco = mysqli_fetch_array($resP);
		  echo $traco['nome']; ?></p>
    
      </div>
      
      <div class="p3_ll">
      
        <p >
        <textarea class="form-control"  ><?php echo $linha['sinopse']; ?></textarea>
        </p>
 
 	</div>
    
    <div class="p4_ll">
    	<img src="imagens/livre.png">
    </div>
    
</div>



<?php } ?>