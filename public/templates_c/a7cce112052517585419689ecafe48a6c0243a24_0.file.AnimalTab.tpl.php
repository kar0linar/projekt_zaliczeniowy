<?php
/* Smarty version 4.3.0, created on 2023-07-05 16:29:22
  from 'C:\xampp\htdocs\projekt_zaliczeniowy\app\views\AnimalTab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64a57e42343b29_43398555',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7cce112052517585419689ecafe48a6c0243a24' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt_zaliczeniowy\\app\\views\\AnimalTab.tpl',
      1 => 1688567355,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64a57e42343b29_43398555 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
 <!DOCTYPE HTML>

 <html>

 <head>
 	<title>lista zwierzaków</title>
 	<meta charset="utf-8" />
 	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
 	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/main.css" />
 	<noscript>
 		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/noscript.css" />
 	</noscript>
 </head>

 <body class="is-preload">

 	<div id="page-wrapper">

 		<!-- Header -->
 		<header id="header" class="alt">
 			<h1><a href="index.html">niesamowite zoo</a></h1>
 			<nav>
 				<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
animalList" class="button">Powrót</a>
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
 			<form class="" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
animalTab" style="margin-left: 100px; margin-top: 20px;">
 				<legend style="line-height: 3;">wyszukiwarka zwierzątek:</legend>
 				<fieldset>
 					<input type="text" placeholder="podaj imie" name="sf_animal_name" style="max-width: 300px;"
 						value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->animal_name;?>
" /><br />
 					<button type="submit" class="button primary small" style="margin-top: 10px;">Filtruj</button>
 					<a class="button small" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
animalNew">+ dodaj zwierzątko</a>
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
 						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['animal']->value, 'a');
$_smarty_tpl->tpl_vars['a']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->do_else = false;
?>
	 						<tr><td><?php echo $_smarty_tpl->tpl_vars['a']->value["animal_id"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['a']->value["animal_name"];?>
</td><td title="<?php echo $_smarty_tpl->tpl_vars['a']->value["species_id"];?>
"><?php echo $_smarty_tpl->tpl_vars['a']->value["species_name"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['a']->value["join_date"];?>
</td><td title="<?php echo $_smarty_tpl->tpl_vars['a']->value["caretaker_id"];?>
"><?php echo $_smarty_tpl->tpl_vars['a']->value["caretaker_name"];?>
</td><td title="<?php echo $_smarty_tpl->tpl_vars['a']->value["category_id"];?>
"><?php echo $_smarty_tpl->tpl_vars['a']->value["category_name"];?>
</td><td><div style="display: flex; justify-content: center;"><a class="button primary small" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
animalEdit/<?php echo $_smarty_tpl->tpl_vars['a']->value['animal_id'];?>
">edytuj</a>&nbsp;<a class="button small" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
animalDelete/<?php echo $_smarty_tpl->tpl_vars['a']->value['animal_id'];?>
">usuń</a></div></td></tr>
 						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
 					</tbody>
 				</table>
 			</div>
 		</div>
 	</div>

 	</div>
 	</section>
	 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_155807400564a57e42339114_96048470', 'messages');
?>


 	</div>
 	</div>

 	</div>
 	</section>

 	</div>


 	<!-- Scripts -->
 	<?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
 	<?php echo '<script'; ?>
 src="assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
 	<?php echo '<script'; ?>
 src="assets/js/browser.min.js"><?php echo '</script'; ?>
>
 	<?php echo '<script'; ?>
 src="assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
 	<?php echo '<script'; ?>
 src="assets/js/util.js"><?php echo '</script'; ?>
>
 	<?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>

 </body>

</html><?php }
/* {block 'messages'} */
class Block_155807400564a57e42339114_96048470 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_155807400564a57e42339114_96048470',
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
						<span msg <?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>error<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isWarning()) {?>warning<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>info<?php }?>"><li><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
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
