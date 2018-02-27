<?php
/* Smarty version 3.1.31, created on 2018-02-26 13:56:16
  from "D:\wamp64\www\gybuliga\templates\admin\teamsOverview.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a941200907ff1_83242774',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0de04201ca1e6ce8e7330b4141e24f1c3877e2fa' => 
    array (
      0 => 'D:\\wamp64\\www\\gybuliga\\templates\\admin\\teamsOverview.tpl',
      1 => 1519653375,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a941200907ff1_83242774 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_133745a941200844e28_73572467', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "@layout.tpl");
}
/* {block 'content'} */
class Block_133745a941200844e28_73572467 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_133745a941200844e28_73572467',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['teams']->value, 'team');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['team']->value) {
?>
        <div class="row">
            <div class="col-md-2">
                <img src="<?php echo $_smarty_tpl->tpl_vars['team']->value->getTeamLogoPath();?>
" class="img-thumbnail" style="max-width: 50px">
            </div>
            <div class="col-md-3">
                <b><?php echo $_smarty_tpl->tpl_vars['team']->value->name;?>
</b>
            </div>
            <div class="offset-5 col-md-2">
                <a href="/gadmin/teams/edit/<?php echo $_smarty_tpl->tpl_vars['team']->value->id;?>
">Editovat</a>
            </div>
        </div>

    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

<?php
}
}
/* {/block 'content'} */
}
