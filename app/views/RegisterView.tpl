<!DOCTYPE HTML>

<head>
		<title>rejstracja</title>
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
                <h2>Rejestracja do systemu</h2>
                <form action="{$conf->action_root}register" method="post">
                <fieldset>    
                <div class="pure-control-group" style="margin-bottom:20px">
                    <input id="login" type="text" name="login" placeholder="utwórz nowy login">
                </div>
                
                <div class="pure-control-group">
                <input id="password" type="password" name="password" placeholder="utwórz nowe hasło"/><br />
                </div>
                <div class="col-12">
                    <input type="submit" value="Zarejestruj" class="button primary" />
                    <a class="button" href="{$conf->action_root}loginShow">powrót</a>
					</div>
                
            </fieldset>
            </form>    
            </header>
			{block name=messages}

				{if $msgs->isMessage()}
					<div class="messages bottom-margin">
						<ul>
							{foreach $msgs->getMessages() as $msg}
								{strip}
									<span msg {if $msg->isError()}error{/if} {if $msg->isWarning()}warning{/if}
										{if $msg->isInfo()}info{/if}"><li>{$msg->text}</</span>
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