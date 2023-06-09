 <!DOCTYPE HTML>

 <html>

 <head>
 	<title>lista zwierzaków</title>
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
 					<h2 style="margin: 0; color: white;">panel kontroli - zwierzęta</h2>
 				</div>
 			</header>
 		</section>

 		<div class="bottom-margin">
 			<form class="" action="{$conf->action_url}animalTab" style="margin-left: 100px; margin-top: 20px;">
 				<legend style="line-height: 3;">wyszukiwarka zwierzątek:</legend>
 				<fieldset>
 					<input type="text" placeholder="podaj imie" name="sf_animal_name" style="max-width: 300px;"
 						value="{$searchForm->animal_name}" /><br />
 					<button type="submit" class="button primary small" style="margin-top: 10px;">Filtruj</button>
 					<a class="button small" href="{$conf->action_root}animalNew">+ dodaj zwierzątko</a>
 				</fieldset>
 			</form>
 		</div>


 		<div style="text-align: center;">
 			<h2>Lista zwierzątek</h2>
 			<div class="table-wrapper" style="max-width: 1500px; margin: auto;">
 				<table id="tab_animal" class="alt">
 					<thead>
 						<tr>
 							<th style="text-align: center;">numer</th>
 							<th style="text-align: center;">imie</th>
							 <th style="text-align: center;">gatunek</th>
 							<th style="text-align: center;">data dołączenia</th>
							 <th style="text-align: center;">opiekun</th>
							 <th style="text-align: center;">strefa</th>
 							<th style="text-align: center;">opcje</th>
 						</tr>
 					</thead>
 					<tbody>
 						{foreach $animal as $a}
	 						{strip}
		 						<tr>
		 							<td>{$a["animal_id"]}</td>
		 							<td>{$a["animal_name"]}</td>
									 <td title="{$a["species_id"]}">{$a["species_name"]}</td>
		 							<td>{$a["join_date"]}</td>
									 <td title="{$a["caretaker_id"]}">{$a["caretaker_name"]}</td>
									 <td title="{$a["category_id"]}">{$a["category_name"]}</td>
		 							<td>
		 								<div style="display: flex; justify-content: center;">
		 									<a class="button primary small"
		 										href="{$conf->action_url}animalEdit/{$a['animal_id']}">edytuj</a>
		 									&nbsp;
		 									<a class="button small"
		 										href="{$conf->action_url}animalDelete/{$a['animal_id']}">usuń</a>
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