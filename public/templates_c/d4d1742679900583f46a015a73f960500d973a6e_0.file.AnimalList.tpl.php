<?php
/* Smarty version 4.3.0, created on 2023-06-09 17:50:55
  from 'C:\xampp\htdocs\projekt_zaliczeniowy\app\views\AnimalList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64834a5f30cd41_42063659',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4d1742679900583f46a015a73f960500d973a6e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt_zaliczeniowy\\app\\views\\AnimalList.tpl',
      1 => 1686325836,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64834a5f30cd41_42063659 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17133081864834a5f2eb444_88163671', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_108451552364834a5f2ecb50_51878145', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_88475310064834a5f2f8018_05385131', 'bottom');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'title'} */
class Block_17133081864834a5f2eb444_88163671 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_17133081864834a5f2eb444_88163671',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<title>animal table</title>
<?php
}
}
/* {/block 'title'} */
/* {block 'top'} */
class Block_108451552364834a5f2ecb50_51878145 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_108451552364834a5f2ecb50_51878145',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="bottom-margin">
<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
animalList">
	<legend>search options</legend>
	<fieldset>
		<input type="text" placeholder="name" name="sf_animal_name" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->animal_name;?>
" /><br />
		<button type="submit" class="pure-button pure-button-primary">search</button>
	</fieldset>
</form>
</div>	

<?php
}
}
/* {/block 'top'} */
/* {block 'bottom'} */
class Block_88475310064834a5f2f8018_05385131 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom' => 
  array (
    0 => 'Block_88475310064834a5f2f8018_05385131',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="bottom-margin">
<a class="pure-button button-success" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
animalNew">+ new animal</a>
</div>	

<table id="tab_animal" class="pure-table pure-table-bordered">
<thead>
	<tr>
		<th>animal id</th>
		<th>name</th>
		<th>join date</th>
		<th>options</th>
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
</td><td><?php echo $_smarty_tpl->tpl_vars['a']->value["join_date"];?>
</td><td><a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
animalEdit/<?php echo $_smarty_tpl->tpl_vars['a']->value['animal_id'];?>
">edit</a>&nbsp;<a class="button-small pure-button button-warning" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
animalDelete/<?php echo $_smarty_tpl->tpl_vars['a']->value['animal_id'];?>
">delete</a></td></tr>
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
