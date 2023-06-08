<?php
/* Smarty version 4.3.0, created on 2023-06-07 22:51:25
  from 'C:\xampp\htdocs\projekt_zaliczeniowy\app\views\PersonList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6480edcde1b460_36446131',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bbf68ca94d46314f2027228cc7dd13d7df520b1e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt_zaliczeniowy\\app\\views\\PersonList.tpl',
      1 => 1686171083,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6480edcde1b460_36446131 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5677427626480edcddd2ab3_62124486', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5472793356480edcddf3278_01870594', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10111773666480edcddfe002_34790611', 'bottom');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'title'} */
class Block_5677427626480edcddd2ab3_62124486 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_5677427626480edcddd2ab3_62124486',
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
class Block_5472793356480edcddf3278_01870594 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_5472793356480edcddf3278_01870594',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="bottom-margin">
<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personList">
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
class Block_10111773666480edcddfe002_34790611 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom' => 
  array (
    0 => 'Block_10111773666480edcddfe002_34790611',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="bottom-margin">
<a class="pure-button button-success" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
personNew">+ Nowa osoba</a>
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
personEdit/<?php echo $_smarty_tpl->tpl_vars['p']->value['idperson'];?>
">Edytuj</a>&nbsp;<a class="button-small pure-button button-warning" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personDelete/<?php echo $_smarty_tpl->tpl_vars['p']->value['idperson'];?>
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
