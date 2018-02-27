<?php
/* Smarty version 3.1.31, created on 2018-02-20 22:41:15
  from "D:\wamp64\www\gybuliga\templates\admin\@layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a8ca40b067c80_66366744',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '219881b98467473cf1fc7e33d19ae6009bcc5027' => 
    array (
      0 => 'D:\\wamp64\\www\\gybuliga\\templates\\admin\\@layout.tpl',
      1 => 1519166472,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menu.tpl' => 1,
  ),
),false)) {
function content_5a8ca40b067c80_66366744 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
<head>
    <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page']->value['title'])===null||$tmp==='' ? "Menu | GyBu Liga" : $tmp);?>
</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/typeahead.bundle.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <?php echo '<script'; ?>
 src="js/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/jquery-ui.js"><?php echo '</script'; ?>
>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_141015a8ca40af1b906_88068419', 'head');
?>

</head>
<body>
<div class="container">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_26025a8ca40af3f385_67151632', 'menu');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_205075a8ca40b046d88_43723595', 'content');
?>

</div>
</body>
</html><?php }
/* {block 'head'} */
class Block_141015a8ca40af1b906_88068419 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_141015a8ca40af1b906_88068419',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head'} */
/* {block 'menu'} */
class Block_26025a8ca40af3f385_67151632 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_26025a8ca40af3f385_67151632',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender("file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php
}
}
/* {/block 'menu'} */
/* {block 'content'} */
class Block_205075a8ca40b046d88_43723595 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_205075a8ca40b046d88_43723595',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php
}
}
/* {/block 'content'} */
}
