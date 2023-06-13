{* {extends file="main.tpl"} 

 {block name=top}
<form action="{$conf->action_root}login" method="post" class="pure-form pure-form-aligned bottom-margin">
	<legend>Logowanie do systemu</legend>
	<fieldset>
        <div class="pure-control-group">
			<label for="id_login">login: </label>
			<input id="id_login" type="text" name="login" value="{$form->login}"/>
		</div>
        <div class="pure-control-group">
			<label for="id_pass">pass: </label>
			<input id="id_pass" type="password" name="pass" /><br />
		</div>
		<div class="pure-controls">
			<input type="submit" value="zaloguj" class="pure-button pure-button-primary"/>
		</div>
	</fieldset>
</form>	
{/block} *}



<!DOCTYPE HTML>
<head>
	<form action="{$conf->action_root}login" method="post">
	<title>login</title>
	<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{$conf->app_url}/assets/css/main.css" />
		<style>
		.login-wrapper {
		  display: flex;
		  justify-content: center;
		  align-items: center;
		  height: 100vh;
		}
	  
		.container {
		  width: 400px;
		  text-align: center;
		}
	  </style>
</head>
<body>
<div class="login-wrapper">
<div class="container">
  <header>
	<h2>Witamy w bazie zwierząt zoo</h2>
	<p>Zaloguj się do systemu, aby móc skorzystać ze strony</p>
  </header>
  <form action="{$conf->action_url}login" method="post" class="login-form">
	<div class="row gtr-uniform gtr-50">
	  <div class="col-12">
		<input type="text" name="login" id="id_login" placeholder="Login" value="{$form->login}">
	  </div>
	  <div class="col-12">
		<input type="password" name="pass" id="id_pass" placeholder="Hasło">
	  </div>
	  <div class="col-12">
		<input type="submit" value="Zaloguj" class="button primary">
	  </div>
	  {block name=messages}

	{if $msgs->isMessage()}
	<div class="messages bottom-margin">
		<ul>
		{foreach $msgs->getMessages() as $msg}
		{strip}
			<span msg {if $msg->isError()}error{/if} {if $msg->isWarning()}warning{/if} {if $msg->isInfo()}info{/if}">{$msg->text}</span>
		{/strip}
		{/foreach}
		</ul>
	</div>
	{/if}
	
	{/block}
	</div>
  </form>
</div>
</div>
