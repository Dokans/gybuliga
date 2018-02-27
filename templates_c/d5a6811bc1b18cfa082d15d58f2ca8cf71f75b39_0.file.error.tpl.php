<?php
/* Smarty version 3.1.31, created on 2018-02-05 11:54:33
  from "D:\wamp64\www\gybuliga\templates\error.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a7845f95f2fb7_56383868',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5a6811bc1b18cfa082d15d58f2ca8cf71f75b39' => 
    array (
      0 => 'D:\\wamp64\\www\\gybuliga\\templates\\error.tpl',
      1 => 1509901350,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a7845f95f2fb7_56383868 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_83105a7845f95a44b4_50995693', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "@layout.tpl");
}
/* {block 'main'} */
class Block_83105a7845f95a44b4_50995693 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_83105a7845f95a44b4_50995693',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="text-center">
    <h1>Chyba</h1>
    <div class="text-danger"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
    </div>
<?php
}
}
/* {/block 'main'} */
}
