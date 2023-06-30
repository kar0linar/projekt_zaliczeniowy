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
					<div class="container">
						<input type="submit" value="Zaloguj" class="button primary">
						<a class="button" href="{$conf->action_root}animalList">Powrót</a>
					</div>
					<div class="container">
					<p>jeżeli nie posiadasz konta - zarejestruj się</p>
					<a class="button primary fit" style="margin-top: 1px;" href="{$conf->action_root}registerShow">Zarejestruj</a>
					</div>
					{block name=messages}

						{if $msgs->isMessage()}
							<div class="messages bottom-margin">
								<ul>
									{foreach $msgs->getMessages() as $msg}
										{strip}
											<span msg {if $msg->isError()}error{/if} {if $msg->isWarning()}warning{/if}
												{if $msg->isInfo()}info{/if}"><li>{$msg->text}</li></span>
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