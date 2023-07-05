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

		.messages {
			max-height: 100px;
			overflow-y: auto;
			padding: 10px;
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
				<h2>edycja/dodawanie zwierzątka</h2>
			</div>
		</header>
		<div class="bottom-margin form-container">
			<form action="{$conf->action_root}animalSave" method="post" class="pure-form pure-form-aligned">
				<input type="hidden" name="animal_id" value="{$form->animal_id}">
				<fieldset>

					<div class="pure-control-group">
						<label for="animal_name">imię</label>
						<input id="animal_name" type="text" placeholder="imie" name="animal_name"
							value="{$form->animal_name}">
					</div>

					<div class="pure-control-group">
						<label for="species_id">gatunek</label>
							<select id="species_id" name="species_id">
							{foreach $species as $s}
							<option value="{$s["species_id"]}"{if $s["species_id"]==$form->species_id}selected{{/if}}>{$s["species_name"]}</option>
							{/foreach}

						</select>
					</div>

					<div class="pure-control-group">
						<label for="join_date">data dołączenia</label>
						<input id="join_date" type="text" placeholder="data dolaczenia" name="join_date"
							value="{$form->join_date}">
					</div>

					<div class="pure-control-group">
						<label for="caretaker_id">opiekun</label>
							<select id="caretaker_id" name="caretaker_id">
							{foreach $caretaker as $c}
							<option value="{$c["caretaker_id"]}"{if $c["caretaker_id"]==$form->caretaker_id}selected{{/if}}>{$c["caretaker_name"]}</option>
							{/foreach}

						</select>
					</div>

					<div class="pure-control-group">
						<label for="category_id">strefa</label>
							<select id="category_id" name="category_id">
							{foreach $category as $c}
							<option value="{$c["category_id"]}"{if $c["category_id"]==$form->category_id}selected{{/if}}>{$c["category_name"]}</option>
							{/foreach}

						</select>
					</div>
					
					<div class="pure-controls" style="margin-top: 20px;">
						<input type="submit" class="button primary" value="Zapisz" />
						<a class="button" href="{$conf->action_root}animalTab">Powrót</a>
					</div>
				</fieldset>
			</form>
		</div>


		<!-- Scripts -->
		<script src="assets/js/jquery.min.js"></script>
		<script
