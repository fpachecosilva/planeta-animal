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
	<!-- GTAG RAI -->
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WNGG5VD"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<header class="DesktopItem">
		<article>
			<div class="box-links">
				<a href="#menu-abas">Experiência</a>
				<a href="#icones">Informações</a>
			</div>
			<div class="box-social">
				<a class="botaotopo" href="#ingressos">Comprar</a>
				<?php include 'assets/social.php'; ?>
			</div>
		</article>
	</header>

	<section id="principal">
		<img class="bg" src="<? echo $images ?>bg.jpg">
		<article>
			<h1><strong>PLANETA ANIMAL EXPERIENCE</strong></h1>
		</article>

		<h3 id="ancora-abas">
			A EXPERIÊNCIA GASTRONÔMICA CONSCIENTIZA SOBRE A IMPORTÂNCIA DA PRESERVAÇÃO DA NATUREZA EM AVENTURA INESQUECÍVEL PARA TODA A FAMÍLIA
		</h3>
		<a class="Btn-primary" href="#ingressos">Comprar</a>
	</section>

	<section id="menu-abas">
		<p id="megashow">
			Muita diversão, interatividade e educação são as pedidas de Planeta Animal Experience. O grandioso passeio é uma excelente opção de lazer para toda a família e levará você a um mundo mágico de aventura que viajará do Jurássico à Amazônia e do Oceano à Era do Gelo. Além de toda a diversão, o público também é convidado a se tornar um herói do meio ambiente e irá interagir com as diferentes instalações tendo como propósito despoluir oceanos, reflorestar áreas devastadas, apagar incêndios, frear o aquecimento global, entre outras iniciativas a favor do nosso planeta.
			<br><br>
			Com a plateia em formato diner*, você viajará por cinco ambientes incríveis e distintos. Cada uma dessas instalações trará surpresas cheias de tecnologia, interatividade e educação. Em meio a cenografia, réplicas em tamanho real de girafas, elefantes, ursos polares, mamutes e dinossauros irão interagir pelo espaço em performances e movimentos impressionantes ao redor do público.
			<br><br>
			O cardápio é composto de uma seleção variada e deliciosa de receitas com menu completo. Entre entradas, pratos principais e sobremesas, o público poderá escolher opções que vão desde saladas e costela ao barbecue com batatas salteadas, até hambúrgueres tradicionais e vegetariano, massas, risotos, nhoques e parmeggianas de frango e vermelha. As sobremesas não ficam atrás: são diversas opções com destaque para o bolo red velvet e o tradicional pudim.
			<br><br>
			Crianças são pagantes a partir dos 24 meses.
		</p>
		<video id='videolol' src="<? echo $images ?>PLANETA 16x9 RJ 30.mp4" preload="auto" type="video/mp4" controls></video>
	</section>

	<section id="icones">
		<h1 class="">PLANETA ANIMAL EXPERIENCE</h1>
		<div class="menu-locais-links">
			<a class="active" local="sp">SÃO PAULO</a>
		</div>

		<div class="local sp active">
			<div class="wrapper-card">
				<div class="card">
					<div class="img-wrapper">
						<img src="<? echo $images ?>icon02.png">
					</div>
					<h2>SHOPPING IBIRAPUERA</h2>
				</div>
				<div class="card">
					<div class="img-wrapper">
						<img src="<? echo $images ?>icon03.png">
					</div>
					<h2>DURAÇÃO - 75min</h2>
				</div>
			</div>
		</div>
	</section>

	<section id="valores">
		<div class="local sp active">
			<h1>HORÁRIOS E VALORES - SP</h1>
			<h2>Quinta e Sexta - 18h e 20h <br>Sáb e Dom - 10h30, 13h, 15h, 17h, 19h e 21h</h2>			

			<table class="tabela-b linha1">
				<tr>
					<td class="first" rowspan ='3'>Dias e Sessões</td>					
				</tr>				
				<tr>
					<td class="first" colspan ='2'>SÁB - 10h30, 13h, 15h, 17h e 19h</td>
				</tr>				
				<tr>
					<td class="first" colspan ='2'>DOM - 13h, 15h, 17h e 19h</td>
				</tr>				
				<tr>
					<td class="acesso-normal">Acesso Normal</td>
					<td>R$ 80,00 sendo R$ 45,00 Consumação + R$ 35,00 Couvert Artístico</td>
				</tr>
				<tr>
					<td class="magic-pass">Magic Fast Pass<br>(Acesso Prioritário)</td>
					<td>R$ 95,00 sendo R$ 45,00 Consumação + R$ 50,00 Couvert Artístico com direito a MagicPass (acesso prioritário)</td>
				</tr>				
			</table>
			<table class="tabela-b linha2">
				<tr>
					<td class="first" rowspan ='3'>Dias e Sessões</td>
				</tr>				
				<tr>
					<td class="first" colspan ='2'>SÁB - 21h</td>
				</tr>				
				<tr>
					<td class="first" colspan ='2'>DOM - 10h30 e 21h</td>
				</tr>				
				<tr>
					<td class="acesso-normal">Acesso Normal</td>
					<td>R$ 70,00 sendo R$ 45,00 Consumação + R$ 25,00 Couvert Artístico</td>
				</tr>
				<tr>
					<td class="magic-pass">Magic Fast Pass<br>(Acesso Prioritário)</td>
					<td>R$ 80,00 sendo R$ 45,00 Consumação + R$ 35,00 Couvert Artístico com direito a MagicPass (acesso prioritário)</td>
				</tr>				
			</table>
			<table class="tabela-b linha3">
				<tr>
					<td class="first">Dias e Sessões</td>
					<td class="first">QUI e SEX - 18h e 20h</td>
				</tr>
				<tr>
					<td class="acesso-normal">Acesso Normal</td>
					<td>R$ 60,00 sendo R$ 45,00 Consumação + R$ 15,00 Couvert Artístico</td>
				</tr>
				<tr>
					<td class="magic-pass">Magic Fast Pass<br>(Acesso Prioritário)</td>
					<td>R$ 70,00 sendo R$ 45,00 Consumação + R$ 25,00 Couvert Artístico com direito a MagicPass (acesso prioritário)</td>
				</tr>
			</table>
		</div>
	</section>

	<section id="ingressos">
		<h1 class="">INGRESSOS</h1>
		
		<p class="aviso">
			Atendendo ao decreto municipal nº 49.335 (Rio de Janeiro), o evento Planeta Animal Experience, solicitará ao público que irá assistir e viver a experiência , o comprovante de vacinação do cidadão contra a COVID-19 para o acesso aos eventos. O público poderá apresentar o comprovante físico de vacinação (carteirinha de vacinação), ou de forma digital disponível nas plataformas ConectSUS, que podem ser baixados na loja de aplicativos do seu smartphone. Condições sujeitas às mudanças dos órgãos reguladores até a data de sua sessão.
		</p>
		
		<div class="wrapper-card">
			<div class="card">
				<a onclick="gtag_report_conversion('<? echo $siteVendasSP ?>')" class="Btn" href="<? echo $siteVendasSP ?>">
					<h2>São Paulo</h2>
				</a>
			</div>
		</div>

		<div class="box-social">
			<?php include 'assets/social.php'; ?>
		</div>

		<img class="logofooter" src="<? echo $images ?>logo.png">
	</section>
	<?php include 'assets/footer.php'; ?>
	<a href="https://api.whatsapp.com/send?phone=556195670325&text=Oi,%20vim%20através%20do%20website%20Planeta%20Animal" target="_blank" id="Whatsapp"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>
</body>

</html>