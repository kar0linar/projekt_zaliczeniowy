
<!DOCTYPE HTML>

<html>
	<head>
		<title>lista zwierzaków</title>
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
						<nav>
						<a href="{$conf->action_root}animalList" class="button primary">Powrót</a>
						</nav>
					</header>

					
					<div class="bottom-margin">
					<form class="" action="{$conf->action_url}caretakerView">
					<legend style="margin-left: 260px; line-height: 3;">wyszukiwarka opiekunów:</legend>
					<fieldset>
					<input type="text" placeholder="podaj imie" name="sf_caretaker_name" style="max-width: 300px;margin-left:260px;" value="{$searchForm->caretaker_name}" /><br />
					<button type="submit" class="button primary small" style="margin-left:260px;">Filtruj</button>
					</fieldset>
					
					<div class="bottom-margin" style="margin-top: 20px;">
					<button type="submit" class="button small" style="margin-left:260px;" href="{$conf->action_root}caretakerNew">+ dodaj opiekuna</button>
					</div>
					</form>
					</div>




					<div style="text-align: center;">
					<h2>Lista opiekunów</h2>
					<div class="table-wrapper">
						<table id="tab_caretaker" class="alt" style="max-width: 500px; margin: auto;">
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
											<a class="button primary small" href="{$conf->action_url}caretakerEdit/{$c['caretaker_id']}">edytuj</a>
											&nbsp;
											<a class="button small" href="{$conf->action_url}caretakerDelete/{$c['caretaker_id']}">usuń</a>
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


