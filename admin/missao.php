<?php

include "../conexao.php";


$sql = "select missao from empresa";

$res = mysqli_query($con, $sql) or die(mysqli_error($con));

$linha = mysqli_fetch_array($res);

$missao = $linha['missao'];


?>
<form action="missao_bd.php" method="post">
<div class="conteudo">

<div class="panel panel-default">
  <div class="panel-heading">
    <h1 class="panel-title">Missão</h1>
  </div>
  <div class="panel-body">
      <textarea  class="form-control" id="texto" name="texto">
		<?php echo $missao; ?>
	  </textarea>
      
      <br />
      
<input class = "btn btn-default" type="submit" value="atualizar" />
<input class = "btn btn-default" type="reset" value="Limpar" />
      
  </div>
</div>


<div class="rodapee">
<h1>I</h1>
</div>

</div>
</form>