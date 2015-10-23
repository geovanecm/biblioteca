
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/vanillaSlideshow.css">
		<script type="text/javascript" >

		function menuhover(){
			
			var obj = document.getElementById('conteudo');
			var obj2 = document.getElementById('body');
			
			if(obj.style.display == "none")
				obj.style.display="block";
				
			else
				obj.style.display="none";
		
			
		}

	

</script>
		<title>Seja bem vindo</title>
	</head>
<body>


<div class="menuy" >
  <div id="menu2">
	<img id="menu" src="images/menu.png" onClick="menuhover();"  alt="menu" >
  </div>
	<div id="itens_menu" style="display: inline-block; background-color: #F9F9F9; padding: 2% 0;">
	
	
	<a href="login.php"><img src="images/login.png" id="iconelogin" alt="login"></a>
	<br />
	<input type="search" id="barrapesquisa" placeholder="Pesquise o livro desejado">
	
	<br />
	
	 	<a href="">Item 1</a>
	 	<a href="">Item 2</a>
	 	<a href="">Item 3</a>
	 
     <p>
     
     	O Textos Grátis é um serviço gratuito para publicação de textos e qualquer tipo de conteúdo textual, textos sobre: trabalhos acadêmicos, artigos científicos, textos românticos, poeticos, textos de amor, poemas, argumentativo, monografias, crônicas, artigos jurídicos e educacionais. Você publica textos gratuitamente, receber visitas para seu site ou desenvolver uma reputação na internet sendo referência sobre algum assunto.
DICA IMPORTANTE: Existem muitos benefícios em publicar textos gratuitos no nosso diretório de textos, por exemplo, divulgando textos sobre seu site, ele receberá visitas através dos links que você inserir nos textos e isso vai melhorar a reputação do seu site nos motores de busca.
Para enviar textos para publicação no Textos Grátis, crie seu perfil de escritor.
Temos 5390 textos online publicados e 1603 autores registrados em nosso site de texto.
ARTE & ENTRETENIMENTO (923)
Arte (33)
Música (15)
BLOG (160)
Nenhuma categoria
CASA & JARDIM (166)
Cozinhas (8)
Decoração (45)
Ferramentas (14)
Jardinagem (9)
Móveis (24)
Segurança da Casa (16)
DIREITO (56)
Direito Tributário (4)
Direitos Trabalhistas (4)
Doutrina (1)
Jurisprudência (1)
Legislação (2)
FINANÇAS (140)
Crédito (10)
Dinheiro (23)
Emprestimos (11)
Finanças Pessoais (24)
Investimentos (42)
Seguro (3)
INFORMÁTICA (186)
Jogos (17)
Laptops (4)
Programação (6)
Segurança (49)
Téc. da Informação (17)
MARKETING (144)
Marketing Internacional (16)
Marketing Pessoal (21)
PSICOLOGIA & AUTO AJUDA (46)
Auto Ajuda (8)
Gerência de Tempo (0)
Psicoterapia (12)
Redução de Stress (3)
SAÚDE (257)
Medicina (30)
Medicina Alternativa (13)
Nutrição (20)
AUTOMÓVEIS (187)
Automobilismo (7)
Carros (29)
Indústria Automotiva (13)
Motocicletas (84)
CARREIRA (71)
Entrevistas (7)
Recursos Humanos (25)
CIÊNCIAS (38)
Biologia (4)
Química (1)
EDUCAÇÃO (247)
Aulas Particulares (8)
Ciência (99)
Educação Infantil (16)
Educação Online (16)
Educação Superior (12)
Línguas (11)
HUMOR (3)
Piadas (1)
INTERNET (601)
Blogs (55)
Comércio Eletrônico (146)
Cupom de Desconto (1)
Hospedagem (9)
Marketing na Internet (54)
SEO & SEM (16)
Web Design (19)
NEGÓCIOS (631)
Administração (49)
Atendimento ao Cliente (38)
Economia (7)
Gerência (31)
Gerência de Projetos (12)
Gestão (52)
Negócios Online (111)
PUBLICIDADE (24)
Design Gráfico (5)
Multimídia (3)
SERVIÇOS (927)
Construção Civil (4)
Festas e Buffets (2)
BELEZA (648)
Cirurgia Plástica (0)
Cosméticos (42)
Jóias & Bijuterias (240)
Moda (194)
CASA & FAMÍLIA (235)
Adolescentes (20)
Animais de Estimação (6)
Bebês (16)
Casamento (16)
Divórcio (7)
Gravidez (6)
Mulher (32)
CULINÁRIA (19)
     
     </p>
	 	
	 	
	 	
	 </div>

</div>



<div id="vanilla-slideshow-container">

	<!-- 
		Slideshow images 
		you can also use data-src attribute and full path of image to use css background images 
	-->
	<div id="vanilla-slideshow">
		
		<div class="vanilla-slide">
			<img src="images/1.jpg" alt="tiger">
			<!-- content here -->
		</div>

		<div class="vanilla-slide">
			<img src="images/2.jpg" alt="tiger">
			<!-- content here -->
		</div>
		
		<div class="vanilla-slide">
			<img src="images/3.jpg" alt="tiger">
			<!-- content here -->
		</div>
		
		<div class="vanilla-slide">
			<img src="images/4.jpg" alt="tiger">
			<!-- content here -->
		</div>

	</div>

	<!-- slideshow indicators -->
	<div id="vanilla-indicators"></div>

	<!-- slideshow arrows -->
	<div id="vanilla-slideshow-previous">
		<img src="images/arrow-previous.png" alt="slider arrow">
	</div>
	<div id="vanilla-slideshow-next">
		<img src="images/arrow-next.png" alt="slider arrow">
	</div>

</div>


<div id="conteudo">
	<div class="topoc" >
		<img src="images/login.png" alt="login">
	</div>
</div>


<script src="js/vanillaSlideshow.min.js"></script>
<script>
	vanillaSlideshow.init({
		slideshow: true,
		delay: 5000,
		arrows: true,
		indicators: true,
		random: false,
		animationSpeed: '1s'
	});
</script>

</body>
</html>
