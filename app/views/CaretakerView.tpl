<!DOCTYPE HTML>

<html>

<head>
	<title>lista opiekunów</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="{$conf->app_url}/assets/css/main.css" />
	<noscript>
		<link rel="stylesheet" href="{$conf->app_url}/assets/css/noscript.css" />
	</noscript>
</head>

<body class="is-preload">

	<div id="page-wrapper">

		<!-- Header -->
		<header id="header" class="alt">
			<h1><a href="index.html">niesamowite zoo</a></h1>
			<nav>
				<a href="{$conf->action_root}animalList" class="button">Powrót</a>
			</nav>
		</header>

		<section id="wrapper"
			style="background-color: #505c94; height: 400px; display: flex; align-items: center; justify-content: center;">
			<header style="margin-bottom: 20px;">
				<div class="inner">
					<h2 style="margin: 0; color: white;">panel kontroli - opiekacze</h2>
				</div>
			</header>
		</section>




		<div class="bottom-margin">
			<form class="" action="{$conf->action_url}caretakerList" style="margin-left: 100px; margin-top: 20px;">
				<legend style="line-height: 3;">wyszukiwarka opiekunów</legend>
				<fieldset>
					<input type="text" placeholder="podaj nazwisko" name="sf_caretaker_surname" style="max-width: 300px;"
						value="{$searchForm->caretaker_surname}" /><br />
					<button type="submit" class="button primary small" style="margin-top: 10px;">Filtruj</button>
					<a class="button small" href="{$conf->action_root}caretakerNew">+ dodaj opiekuna</a>
				</fieldset>
			</form>
		</div>


		<div style="text-align: center;">
			<h2>Lista opiekunów</h2>
			<div class="table-wrapper" style="max-width: 800px; margin: auto;">
				<table id="tab_caretaker" class="alt">
					<thead>
						<tr>
							<th style="text-align: center;">numer</th>
							<th style="text-align: center;">imie</th>
							<th style="text-align: center;">nazwisko</th>
							<th style="text-align: center;">data dołączenia</th>
							<th style="text-align: center;">opcje</th>
						</tr>
					</thead>
					<tbody>
						{foreach $caretaker as $c}
							{strip}
								<tr>
									<td>{$c["caretaker_id"]}</td>
									<td>{$c["caretaker_name"]}</td>
									<td>{$c["caretaker_surname"]}</td>
									<td>{$c["join_date"]}</td>
									<td>
										<div style="display: flex; justify-content: center;">
											<a class="button primary small"
												href="{$conf->action_url}caretakerEdit/{$c['caretaker_id']}">edytuj</a>
											&nbsp;
											<a class="button small"
												href="{$conf->action_url}caretakerDelete/{$c['caretaker_id']}">usuń</a>
										</div>
									</td>
								</tr>
							{/strip}
						{/foreach}
					</tbody>
				</table>
			</div>
		</div>
	</div>

	</div>
	</section>

	</div>
	</div>

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