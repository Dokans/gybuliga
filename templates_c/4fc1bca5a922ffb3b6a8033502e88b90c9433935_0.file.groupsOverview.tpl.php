<?php
/* Smarty version 3.1.31, created on 2018-02-05 13:09:16
  from "D:\wamp64\www\gybuliga\templates\groupsOverview.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a78577c659177_10949282',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4fc1bca5a922ffb3b6a8033502e88b90c9433935' => 
    array (
      0 => 'D:\\wamp64\\www\\gybuliga\\templates\\groupsOverview.tpl',
      1 => 1512303745,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a78577c659177_10949282 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_249955a78577c506599_50958947', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "@layout.tpl");
}
/* {block 'main'} */
class Block_249955a78577c506599_50958947 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_249955a78577c506599_50958947',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <table>
        <thead>
        <tr>
            <th>Jméno</th>
            <th>Počet účastníku</th>
        </tr>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groups']->value, 'group');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
?>
            <tr>
                <td><a href="groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['group']->value['name'];?>
</a></td>
                <td> ###</td>
            </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

        </tbody>
    </table>
<?php
}
}
/* {/block 'main'} */
}
