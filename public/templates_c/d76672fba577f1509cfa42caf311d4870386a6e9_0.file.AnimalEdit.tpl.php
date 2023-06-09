<?php
/* Smarty version 4.3.0, created on 2023-06-09 17:59:44
  from 'C:\xampp\htdocs\projekt_zaliczeniowy\app\views\AnimalEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64834c70a357f0_38182066',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd76672fba577f1509cfa42caf311d4870386a6e9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt_zaliczeniowy\\app\\views\\AnimalEdit.tpl',
      1 => 1686326383,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64834c70a357f0_38182066 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_43360410764834c70a286c5_72343140', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_43360410764834c70a286c5_72343140 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_43360410764834c70a286c5_72343140',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="bottom-margin">
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
animalSave" method="post" class="pure-form pure-form-aligned">
	<fieldset>
		<legend>animal data</legend>
		<div class="pure-control-group">
            <label for="name">animal id</label>
            <input id="name" type="text" placeholder="id" name="id" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->animal_id;?>
">
        </div>
		<div class="pure-control-group">
            <label for="name">name</label>
            <input id="name" type="text" placeholder="name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->animal_name;?>
">
        </div>
		<div class="pure-control-group">
            <label for="join date">data ur.</label>
            <input id="join date" type="text" placeholder="join date" name="join date" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->join_date;?>
">
        </div>
		<div class="pure-controls">
			<input type="submit" class="pure-button pure-button-primary" value="save"/>
			<a class="pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
animalList">return</a>
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
