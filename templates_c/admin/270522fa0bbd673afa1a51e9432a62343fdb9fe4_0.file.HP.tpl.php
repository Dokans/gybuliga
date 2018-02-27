<?php
/* Smarty version 3.1.31, created on 2018-02-14 06:53:59
  from "D:\wamp64\www\gybuliga\templates\admin\HP.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a83dd070541f3_36692989',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '270522fa0bbd673afa1a51e9432a62343fdb9fe4' => 
    array (
      0 => 'D:\\wamp64\\www\\gybuliga\\templates\\admin\\HP.tpl',
      1 => 1518591230,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a83dd070541f3_36692989 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_294195a83dd06ed5f73_63953740', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "@layout.tpl");
}
/* {block 'content'} */
class Block_294195a83dd06ed5f73_63953740 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_294195a83dd06ed5f73_63953740',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php if (isset($_smarty_tpl->tpl_vars['message']->value)) {?>
        <h1><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</h1>
    <?php }?>
    xxxxxxxx
<?php
}
}
/* {/block 'content'} */
}
