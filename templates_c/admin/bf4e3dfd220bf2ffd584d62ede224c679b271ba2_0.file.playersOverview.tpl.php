<?php
/* Smarty version 3.1.31, created on 2018-02-15 08:05:01
  from "D:\wamp64\www\gybuliga\templates\admin\playersOverview.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a853f2d6c8bc2_55428813',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf4e3dfd220bf2ffd584d62ede224c679b271ba2' => 
    array (
      0 => 'D:\\wamp64\\www\\gybuliga\\templates\\admin\\playersOverview.tpl',
      1 => 1518681898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a853f2d6c8bc2_55428813 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_293815a853f2d5a0a23_85088358', 'head');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_51465a853f2d5dae01_91477745', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "@layout.tpl");
}
/* {block 'head'} */
class Block_293815a853f2d5a0a23_85088358 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_293815a853f2d5a0a23_85088358',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'head'} */
/* {block 'content'} */
class Block_51465a853f2d5dae01_91477745 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_51465a853f2d5dae01_91477745',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1>Hráči</h1>
    <a href="/gadmin/players/add">Přidat hráče</a>

    <table class="table-bordered">
        <thead class="table-hover">
        <tr>
            <th>Hráč</th>
            <th>Tým</th>
            <th>Edit</th>
        </tr>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['players']->value, 'player');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['player']->value) {
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['player']->value->name;?>
 <?php echo $_smarty_tpl->tpl_vars['player']->value->surname;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['player']->value->currentTeam->name;?>
</td>
                <td><a href="/gadmin/players/edit/<?php echo $_smarty_tpl->tpl_vars['player']->value->id;?>
">Edit</a></td>
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
/* {/block 'content'} */
}
