<!DOCTYPE HTML>
<html>

<head>
	<title>edycja opiekunów</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="{$conf->app_url}/assets/css/main.css" />
	<style>
		.form-container {
			max-width: 400px;
			margin: 0 auto;
		}
	</style>
	<nav>
	{block name=messages}
		{if $msgs->isMessage()}
		<div class="messages bottom-margin">
			<ul>
				{foreach $msgs->getMessages() as $msg}
				{strip}
				<span msg {if $msg->isError()}error{/if} {if $msg->isWarning()}warning{/if}
					{if $msg->isInfo()}info{/if}">{$msg->text}</span>
				{/strip}
				{/foreach}
			</ul>
		</div>
		{/if}
		{/block}
	</nav>
</head>

<body>
	<section id="wrapper">
		<header>
			<div class="inner">
				<h2>edycja/dodawanie opiekunów</h2>
			</div>
		</header>
		<div class="bottom-margin form-container">
			<form action="{$conf->action_root}caretakerSave" method="post" class="pure-form pure-form-aligned">
			<input type="hidden" name="caretaker_id" value="{$form->caretaker_id}">
				<fieldset>
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