<?php
/* Smarty version 4.3.0, created on 2023-06-07 23:23:00
  from 'C:\xampp\htdocs\projekt_zaliczeniowy\app\views\AnimalList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6480f5346ad2a5_87761134',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4d1742679900583f46a015a73f960500d973a6e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt_zaliczeniowy\\app\\views\\AnimalList.tpl',
      1 => 1686172602,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6480f5346ad2a5_87761134 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_363757086480f534687377_35901338', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15983435956480f534688d36_79499500', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12039847896480f53468fd23_33222461', 'bottom');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'title'} */
class Block_363757086480f534687377_35901338 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_363757086480f534687377_35901338',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<title>tabela zwierzatek</title>
<?php
}
}
/* {/block 'title'} */
/* {block 'top'} */
class Block_15983435956480f534688d36_79499500 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_15983435956480f534688d36_79499500',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="bottom-margin">
<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
animalList">
	<legend>Opcje wyszukiwania</legend>
	<fieldset>
		<input type="text" placeholder="nazwisko" name="sf_surname" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->surname;?>
" /><br />
		<button type="submit" class="pure-button pure-button-primary">Filtruj</button>
	</fieldset>
</form>
</div>	

<?php
}
}
/* {/block 'top'} */
/* {block 'bottom'} */
class Block_12039847896480f53468fd23_33222461 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom' => 
  array (
    0 => 'Block_12039847896480f53468fd23_33222461',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="bottom-margin">
<a class="pure-button button-success" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
animalNew">+ Nowa osoba</a>
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
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['people']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
<tr><td><?php echo $_smarty_tpl->tpl_vars['p']->value["name"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["surname"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["birthdate"];?>
</td><td><a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
animalEdit/<?php echo $_smarty_tpl->tpl_vars['p']->value['idanimal'];?>
">Edytuj</a>&nbsp;<a class="button-small pure-button button-warning" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
animalDelete/<?php echo $_smarty_tpl->tpl_vars['p']->value['idanimal'];?>
">Usuń</a></td></tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tbody>
</table>

<?php
}
}
/* {/block 'bottom'} */
}
