<?php
/* Smarty version 3.1.31, created on 2018-02-05 11:54:32
  from "D:\wamp64\www\gybuliga\templates\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a7845f81b2933_83767763',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a0e636117b296b8cf6f0b67c2b424ef12ab0e11' => 
    array (
      0 => 'D:\\wamp64\\www\\gybuliga\\templates\\footer.tpl',
      1 => 1510078689,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a7845f81b2933_83767763 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_229835a7845f8177cf1_37849696', 'styles');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_30605a7845f8197788_93145664', 'footer');
}
/* {block 'styles'} */
class Block_229835a7845f8177cf1_37849696 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_229835a7845f8177cf1_37849696',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="/css/footer.css">
<?php
}
}
/* {/block 'styles'} */
/* {block 'footer'} */
class Block_30605a7845f8197788_93145664 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_30605a7845f8197788_93145664',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row glyphicon-blackboard footer text-center">
        <div class="col-md-4"> Test </div>
        <div class="col-md-4"> Test </div>
        <div class="col-md-4"> Test </div>
    </div>
<?php
}
}
/* {/block 'footer'} */
}
