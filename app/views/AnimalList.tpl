<!DOCTYPE HTML>

<html>

<head>
	<title>lista zwierzaków</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" />
	</noscript>
</head>

<body class="is-preload">

	<!-- Page Wrapper -->
	<div id="page-wrapper" style="background-color: #505c94;">

		<!-- Header -->
		<header id="header" class="alt" style="background-color: #2e3141;">
			<h1><a href="index.html">niesamowite zoo</a></h1>
			<nav>
				{if Core\RoleUtils::inRole("1")}
					<a>Zalogowano jako <span style="color: #737da9;">admin</span></a>
					<a href="#menu">Menu</a>
					<nav id="menu">
						<div class="inner">
							<h2>Menu</h2>
							<ul class="links">
								<li><a href="index.html">Strona główna</a></li>
								<li><a href="{$conf->action_root}animalTab">Lista zwierzaków</a></li>
								<li><a href="{$conf->action_root}caretakerList">Lista opiekunów</a></li>
								<li><a href="{$conf->action_root}login">Zaloguj się</a></li>
								<li><a href="{$conf->action_root}register">Zarejestruj się</a></li>
							</ul>
							<a href="#" class="close">Zamknij</a>
						</div>
					</nav>
				{else}
					<a href="#menu">Menu</a>
					<nav id="menu">
						<div class="inner">
							<h2>Menu</h2>
							<ul class="links">
								<li><a href="index.html">Strona główna</a></li>
								<li><a href="{$conf->action_root}login">Zaloguj się</a></li>
								<li><a href="{$conf->action_root}register">Zarejestruj się</a></li>
							</ul>
							<a href="#" class="close">Zamknij</a>
						</div>
					</nav>
				{/if}

				{if count($conf->roles)>0}
					<a href="{$conf->action_root}logout" class="button primary">Wyloguj</a>
				{else}
					<a href="{$conf->action_root}loginShow" class="button primary">Zaloguj</a>
				{/if}
			</nav>
		</header>




		<!-- Banner -->
		<section id="banner">
			<div class="inner">
				<h2>niesamowite zoo</h2>
				<p>Zapraszamy do naszego niesamowitego zoo, gdzie czeka na Ciebie niezapomniane przygody i niezwykłe
					spotkania z naturą</p>
			</div>
		</section>

		<!-- Wrapper -->
		<section id="wrapper">

			<!-- Four -->
			<section id="four" class="wrapper alt style1">
				<div class="inner">
					<h2 class="major">poznaj nasze zwierzątka</h2>
					<section class="features">
						{foreach $category as $c}
							<article>
								<a class="image"><img src="images/{$c["picture"]}" /></a>
								<h3 class="major">{$c["category_name"]}</h3>
								<p>{$c["category_description"]}</p>
							</article>
						{/foreach}

				</div>
			</section>

		</section>

	</div>
	</section>

	</div>
	{block name=messages}

		{if $msgs->isMessage()}
			<div class="messages bottom-margin">
				<ul>
					{foreach $msgs->getMessages() as $msg}
						{strip}
							<span msg {if $msg->isError()}error{/if} {if $msg->isWarning()}warning{/if} {if $msg->isInfo()}info{/if}">
				<li>{$msg->text}</li>
			</span>
			{/strip}
			{/foreach}
		</ul>
	</div>
	{/if}

	{/block}

	<!-- Footer -->
	<section id="footer">
		<div class="inner">
		<h2 class="major">Skontaktuj się z nami!</h2>
			<p>Aby skontaktować się z naszą informacją napisz na niesamowitezoo@gmail.com</p>
			<ul class="copyright">
				<li>&copy; Untitled Inc. All rights reserved.</li>
				<li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
			</ul>
		</div>
	</section>

	</div>



	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

				</body>

				</html>