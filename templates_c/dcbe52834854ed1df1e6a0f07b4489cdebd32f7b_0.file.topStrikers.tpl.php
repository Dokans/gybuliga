<?php
/* Smarty version 3.1.31, created on 2018-02-27 16:23:57
  from "D:\wamp64\www\gybuliga\templates\topStrikers.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a95861da4a837_72034817',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dcbe52834854ed1df1e6a0f07b4489cdebd32f7b' => 
    array (
      0 => 'D:\\wamp64\\www\\gybuliga\\templates\\topStrikers.tpl',
      1 => 1519748636,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a95861da4a837_72034817 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_104895a95861d871e81_71816578', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "@layout.tpl");
}
/* {block 'main'} */
class Block_104895a95861d871e81_71816578 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_104895a95861d871e81_71816578',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_assignInScope('count', 1);
?>
    <table class="table">
        <thead>
        <tr>
            <th></th>
            <th>Jméno</th>
            <th>Tým</th>
            <th>Počet gólů</th>
        </tr>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['strikers']->value, 'striker');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['striker']->value) {
?>
            <tr>
                <td>
                    <?php if ($_smarty_tpl->tpl_vars['count']->value == 1) {?>
                        <span style="color: gold"><b>1</b></span>
                    <?php } elseif ($_smarty_tpl->tpl_vars['count']->value == 2) {?>
                        <span style="color: silver"><b>2</b></span>
                    <?php } elseif ($_smarty_tpl->tpl_vars['count']->value == 3) {?>
                        <span style="color: saddlebrown"><b>3</b></span>
                    <?php } else { ?>
                        <span style="color:"><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</span>
                    <?php }?>

                </td>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['striker']->value['player']->name;?>
 <b><?php echo $_smarty_tpl->tpl_vars['striker']->value['player']->surname;?>
</b>
                </td>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['striker']->value['player']->currentTeam->name;?>

                </td>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['striker']->value['goals'];?>

                </td>
            </tr>
            <?php $_smarty_tpl->_assignInScope('count', $_smarty_tpl->tpl_vars['count']->value+1);
?>
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
