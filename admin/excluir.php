
<?php 

include "../conexao.php";

//Indentificando o ID produto
$id= $_GET['id'];

//Verificando se o botao Submit foi clicado

//SQL para deletar a produto
$sql = "DELETE FROM livros 
WHERE codigo = $id";

//Executando o Script no mysql
$res = mysqli_query($con, $sql) or die(mysqli_error($con));

//Verificando se foi atualizado
if ($res == 1) {
echo "<script>
alert ('Excluido com sucesso!') ;
window.location = 'index.php?pagina=livros' ;
</script>" ;

} else {

echo "<script>
alert ('falha ao excluir!') ;
window.location = 'index.php?pagina=livros' ;
</script>" ;	
}

?>