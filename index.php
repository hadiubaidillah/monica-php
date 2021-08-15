<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="Google search engine"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="robots" content="index,follow"/>
		<link rel="stylesheet" href="./style.css">
		<link rel="stylesheet" href="./css/tablet.css" media="(min-width: 930px)">
		<link rel="icon" href="./assets/monica-icon-2.png">
		<title>Monica</title>
	</head>
	<body>
		<header>
			<nav class="main-header">
				<ul class="main-header__primary-nav">
					<li class="main-header__primary-nav--link"><a href="https://mail.google.com/mail/?authuser=0&ogbl">Request</a></li>
					<?php /*
					<li class="main-header__primary-nav--link"><a href="https://www.google.com.mx/imghp?hl=es-419&authuser=0&ogbl">Gambar</a></li>
					<li class="main-header__primary-nav--icon apps"><a href=""><img src="https://img.icons8.com/color/96/000000/circled-menu.png" alt="Google Apps" title="Google Apps"></a></li>
					<li class="main-header__primary-nav--icon account"><a href=""><img src="https://lh3.googleusercontent.com/ogw/ADea4I7Q__0GI0wIegzPNBT2RgCO80U8QJtPvqM15u89tw=s83-c-mo" style="border-radius: 50%;" alt="Account" title="Akun Google"></a></li>
					 */ ?>
				</ul>
			</nav>
		</header>
		<main class="main-container">
			<br/><br/><br/><br/><br/><br/><br/><br/><br/>
			<section class="main-container__image">
				<span></span>
			</section>
			<section class="main-container__searchbar">
				<div>
					<span class="main-container__searchbar--icon"></span>
					<input class="main-container__searchbar--input" id="searchbar" type="text">
				</div>
			</section>
			<section class="main-container__buttons">
				<a class="main-container__buttons--clickable" href="" draggable="false">Cari dengan Monica</a>
				<a class="main-container__buttons--clickable" href="https://www.google.com/doodles" draggable="false">Penelusuran Gambar</a>
			</section>
			<?php /* <section class="main-container__by-google">
				<p class="main-container__by-google--link">Google menawarkan: <a href="">English</a></p>
			</section> */ ?>
		</main>
		<footer class="main-footer">
			<section class="main-footer-nav-containers">
				<nav>
					<ul class="main-footer__about-nav">
						<li class="main-footer__about-nav--link"><a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=webhp&cd=&cad=rja&uact=8&ved=0ahUKEwiwzozJzeLuAhUBP6wKHYATDeoQkNQCCA8&url=https%3A%2F%2Fabout.google%2F%3Futm_source%3Dgoogle-MX%26utm_medium%3Dreferral%26utm_campaign%3Dhp-footer%26fg%3D1&usg=AOvVaw09qQxZE2XyQ825PN7qaVq3">About</a></li>
						<li class="main-footer__about-nav--link"><a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=webhp&cd=&cad=rja&uact=8&ved=0ahUKEwiwzozJzeLuAhUBP6wKHYATDeoQkdQCCBA&url=https%3A%2F%2Fwww.google.com%2Fintl%2Fes-419_mx%2Fads%2F%3Fsubid%3Dww-ww-et-g-awa-a-g_hpafoot1_1!o2%26utm_source%3Dgoogle.com%26utm_medium%3Dreferral%26utm_campaign%3Dgoogle_hpafooter%26fg%3D1&usg=AOvVaw1QzHJE-K3jCVQm2gja38T9">Our Team</a></li>
						<li class="main-footer__about-nav--link"><a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=webhp&cd=&cad=rja&uact=8&ved=0ahUKEwiwzozJzeLuAhUBP6wKHYATDeoQktQCCBE&url=https%3A%2F%2Fwww.google.com%2Fservices%2F%3Fsubid%3Dww-ww-et-g-awa-a-g_hpbfoot1_1!o2%26utm_source%3Dgoogle.com%26utm_medium%3Dreferral%26utm_campaign%3Dgoogle_hpbfooter%26fg%3D1&usg=AOvVaw2SJ4zwRVXKyZr53qG9dm4K">Procedure</a></li>
						<li class="main-footer__about-nav--link"><a href="https://google.com/search/howsearchworks/?fg=1">How to Work</a></li>
					</ul>
				</nav>
				<?php /* <nav>
					<ul class="main-footer__privacy-nav">
						<li class="main-footer__privacy-nav--link"><a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=webhp&cd=&cad=rja&uact=8&ved=0ahUKEwiwzozJzeLuAhUBP6wKHYATDeoQ8awCCBI&url=https%3A%2F%2Fpolicies.google.com%2Fprivacy%3Fhl%3Des-419%26fg%3D1&usg=AOvVaw0kHgtbRrD3oGV-KWOzk5Hz">Privacy</a></li>
						<li class="main-footer__privacy-nav--link"><a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=webhp&cd=&cad=rja&uact=8&ved=0ahUKEwiwzozJzeLuAhUBP6wKHYATDeoQ8qwCCBM&url=https%3A%2F%2Fpolicies.google.com%2Fterms%3Fhl%3Des-419%26fg%3D1&usg=AOvVaw3Zv4AmKUS3beVzeEax8Pzp">Terms</a></li>
						<li class="main-footer__privacy-nav--link"><a href="">Settings</a></li>
					</ul>
				</nav> */ ?>
			</section>
		</footer>
		<script src="./index.js"></script>
	</body>
</html>