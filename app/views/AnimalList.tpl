{* {extends file="main.tpl"}

{block name=title}
	<title>animal table</title>
{/block}
{block name=top}
<div class="bottom-margin">
<form class="pure-form pure-form-stacked" action="{$conf->action_url}animalList">
	<legend>search options</legend>
	<fieldset>
		<input type="text" placeholder="name" name="sf_animal_name" value="{$searchForm->animal_name}" /><br />
		<button type="submit" class="pure-button pure-button-primary">search</button>
	</fieldset>
</form>
</div>	

{/block}

{block name=bottom}

<div class="bottom-margin">
<a class="pure-button button-success" href="{$conf->action_root}animalNew">+ new animal</a>
</div>	

<table id="tab_animal" class="pure-table pure-table-bordered">
<thead>
	<tr>
		<th>animal id</th>
		<th>name</th>
		<th>join date</th>
		<th>options</th>
	</tr>
</thead>
<tbody>
{foreach $animal as $a}
{strip}
	<tr>
		<td>{$a["animal_id"]}</td>
		<td>{$a["animal_name"]}</td>
		<td>{$a["join_date"]}</td>
		<td>
			<a class="button-small pure-button button-secondary" href="{$conf->action_url}animalEdit/{$a['animal_id']}">edit</a>
			&nbsp;
			<a class="button-small pure-button button-warning" href="{$conf->action_url}animalDelete/{$a['animal_id']}">delete</a>
		</td>
	</tr>
{/strip}
{/foreach}
</tbody>
</table>

{/block} *}






 <!DOCTYPE HTML>

<html>
	<head>
		<title>Solid State by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<h1><a href="index.html">super zoo</a></h1>
						<nav>
						<a href="{$conf->action_root}loginShow" class="button primary">Wyloguj</a>
						</nav>
					</header>

				

				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<h2>siema </h2>
							<p>to jest zoo jbc</p>
						</div>
					</section>
					

					<h4>Alternate</h4>
					<div class="table-wrapper">
					<table id="tab_animal" class="pure-table pure-table-bordered">
					<thead>
						<tr>
							<th>animal id</th>
							<th>name</th>
							<th>join date</th>
							<th>options</th>
						</tr>
					</thead>
					<tbody>
					{foreach $animal as $a}
					{strip}
						<tr>
							<td>{$a["animal_id"]}</td>
							<td>{$a["animal_name"]}</td>
							<td>{$a["join_date"]}</td>
							<td>
								<a class="button-small pure-button button-secondary" href="{$conf->action_url}animalEdit/{$a['animal_id']}">edit</a>
								&nbsp;
								<a class="button-small pure-button button-warning" href="{$conf->action_url}animalDelete/{$a['animal_id']}">delete</a>
							</td>
						</tr>
					{/strip}
					{/foreach}
					</tbody>
					</table>
					</div>
					



				<!-- Wrapper -->
					<section id="wrapper">

						<!-- Four -->
							<section id="four" class="wrapper alt style1">
								<div class="inner">
									<h2 class="major">nasze giga zwierzeta</h2>
									<p>ponizej jest lista a tu bedzie jakies dluzsze zdanie chyba</p>
									<section class="features">
										<article>
											<a href="#" class="image"><img src="images/slon.jpg" alt="" /></a>
											<h3 class="major">Sed feugiat lorem</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing vehicula id nulla dignissim dapibus ultrices.</p>
											<a href="#" class="special">Learn more</a>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic05.jpg" alt="" /></a>
											<h3 class="major">Nisl placerat</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing vehicula id nulla dignissim dapibus ultrices.</p>
											<a href="#" class="special">Learn more</a>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic06.jpg" alt="" /></a>
											<h3 class="major">Ante fermentum</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing vehicula id nulla dignissim dapibus ultrices.</p>
											<a href="#" class="special">Learn more</a>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic07.jpg" alt="" /></a>
											<h3 class="major">Fusce consequat</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing vehicula id nulla dignissim dapibus ultrices.</p>
											<a href="#" class="special">Learn more</a>
										</article>
									</section>
								</div>
							</section>

					</section>

							<ul class="copyright">
								<li>&copy; Untitled Inc. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
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


