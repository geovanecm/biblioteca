<?php

	class Operacoes{
		
		public static function redirecionaJS($url=""){
			echo "<script>
					window.location='$url';
				  </script>";
		}
		
		
		public static function mensagem($msg){
			echo "<script>
					alert('$msg');
				  </script>";
		}
		
	
		public static function redirecionaPHP($url=""){
			header("location: $url");	
		}
		
		public static function uploadImg($file, $destino){
			
			$nomeImagem = $file['name'];
			$destino .= "/" . mktime(0,0,0) . $nomeImagem;
			move_uploaded_file($file['tmp_name'], $destino);
			return $destino;
			
		}
		
	}

?>