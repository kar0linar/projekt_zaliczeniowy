<?php
/* Smarty version 4.3.0, created on 2023-06-30 18:43:35
  from 'C:\xampp\htdocs\projekt_zaliczeniowy\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_649f0637927908_24433239',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '453663c99df94a240735bc08f888bd6ca6213453' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt_zaliczeniowy\\app\\views\\LoginView.tpl',
      1 => 1688143303,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_649f0637927908_24433239 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>

<head>
	<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login" method="post">
		<title>login</title>
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
				<h2>Witamy w bazie zwierząt zoo</h2>
				<p>Zaloguj się do systemu, aby móc skorzystać ze strony</p>
			</header>
			<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post" class="login-form">
				<div class="row gtr-uniform gtr-50">
					<div class="col-12">
						<input type="text" name="login" id="id_login" placeholder="Login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
">
					</div>
					<div class="col-12">
						<input type="password" name="pass" id="id_pass" placeholder="Hasło">
					</div>
					<div class="container">
						<input type="submit" value="Zaloguj" class="button primary">
						<a class="button" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
animalList">Powrót</a>
					</div>
					<div class="container">
					<p>jeżeli nie posiadasz konta - zarejestruj się</p>
					<a class="button primary fit" style="margin-top: 1px;" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
registerShow">Zarejestruj</a>
					</div>
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1839688469649f0637907cf6_91061571', 'messages');
?>

				</div>
			</form>
		</div>
</div><?php }
/* {block 'messages'} */
class Block_1839688469649f0637907cf6_91061571 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_1839688469649f0637907cf6_91061571',
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
</li></span>
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
