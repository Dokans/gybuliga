<?php
/* Smarty version 3.1.31, created on 2018-02-22 23:27:23
  from "D:\wamp64\www\gybuliga\templates\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a8f51db89b3a8_30046954',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8eb0eb893e7481b167ce15536bda4f0e6c893e26' => 
    array (
      0 => 'D:\\wamp64\\www\\gybuliga\\templates\\header.tpl',
      1 => 1519342040,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a8f51db89b3a8_30046954 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_277135a8f51db816530_61810457', 'style');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_56065a8f51db848585_60030481', 'scripts');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_59275a8f51db873142_61320094', 'header');
?>

<?php }
/* {block 'style'} */
class Block_277135a8f51db816530_61810457 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_277135a8f51db816530_61810457',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="/css/header.css">
<?php
}
}
/* {/block 'style'} */
/* {block 'scripts'} */
class Block_56065a8f51db848585_60030481 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_56065a8f51db848585_60030481',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="/js/header.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'scripts'} */
/* {block 'header'} */
class Block_59275a8f51db873142_61320094 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_59275a8f51db873142_61320094',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="navbar-more-overlay"></div>
    <nav class="navbar navbar-inverse navbar-fixed-top animate">
        <div class="container navbar-more visible-xs">

        </div>
        <div class="container">
            <div class="navbar-header hidden-xs">

                <a class="navbar-brand" href="/">GyBu Liga</a>
            </div>

            <ul class="nav navbar-nav navbar-right mobile-bar">
                <li>
                    <a href="/">
                        <span class="menu-icon fa fa-home"></span>
                        Domů
                    </a>
                </li>
                <li>
                    <a href="/groups">
                        <span class="menu-icon fa fa-th-list"></span>
                        <span class="hidden-xs">Skupiny</span>
                        <span class="visible-xs">Skupiny</span>
                    </a>
                </li>
                <li>
                    <a href="/teams">
                        <span class="menu-icon fa fa-square-o"></span>
                        Týmy
                    </a>
                </li>
                <li>
                    <a href="/statistic/topStrikers">
                        <span class="menu-icon fa fa fa-table"></span>
                        Top střelci
                    </a>
                </li>
                <li>
                    <a href="/archive">
                        <span class="menu-icon fa fa-archive"></span>
                        <span class="hidden-xs">Minulé sezóny</span>
                        <span class="visible-xs">Archiv</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
<?php
}
}
/* {/block 'header'} */
}
