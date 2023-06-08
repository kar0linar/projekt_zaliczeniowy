{extends file="main.tpl"}

{block name=title}
	<title>tabela zwierzatek</title>
{/block}
{block name=top}
<div class="bottom-margin">
<form class="pure-form pure-form-stacked" action="{$conf->action_url}animalList">
	<legend>Opcje wyszukiwania</legend>
	<fieldset>
		<input type="text" placeholder="nazwisko" name="sf_surname" value="{$searchForm->surname}" /><br />
		<button type="submit" class="pure-button pure-button-primary">Filtruj</button>
	</fieldset>
</form>
</div>	

{/block}

{block name=bottom}

<div class="bottom-margin">
<a class="pure-button button-success" href="{$conf->action_root}animalNew">+ Nowa osoba</a>
</div>	

<table id="tab_people" class="pure-table pure-table-bordered">
<thead>
	<tr>
		<th>imię</th>
		<th>nazwisko</th>
		<th>data ur.</th>
		<th>opcje</th>
	</tr>
</thead>
<tbody>
{foreach $people as $p}
{strip}
	<tr>
		<td>{$p["name"]}</td>
		<td>{$p["surname"]}</td>
		<td>{$p["birthdate"]}</td>
		<td>
			<a class="button-small pure-button button-secondary" href="{$conf->action_url}animalEdit/{$p['idanimal']}">Edytuj</a>
			&nbsp;
			<a class="button-small pure-button button-warning" href="{$conf->action_url}animalDelete/{$p['idanimal']}">Usuń</a>
		</td>
	</tr>
{/strip}
{/foreach}
</tbody>
</table>

{/block}
