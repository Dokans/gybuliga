<?php
/* Smarty version 3.1.31, created on 2018-02-05 11:54:32
  from "D:\wamp64\www\gybuliga\templates\@layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a7845f80483d5_20820235',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf217235a5b0991584ff94fe426df5b801fb0f9a' => 
    array (
      0 => 'D:\\wamp64\\www\\gybuliga\\templates\\@layout.tpl',
      1 => 1510079334,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:favicon.tpl' => 1,
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a7845f80483d5_20820235 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page']->value['title'])===null||$tmp==='' ? "GyBu Liga" : $tmp);?>
</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <?php echo '<script'; ?>
 src="/js/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $_smarty_tpl->_subTemplateRender("file:favicon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_77285a7845f7e864e6_30072629', 'scripts');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_109215a7845f7eba8d9_94518513', 'styles');
?>

</head>
<body>
<div class="container">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_225745a7845f7ee47a3_93462837', 'header');
?>

    <div style="min-height: 500px">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_163355a7845f7f272e1_65719494', 'main');
?>

    </div>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_279965a7845f8008762_01760025', 'footer');
?>

</div>
</body>
</html><?php }
/* {block 'scripts'} */
class Block_77285a7845f7e864e6_30072629 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_77285a7845f7e864e6_30072629',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php
}
}
/* {/block 'scripts'} */
/* {block 'styles'} */
class Block_109215a7845f7eba8d9_94518513 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_109215a7845f7eba8d9_94518513',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php
}
}
/* {/block 'styles'} */
/* {block 'header'} */
class Block_225745a7845f7ee47a3_93462837 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_225745a7845f7ee47a3_93462837',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php
}
}
/* {/block 'header'} */
/* {block 'main'} */
class Block_163355a7845f7f272e1_65719494 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_163355a7845f7f272e1_65719494',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block 'main'} */
/* {block 'footer'} */
class Block_279965a7845f8008762_01760025 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_279965a7845f8008762_01760025',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php
}
}
/* {/block 'footer'} */
}
