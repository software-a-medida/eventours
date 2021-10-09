<?php defined('_EXEC') or die; ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="{$vkye_lang}">
	<head>
		<meta charset="UTF-8" />
		<meta content="text/html; charset=iso-8859-1" http-equiv="Content-Type" />
		{$dependencies.meta}
		<base href="{$vkye_base}">
		<title>{$vkye_title}</title>
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
		<meta name="author" content="codemonkey.com.mx" />
		<meta name="description" content="" />
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
		<link rel="stylesheet" href="https://cdn.codemonkey.com.mx/css/valkyrie.css" type="text/css" media="all" />
		<link rel="stylesheet" href="{$path.css}styles.css?v=1.1" type="text/css" media="all" />
		{$dependencies.css}
	</head>
	<body>
		<header id="desktop_menu" class="pos-fixed p-t-10 p-t-md-20 p-b-10 p-b-md-20 p-l-10 p-l-md-0 p-r-10 p-r-md-0" style="width:100%;transition:400ms;z-index:98;">
			<div class="container">
				<div class="row d-flex align-items-center">
					<div data-mobile-flex class="col-6 d-flex align-items-center">
						<a data-action="open_mobile_menu" class="btn btn-light btn-link"><i class="fas fa-bars" style="font-size:24px;"></i></a>
					</div>
					<div data-desktop class="col-10">
						<nav>
							<ul class="d-flex align-items-center list-unstyled">
								<!-- <li class="m-r-20"><a href="?lang=en"><img src="{$path.images}en.jpg" style="height:20px;"></a></li> -->
								<!-- <li class="m-r-20"><a href="?lang=es"><img src="{$path.images}es.jpg" style="height:20px;"></a></li> -->
								<li class="m-r-20"><a href="/contactanos" class="text-light" style="font-size:14px;">{$lang.contact_us}</a></li>
								<li class="m-r-20"><a href="/reserva-ahora/nuestro-tour-de-casa" class="btn btn-dark text-light" style="font-size:14px;">{$lang.book_now}</a></li>
								<li class="m-r-20"><a href="/nuestro-tour-de-casa" class="text-light" style="font-size:14px;">Inicio</a></li>
								<li class="m-r-20"><a href="/otros-tours" class="text-light" style="font-size:14px;">Nuestos tours</a></li>
								<li><a href="/otros-tours" class="text-light" style="font-size:14px;">Eventos próximos</a></li>
							</ul>
						</nav>
					</div>
					<div class="col-6 col-md-2 d-flex align-items-center justify-content-end">
						<!-- <figure>
							<img src="{$path.images}logotype.png" class="img-fluid" style="height:50px;">
						</figure> -->
					</div>
				</div>
			</div>
		</header>
		<header id="mobile_menu" data-mobile-flex class="pos-fixed d-flex align-items-center justify-content-center flex-column p-20" style="width:300px;height:100vh;left:-300px;background-color:#000;transition:400ms;z-index:99;">
			<a data-action="close_mobile_menu" class="btn btn-light btn-link pos-absolute" style="top:20px;left:20px;"><i class="fas fa-times" style="font-size:24px;"></i></a>
			<!-- <figure class="m-b-40">
				<img src="{$path.images}imagotype_left_light.png" class="img-fluid" style="height:100px;">
			</figure> -->
			<nav>
				<ul class="d-flex align-items-center flex-column list-unstyled">
					<li class="m-b-10"><a href="/nuestro-tour-de-casa" class="text-light" style="font-size:14px;">{$lang.our_home_tour}</a></li>
					<!-- <li class="m-b-20"><a href="/otros-tours" class="text-light" style="font-size:14px;">{$lang.others_tours}</a></li> -->
					<li class="m-b-20"><a href="/reserva-ahora/nuestro-tour-de-casa" class="btn btn-light text-light" style="font-size:14px;">{$lang.book_now}</a></li>
					<li class="m-b-10"><a href="/contactanos" class="text-light" style="font-size:14px;">{$lang.contact_us}</a></li>
					<!-- <li><a href="?lang=es" class="m-r-20"><img src="{$path.images}es.jpg" style="height:20px;"></a><a href="?lang=en"><img src="{$path.images}en.jpg" style="height:20px;"></a></li> -->
				</ul>
			</nav>
		</header>
