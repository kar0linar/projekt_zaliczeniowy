{* 
<!DOCTYPE HTML>
<html>
<head>
	<title>login</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="{$conf->app_url}/assets/css/main.css" />
</head>
<body>

<div class="bottom-margin">
	<form action="{$conf->action_root}animalSave" method="post" class="pure-form pure-form-aligned">
		<fieldset>
			<legend>Dane osoby</legend>
			<div class="pure-control-group">
				<label for="animal_id">numer</label>
				<input id="animal_id" type="text" placeholder="id" name="animal_id" value="{$form->animal_id}">
			</div>
			<div class="pure-control-group">
				<label for="animal_name">nazwisko</label>
				<input id="animal_name" type="text" placeholder="imie" name="animal_name" value="{$form->animal_name}">
			</div>
			<div class="pure-control-group">
				<label for="join_date">data dolaczenia</label>
				<input id="join_date" type="text" placeholder="data ur." name="join_date" value="{$form->join_date}">
			</div>
			<div class="pure-controls">
				<input type="submit" class="button primary" value="Zapisz"/>
				<a class="button" href="{$conf->action_root}personList">Powrót</a>
			</div>
		</fieldset>
		<input type="hidden" name="id" value="{$form->id}">
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
</html> *}
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
                                <p>wpisz dane do formularza<p>
							</div>
						</header>
<div class="bottom-margin form-container">
	<form action="{$conf->action_root}animalSave" method="post" class="pure-form pure-form-aligned">
		<fieldset>
			<div class="pure-control-group">
				<label for="animal_id">id</label>
				<input id="animal_id" type="text" placeholder="id" name="animal_id" value="{$form->animal_id}">
			</div>
			<div class="pure-control-group">
				<label for="animal_name">imię</label>
				<input id="animal_name" type="text" placeholder="imie" name="animal_name" value="{$form->animal_name}">
			</div>
			<div class="pure-control-group">
				<label for="join_date">data dołączenia</label>
				<input id="join_date" type="text" placeholder="data ur." name="join_date" value="{$form->join_date}">
			</div>
			<div class="pure-controls"style="margin-top: 20px;">
				<input type="submit" class="button primary" value="Zapisz"/>
				<a class="button" href="{$conf->action_root}personList">Powrót</a>
			</div>
		</fieldset>
		<input type="hidden" name="id" value="{$form->id}">
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
