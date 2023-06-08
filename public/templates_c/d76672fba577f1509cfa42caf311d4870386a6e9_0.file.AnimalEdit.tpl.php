<?php
/* Smarty version 4.3.0, created on 2023-06-07 23:25:34
  from 'C:\xampp\htdocs\projekt_zaliczeniowy\app\views\AnimalEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6480f5ce748cc9_42472364',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd76672fba577f1509cfa42caf311d4870386a6e9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt_zaliczeniowy\\app\\views\\AnimalEdit.tpl',
      1 => 1686172568,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6480f5ce748cc9_42472364 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6229595706480f5ce736503_12037563', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_6229595706480f5ce736503_12037563 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_6229595706480f5ce736503_12037563',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="bottom-margin">
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
animalSave" method="post" class="pure-form pure-form-aligned">
	<fieldset>
		<legend>Dane osoby</legend>
		<div class="pure-control-group">
            <label for="name">imię</label>
            <input id="name" type="text" placeholder="imię" name="name" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->name;?>
">
        </div>
		<div class="pure-control-group">
            <label for="surname">nazwisko</label>
            <input id="surname" type="text" placeholder="nazwisko" name="surname" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->surname;?>
">
        </div>
		<div class="pure-control-group">
            <label for="birthdate">data ur.</label>
            <input id="birthdate" type="text" placeholder="data ur." name="birthdate" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->birthdate;?>
">
        </div>
		<div class="pure-controls">
			<input type="submit" class="pure-button pure-button-primary" value="Zapisz"/>
			<a class="pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
animalList">Powrót</a>
		</div>
	</fieldset>
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id;?>
">
</form>	
</div>

<?php
}
}
/* {/block 'top'} */
}
