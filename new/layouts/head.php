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
		<meta name="author" content="Code Monkey" />
		<meta name="description" content="" />
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
		<link rel="stylesheet" href="https://cdn.codemonkey.com.mx/css/valkyrie.css" type="text/css" media="all" />
		<link rel="stylesheet" href="{$path.css}styles.css?v=1.0" type="text/css" media="all" />
		{$dependencies.css}
	</head>
	<body class="pos-relative">
		<header id="desktop_menu" class="pos-fixed p-tb-20 p-tb-md-40" style="width:100%;transition:400ms;z-index:97;">
			<div class="container">
				<div class="row d-flex align-items-center">
					<div class="col-4 col-md-2">
						<figure>
							<a href="/"><img src="{$path.images}logotype.png" alt="Logotype" class="img-fluid" style="max-height:40px;"></a>
						</figure>
					</div>
					<div data-desktop class="col-10">
						<nav>
							<ul class="d-flex align-items-center justify-content-end list-unstyled">
								<li><a href="/" class="text-uppercase text-light">{$lang.home}</a></li>
								<li class="m-l-20"><a href="#contactanos" class="text-uppercase text-light">{$lang.contact_us}</a></li>
								<li class="m-l-20"><a href="?lang=es"><img src="{$path.images}mex.jpg" alt="ES Lang" style="max-height:20px;"></a></li>
								<li class="m-l-20"><a href="?lang=en"><img src="{$path.images}usa.jpg" alt="EN Lang" style="max-height:20px;"></a></li>
							</ul>
						</nav>
					</div>
					<div data-mobile-block class="col-8 text-right">
						<a data-action="open_mobile_menu" class="text-light" style="font-size:24px;"><i class="fas fa-bars"></i></a>
					</div>
				</div>
			</div>
		</header>
		<header id="mobile_menu" data-mobile-flex class="pos-fixed d-flex align-items-center justify-content-center p-40" style="width:300px;height:100vh;right:-300px;background-color:#000;transition:400ms;z-index:98;">
			<a data-action="close_mobile_menu" class="pos-absolute text-light" style="top:20px;right:20px;font-size:24px;"><i class="fas fa-times"></i></a>
			<nav>
				<ul class="d-flex align-items-center flex-column list-unstyled">
					<li class="m-b-20"><a href="/" class="text-uppercase text-light">{$lang.home}</a></li>
					<li class="m-b-20"><a href="#contactanos" class="text-uppercase text-light">{$lang.contact_us}</a></li>
					<li><a href="?lang=es" class="m-r-20"><img src="{$path.images}mex.jpg" alt="ES Lang" style="height:20px;"></a><a href="?lang=en"><img src="{$path.images}usa.jpg" alt="EN Lang" style="height:20px;"></a></li>
				</ul>
			</nav>
		</header>
