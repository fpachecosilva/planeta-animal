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
				<a href="#menu-abas">Megaexperiência</a>
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
			A MEGAEXPERIÊNCIA GASTRONÔMICA CONSCIENTIZA SOBRE A IMPORTÂNCIA DA PRESERVAÇÃO DA NATUREZA EM AVENTURA INESQUECÍVEL PARA TODA A FAMÍLIA
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
			Protocolo Covid<br>
			Para acesso ao local do evento é obrigatório que adultos apresentem comprovante de vacinação contra COVID-19 com, no mínimo, a primeira dose - físico ou digital (disponível nos aplicativos conecte SUS). Crianças não precisam apresentar.
		</p>

		<video id='videolol' src="<? echo $images ?>PLANETA 16x9 RJ 30.mov" preload="auto" type="video/mp4" controls poster="<? echo $images ?>moment.jpg"></video>
	</section>

	<section id="icones">
		<h1 class="">PLANETA ANIMAL EXPERIENCE</h1>

		<div class="menu-locais-links">
			<a class="active" local="rj">RIO DE JANEIRO</a>			
		</div>

		<div class="local rj active">
			<div class="wrapper-card">
				<div class="card">
					<div class="img-wrapper">
						<img src="<? echo $images ?>icon02.png">
					</div>
					<h2>VIA PARQUE SHOPPING</h2>
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
		<div class="local rj active">
			<h1>HORÁRIOS E VALORES - RJ</h1>
			<h2>Quinta e Sexta - 16h, 18h e 20h <br>Sáb e Dom - 10h30, 13h, 15h, 17h, 19h e 21h</h2>

			<div class="experiencias">
				<p>EXPERIÊNCIAS</p>
			</div>
				
			<table class='table-encontro'>
				<tbody>
					<tr class='linha1'>
						<th colspan='2'>ENCONTRO COM PERSONAGENS</th>
					</tr>
					<tr>
						<td colspan='2' class='bgnormal'>Nessa experiência você terá um encontro com alguns personagens para interação e foto</td>
					</tr>
					<tr>
						<td class='esq'>Dias / Sessões</td>
						<td class='dir'>Interação com Personagens + Consumação</td>
					</tr>
					<tr class='linha1'>
						<td class='esq'>QUI / SEX (16h)</td>
						<td class='dir'>Promo: R$ 35,00 (Consumação) - sem cobrança de Couvert Art</td>
					</tr>
					<tr class='linha2'>
						<td class='esq'>SEX (16h)</td>
						<td class='dir'>Promo: R$ 40,00 (Consumação) - sem cobrança de Couvert Art</td>
					</tr>
					<tr class='linha3'>
						<td class='esq'>SAB / DOM (10h30) e DOM (21h)</td>
						<td class='dir'>Promo: R$ 55,00 (R$ 45,00 Consumação) + (R$ 10,00 Couvert Art)</td>
					</tr>					
				</tbody>
			</table>

			<table class="table-megashow">
				<tbody>
					<tr class="linha1">
						<th colspan='4'>MEGASHOW</th>
					</tr>

					<tr>
						<td colspan='4'>Megaexperiência com muita música, dança e teatro, além de efeitos especiais visuais e olfativos.</td>
					</tr>

					<tr>
						<td class='esq' colspan='2'>Dias / Sessões</td>
						<td class='meio'>Couvert Artístico</td>
						<td class='dir'>Couvert Art + Consumação</td>
					</tr>

					<tr class='linha1'>
						<td rowspan='2' colspan='2'>QUI (18h)</td>
						<td rowspan='2'>R$ 35,00</td>
						<td>R$ 60,00</td>
					</tr>

					<tr class='linha1'>
						<td>R$ 45 Consum + R$ 15 Couvert Art</td>
					</tr>

					<tr class='linha2'>
						<td rowspan='2' colspan='2'>QUI / SEX (20h)</td>
						<td rowspan='2'>R$ 50,00</td>
						<td>R$ 80,00</td>
					</tr>

					<tr class='linha2'>
						<td>R$ 45 Consum + R$ 35 Couvert Art</td>
					</tr>

					<tr class='linha3'>
						<td rowspan='4'>SAB / DOM</td>												
						<td>13h00</td>
						<td rowspan='5'>R$ 60,00</td>
						<td rowspan='2'>R$ 90,00</td>
					</tr>
					
					<tr class='linha3'>
						<td>15h00</td>
					</tr>

					<tr class='linha3'>
						<td>17h00</td>
						<td rowspan='3'>R$ 45 Consum + R$ 45 Couvert Art</td>
					</tr>

					<tr class='linha3'>
						<td>19h00</td>
					</tr>
					
					<tr class='linha3'>
						<td>SAB</td>										
						<td>21h00</td>
					</tr>					
				</tbody>
			</table>


			<!-- bkp
			<table class="table-megashow">
				<tbody>
					<tr class="linha1">
						<th colspan='4'>MEGASHOW</th>
					</tr>

					<tr>
						<td colspan='4'>Megaexperiência com muita música, dança e teatro, além de efeitos especiais visuais e olfativos.</td>
					</tr>

					<tr>
						<td class='esq'>Dias / Sessões</td>
						<td class='meio'>Couvert Artístico</td>
						<td class='dir'>Couvert Art + Consumação</td>
					</tr>

					<tr class='linha1'>
						<td rowspan='2'>QUI (18h)</td>
						<td rowspan='2'>R$ 35,00</td>
						<td>R$ 60,00</td>
					</tr>

					<tr class='linha1'>
						<td>R$ 45 Consum + R$ 15 Couvert Art</td>
					</tr>

					<tr class='linha2'>
						<td rowspan='2'>QUI / SEX (20h)</td>
						<td rowspan='2'>R$ 50,00</td>
						<td>R$ 80,00</td>
					</tr>

					<tr class='linha2'>
						<td>R$ 45 Consum + R$ 35 Couvert Art</td>
					</tr>

					<tr class='linha3'>
						<td rowspan='4'>SAB / DOM</td>												
						<td>13h00</td>
						<td rowspan='5'>R$ 60,00</td>
						<td rowspan='2'>R$ 90,00</td>
					</tr>

					<tr class='linha3'>
						<td>15h00</td>
					</tr>

					<tr class='linha3'>
						<td>17h00</td>
						<td rowspan='3'>R$ 45 Consum + R$ 45 Couvert Art</td>
					</tr>

					<tr class='linha3'>
						<td>19h00</td>
					</tr>
					
					<tr class='linha3'>
						<td>SAB</td>										
						<td>21h00</td>
					</tr>
					
				</tbody>
			</table> -->

			
		</div>
	</section>

	<section id="ingressos">
		<h1 class="">INGRESSOS</h1>
		
		<p class="aviso">
			Atendendo ao decreto municipal nº 49.335 (Rio de Janeiro), o evento Planeta Animal Experience, solicitará ao público que irá assistir e viver a experiência , o comprovante de vacinação do cidadão contra a COVID-19 para o acesso aos eventos. O público poderá apresentar o comprovante físico de vacinação (carteirinha de vacinação), ou de forma digital disponível nas plataformas ConectSUS, que podem ser baixados na loja de aplicativos do seu smartphone
		</p>
		
		<div class="wrapper-card">
			<div class="card">
				<a onclick="gtag_report_conversion('<? echo $siteVendas ?>')" class="Btn" href="<? echo $siteVendas ?>">
					<h2>Rio de Janeiro</h2>
				</a>
			</div>
		</div>

		<!-- <div class="ingressostxt">
			<p>

			</p>
		</div> -->

		<div class="box-social">
			<?php include 'assets/social.php'; ?>
		</div>

		<img class="logofooter" src="<? echo $images ?>logo.png">

	</section>

	<?php include 'assets/footer.php'; ?>

	<a href="https://api.whatsapp.com/send?phone=556195670325&text=Oi,%20vim%20através%20do%20website%20Planeta%20Animal" target="_blank" id="Whatsapp"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>

</body>

</html>