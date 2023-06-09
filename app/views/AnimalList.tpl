{extends file="main.tpl"}

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

{/block}
