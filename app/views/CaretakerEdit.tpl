<!DOCTYPE HTML>
<html>

<head>
	<title>edycja zwierzaków</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="{$conf->app_url}/assets/css/main.css" />
	<style>
		.form-container {
			max-width: 400px;
			margin: 0 auto;
		}
	</style>
</head>

<body>
	<section id="wrapper">
		<header>
			<div class="inner">
				<h2>edycja/dodawanie zwierzątka</h2>
				<p>wpisz dane do formularza
				<p>
			</div>
		</header>
		<div class="bottom-margin form-container">
			<form action="{$conf->action_root}caretakerSave" method="post" class="pure-form pure-form-aligned">
				<fieldset>
					<div class="pure-control-group">
						<label for="caretaker_id">id</label>
						<input id="caretaker_id" type="text" placeholder="id" name="caretaker_id"
							value="{$form->caretaker_id}">
					</div>
					<div class="pure-control-group">
						<label for="caretaker_name">imię</label>
						<input id="caretaker_name" type="text" placeholder="imie" name="caretaker_name"
							value="{$form->caretaker_name}">
					</div>
					<div class="pure-control-group">
						<label for="caretaker_surname">nazwisko</label>
						<input id="caretaker_surname" type="text" placeholder="imie" name="caretaker_surname"
							value="{$form->caretaker_surname}">
					</div>
					<div class="pure-control-group">
						<label for="join_date">data dołączenia</label>
						<input id="join_date" type="text" placeholder="data ur." name="join_date"
							value="{$form->join_date}">
					</div>
					<div class="pure-controls" style="margin-top: 20px;">
						<input type="submit" class="button primary" value="Zapisz" />
						<a class="button" href="{$conf->action_root}caretakerList">Powrót</a>
					</div>
				</fieldset>
				<input type="hidden" name="id" value="{$form->caretaker_id}">
			</form>
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