<?php
/* Smarty version 4.3.0, created on 2023-07-02 19:05:31
  from 'C:\xampp\htdocs\projekt_zaliczeniowy\app\views\RegisterView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64a1ae5bc31e93_93225306',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58b2bd0c3712101588d3b97f2a98463f1534206f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt_zaliczeniowy\\app\\views\\RegisterView.tpl',
      1 => 1688317528,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64a1ae5bc31e93_93225306 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>

<head>
		<title>rejstracja</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/main.css" />
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
                <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
register" method="post">
                <fieldset>    
                <div class="pure-control-group" style="margin-bottom:20px">
                    <input id="login" type="text" name="login" placeholder="utwórz nowy login">
                </div>
                
                <div class="pure-control-group">
                <input id="password" type="password" name="password" placeholder="utwórz nowe hasło"/><br />
                </div>
                <div class="col-12">
                    <input type="submit" value="Zarejestruj" class="button primary" />
                    <a class="button" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
loginShow">powrót</a>
					</div>
                
            </fieldset>
            </form>    
            </header>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_30925178864a1ae5bc24700_53704598', 'messages');
?>

				</div>
			</form>
		</div>
</div><?php }
/* {block 'messages'} */
class Block_30925178864a1ae5bc24700_53704598 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_30925178864a1ae5bc24700_53704598',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


				<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) {?>
					<div class="messages bottom-margin">
						<ul>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
								<span msg <?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>error<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isWarning()) {?>warning<?php }
if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>info<?php }?>"><li><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</</span>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</ul>
					</div>
				<?php }?>

			<?php
}
}
/* {/block 'messages'} */
}
