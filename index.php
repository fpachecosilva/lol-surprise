<!DOCTYPE HTML>
<html>

<head>

	<?php
	include 'assets/config.php';

	$tituloPagina = '' . $empresa;
	$descricaoCompartilhamento = '';

	$urlPagina = $url;
	$imagemCompartilhamento = $images . 'compartilhamento.jpg';
	$sessao = 'home';
	?>
	<title><? echo $tituloPagina ?></title>
	<?php include 'assets/head.php'; ?>

	<meta property="og:title" content="<? echo $tituloPagina ?>" />
	<meta name="description" content="<? echo $descricaoCompartilhamento ?>" /> <!-- DESCRIÇÃO SEO GOOGLE -->
	<meta property="og:description" content="<? echo $descricaoCompartilhamento ?>" /> <!-- DESCRIÇÃO FACEBOOK -->

</head>

<body class="Home">

	<header class="DesktopItem">
		<article>
			<div class="box-links">
				<a href="#menu-abas">Experiência</a>
			</div>
			<div class="box-social">
				<a class="botaotopo" href="#ingressos">Comprar Passaportes</a>
				<?php include 'assets/social.php'; ?>
			</div>
		</article>
	</header>

	<section id="principal">
		<img class="bg" src="<? echo $images ?>bg.jpg">
		<!-- <article>
			<h1>Uma aventura inesquecível para toda família</h1>
		</article> -->

		<!-- <h3 id="ancora-abas">
			
		</h3> -->
		<a class="Btn-primary" href="#ingressos">Comprar Passaportes</a>
	</section>

	<section id="menu-abas">
		<h2>LOL SURPRISE EXPERIENCE</h2>
		<!-- <div class="menu-links">
			<a class="megashow ativo" href="#ancora-abas">SHOW</a>
			<a class="espetaculo" href="#ancora-abas">O ESPETÁCULO</a>
			<a class="exposicao" href="#ancora-abas">OUTRAS INFORMAÇÕES</a>
		</div> -->
		<p id="megashow">
			A experiência imersiva dá as boas-vindas ao maravilhoso mundo de L.O.L. Surprise!. A atração proporciona ao público a oportunidade de se transportar ao universo das bonecas com a caracterização das crianças, além de muitas atividades interativas com as personagens oficiais. Uma das maiores sensações entre as crianças desembarca no estacionamento do Shopping Eldorado, em São Paulo, a partir do dia 23 de setembro. L.O.L. Surprise! Experience é uma atração inédita no Brasil que transportará os visitantes para o universo temático de L.O.L. Surprise!, com suas instalações imersivas e trazendo muita interatividade com as personagens oficiais. Desde a fachada deslumbrante com iluminação especial, crianças e adultos já terão certeza de que estão prestes a fazer parte de algo muito especial.
			<br><br>
			O elenco é composto por dezenas de artistas (entre atrizes, cantoras e bailarinas) com caracterização das principais O.M.G.s, irmãs mais velhas das L.O.L.s, que receberão os visitantes logo na chegada. As O.M.G.s Lady Diva, Neonlicious, Da Boss, Dollie, entre outras guiarão os participantes por esse mundo imersivo com muita música, alegria, diversão e atitude.
			<br><br>
			Assim como na concepção do produto licenciado pela MGA Entertainment, a experiência também trará grandes surpresas aos visitantes. Já ao desembarcarem nas instalações, as crianças poderão escolher qual L.O.L. querem ser, entre oito opções disponíveis (L.O.L. e L.O.L. Boy), ou ainda optar pela personagem surpresa, abrindo uma das bolas de L.O.L. Surprise! disponíveis.
			<br><br>
			Após vestirem a fantasia, as O.M.G.s levarão os visitantes para a próxima etapa da experiência, onde são maquiados pelas personagens para que se sintam como verdadeiras estrelas pop. Um momento mágico de interação com as bonecas favoritas dos pequenos e que ganharam vida dentro das instalações do evento.
			<br><br>
			A partir daí, a diversão continua garantida com uma vivência encantadora dentro de ambientes multicoloridos e que trazem atividades super envolventes. Os pequenos se sentirão dentro do mundo L.O.L. Surprise! e, após passarem por uma bola gigante, serão transportados para o encontro com as diversas personagens L.O.Ls (entre elas Diva, Queen Bee, Splash Queen e Kitty Queen) em um percurso com cenografia fashion e que convida a todos para que façam registros e eternizem a experiência única pela qual estão passando. O evento remonta as diferentes locações L.O.L. Surprise! como a casa e a Club House.
			<br><br>
			Ao final, todos se encontram na área de confraternização do evento. O espaço conta com lanchonete temática e piscina de bolinha, e é perfeito para a troca de ideias e comemorações.
			<br><br>
			O passaporte de L.O.L. Surprise! Experience custa a partir de R$120,00 (para uma criança e o responsável) A experiência tem duração total de cerca de 70 minutos e envolve muita diversão com caracterização (fantasia e maquiagem) feita pelas O.MG.s, dança com as L.O.L.s, música, cenografia glamurosa instagramável para eternizar o momento, praça de alimentação temática para comemorações e confraternizações, além de muitas outras surpresas incríveis. L.O.L. Surprise! Experience é a experiência perfeita para todos os fãs desses maravilhosos brinquedos colecionáveis e que viraram uma febre entre os mais novos.
			<br><br>
			Obs.: Todas as regras de higiene e distanciamento social são respeitadas.
		</p>
		<!-- <p id="espetaculo">
			Uma fantástica experiência ao lado de criaturas pré-históricas que resolveram adotar São Paulo, Rio de Janeiro como seu habitat natural. Jurassic Safari Experience se passa em um parque imaginário construído por cientistas que conseguiram recriar dinossauros de diversos períodos, como triássico, jurássico e cretáceo. Ao longo do trajeto, dentro de seus carros, todos se depararão com diferentes espécies de dinos até chegarem em uma arena. Ali, uma nova viagem começa. Mike, rapaz jovem e engraçado, será o nosso guia neste mundo encantado em que enormes répteis voltam à vida e interagem com a plateia. Durante toda a apresentação, Mike estará presente para nos explicar sobre o surgimento do Jurassic Safari Experience e como esses animais migníficos foram parar ali, além de dar detalhes científicos de cada um deles. O público irá se encantar com espécies de dinos como braquiossauros, estegossauros, anquilossauro, triceratops, o temido T-Rex e muitos outros. Uma aventura inesquecível para toda a família.
			<br><br>
			Pesquisa científica<br>
			Todo o conteúdo do megashow tem supervisão de Bruno Gonçalves Augusta. Paleontólogo integrante do Laboratório de Paleontologia – Museu de Zoologia da Universidade de São Paulo (MZUSP), Bruno possui graduação em Ciências Biológicas pelo Centro Universitário Fundação Santo André (2007) e Mestrado em Sistemática, Taxonomia Animal e Biodiversidade pelo Museu de Zoologia da USP (2013). Realizou doutorado no Programa de Pós-Graduação em Zoologia do Instituto de Biociências da USP e é coordenador geral do Grupo CienciAção - Divulgação Científica. Tem experiência nas áreas de Zoologia, com ênfase em Paleozoologia; e Divulgação Científica, com ênfase em educação não-formal de Paleontologia em Exposições, Museus e Centros de Ciência. Sua pesquisa está concentrada em ontogenia, morfometria e filogenia de répteis fósseis.
		</p>
		<p id="exposicao">
			O acesso ao áudio das apresentações poderá ser feito por meio de canal FM do rádio do veículo. Outra novidade é que o espectador deverá marcar por um app, a ser baixado previamente no celular a compra de alimentos, bebidas e souvenires.
			A experiência completa, safari + show, tem duração de 55min.
			<br><br>

			Os frequentadores do evento deverão realizar o pagamento do estacionamento conforme tempo de permanência e tabela de valores vigente.
			<br><br><br>

		</p> -->

		<!-- <div class="parceiros DesktopItem">
			<p style="text-align: center">PARCEIROS</p>
			<img class="logo-parceiros" src="<? echo $images ?>.png">

			<p style="text-align: center">MEDIA PARTNER OFICIAL</p>
			<img class="logo-parceiros" src="<? echo $images ?>.png">
		</div> -->

		<!-- <video id='videolol' src="<? echo $images ?>lol.mp4" preload="auto" type="video/mp4" controls poster="<? echo $images ?>lol_Moment.jpg"></video> -->

	</section>

	<section id="icones">

		<h1 class="">LOL SURPRISE EXPERIENCE</h1>

		<div class="menu-locais-links">
			<a class="" local="sp">SÃO PAULO</a>
		</div>

		<div class="local sp active">
			<div class="wrapper-card">
				<div class="card">
					<div class="img-wrapper">
						<img src="<? echo $images ?>icon02.png">
					</div>
					<h2>ESTACIONAMENTO DO SHOPPING VILLA LOBOS</h2>
					<p></p>
				</div>
				<div class="card">
					<div class="img-wrapper">
						<img src="<? echo $images ?>icon03.png">
					</div>
					<h2>DURAÇÃO - 70min</h2>
					<p>Recomendamos a chegada 10 minutos antes<br> para desfrutarem da área interativa.</p>
				</div>
			</div>
		</div>
	</section>


	<section id="valores">
		<div class="local sp active">
			<h1>HORÁRIOS E VALORES - SP</h1>

			<h2>Quinta e Sexta - 13h as 21h <br>Sáb e Dom - 09h as 21h</h2>
			<table>
				<tr>
					<td style="border: 0; background: none"></td>
					<td style="border: 0; background: none"></td>
					<td style="border: 0; background: none">QUINTA E SEXTA</td>
					<td style="border: 0; background: none">SÁBADO E DOMINGO</td>
				</tr>
				<tr>
					<td style="width: 30%" class="first">PASSAPORTE EXPERIENCE<br>(MEIA-ENTRADA)<br>-<br>CRIANÇA E UM RESPONSÁVEL</td>
					<td style="width: 30%" class="">(Experiência completa + utilização de fantasia no local e realização de maquiagem no local)</td>
					<td class="">R$ 120,00</td>
					<td class="">R$ 150,00</td>
				</tr>

				<tr>
					<td style="width: 30%" class="first">PASSAPORTE EXPERIENCE PREMIUM<br>(MEIA-ENTRADA)<br>-<br>CRIANÇA E UM RESPONSÁVEL</td>
					<td style="width: 30%">(Experiência completa + maquiagem realizada no local + fantasia e necessaire com maquiagens exclusivas para levar para casa)</td>
					<td class="">R$ 189,00</td>
					<td class="">R$ 219,00</td>
				</tr>				
			</table>

			<img class="mapa" src="<? echo $images ?>mapa.jpg">

		</div>
	</section>

	<section id="ingressos">
		<h1 class="">PASSAPORTES</h1>
		<p class="aviso">Não é permitida a entrada após 15 minutos do início do espetáculo, não havendo, neste caso, devolução ou troca do ingresso.</p>

		<div class="wrapper-card">

			<div class="card">
				<a onclick="gTagPixel('<? echo $siteVendasSP ?>')" class="Btn">
					<h2>São Paulo</h2>
				</a>
			</div>

		</div>

		<div class="ingressostxt">
			<p>

			</p>
		</div>

		<div class="box-social">
			<?php include 'assets/social.php'; ?>
		</div>

		<img class="logofooter" src="<? echo $images ?>logo.png">

	</section>


	<?php include 'assets/footer.php'; ?>

	<a href="https://api.whatsapp.com/send?phone=5511942324289&text=Ol%C3%A1%2C%20vim%20pelo%20site%20do%20Lol%20Surprise!%20Experience" target="_blank" id="Whatsapp"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>

</body>

</html>