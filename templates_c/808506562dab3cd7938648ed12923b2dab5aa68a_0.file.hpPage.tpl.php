<?php
/* Smarty version 3.1.31, created on 2018-02-05 22:14:01
  from "D:\wamp64\www\gybuliga\templates\hpPage.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a78d729470841_87560058',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '808506562dab3cd7938648ed12923b2dab5aa68a' => 
    array (
      0 => 'D:\\wamp64\\www\\gybuliga\\templates\\hpPage.tpl',
      1 => 1512301227,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a78d729470841_87560058 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_25845a78d7291282b6_38651445', 'main');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "@layout.tpl");
}
/* {block 'main'} */
class Block_25845a78d7291282b6_38651445 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_25845a78d7291282b6_38651445',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['test']->value, 'team', false, NULL, 'test', array (
  'first' => true,
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['team']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_test']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_test']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_test']->value['index'];
?>
                <li data-target="#myCarousel" data-slide-to="0" <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_test']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_test']->value['first'] : null)) {?>class="active"<?php }?>></li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['test']->value, 'team', false, NULL, 'test', array (
  'first' => true,
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['team']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_test']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_test']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_test']->value['index'];
?>
                <div class="item <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_test']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_test']->value['first'] : null)) {?>active<?php }?>">
                    <a href="/teams/<?php echo $_smarty_tpl->tpl_vars['team']->value['url'];?>
">
                        <img src="/image/teams/<?php echo $_smarty_tpl->tpl_vars['team']->value['teamID'];?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['team']->value['name'];?>
" style="width: 300px; height: 300px">
                    </a>
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

            <!-- Left and right co  ntrols -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="fa glyphicon-chevron-left fa-backward"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="fa glyphicon-chevron-right fa-forward"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <style>
        .carousel-inner > .item > a > img {
            margin: 0 auto;
    </style>
<?php
}
}
/* {/block 'main'} */
}
