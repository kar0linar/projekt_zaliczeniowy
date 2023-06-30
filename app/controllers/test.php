!DOCTYPE HTML>
<html>
    <head>
        <title>Elements Reference - Massively by HTML5 UP</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
        <style>
            .login-wrapper {
                display: flex;
                justify-content: center;
                align-items: center;
                /* height: 100vh; */
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
                <form action="{$conf->action_root}register" method="post" class="pure-form pure-form-aligned bottom-margin">
                <fieldset>    
                <div class="pure-control-group" style="margin-bottom:20px">
                    <label for="login">Login: </label>
                    <input id="login" type="text" name="login">
                </div>
                
                <div class="pure-control-group">
                <label for="pass">Hasło: </label>
                <input id="password" type="password" name="password" /><br />
                </div>
                <div class="pure-controls">
                    <input type="submit" value="Zarejestruj" class="pure-button pure-button-primary" />
                </div>
                <div class="col-12">
                    <a class="button primary large" href="{$conf->action_root}login">Powrót</a>
                
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
                                                {if $msg->isInfo()}info{/if}">{$msg->text}</span>
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