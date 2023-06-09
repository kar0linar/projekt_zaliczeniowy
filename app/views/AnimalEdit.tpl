{extends file="main.tpl"}

{block name=top}

<div class="bottom-margin">
<form action="{$conf->action_root}animalSave" method="post" class="pure-form pure-form-aligned">
	<fieldset>
		<legend>animal data</legend>
		<div class="pure-control-group">
            <label for="name">animal id</label>
            <input id="name" type="text" placeholder="id" name="id" value="{$form->animal_id}">
        </div>
		<div class="pure-control-group">
            <label for="name">name</label>
            <input id="name" type="text" placeholder="name" name="name" value="{$form->animal_name}">
        </div>
		<div class="pure-control-group">
            <label for="join date">data ur.</label>
            <input id="join date" type="text" placeholder="join date" name="join date" value="{$form->join_date}">
        </div>
		<div class="pure-controls">
			<input type="submit" class="pure-button pure-button-primary" value="save"/>
			<a class="pure-button button-secondary" href="{$conf->action_root}animalList">return</a>
		</div>
	</fieldset>
    <input type="hidden" name="id" value="{$form->id}">
</form>	
</div>

{/block}
