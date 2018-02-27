<?php
/* Smarty version 3.1.31, created on 2018-02-27 16:24:30
  from "D:\wamp64\www\gybuliga\templates\groupDetail.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a95863e891513_13732423',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67fc6411a5e376ad9525f00a34070c08b8bb5e59' => 
    array (
      0 => 'D:\\wamp64\\www\\gybuliga\\templates\\groupDetail.tpl',
      1 => 1519748669,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a95863e891513_13732423 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_234775a95863e74c378_25356977', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "@layout.tpl");
}
/* {block 'main'} */
class Block_234775a95863e74c378_25356977 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_234775a95863e74c378_25356977',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <table class="table">
        <thead>
        <tr>
            <th>Tým</th>
            <th>Body</th>
            <th>Zápasy</th>
            <th>GF</th>
            <th>GA</th>
            <th>W</th>
            <th>WO</th>
            <th>LO</th>
            <th>L</th>
        </tr>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['table']->value, 'team', false, NULL, 'groups', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['team']->value) {
?>
            <tr>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['team']->value['name'];?>

                </td>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['team']->value['table']['points'];?>

                </td>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['team']->value['table']['matches'];?>

                </td>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['team']->value['table']['GF'];?>

                </td>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['team']->value['table']['GA'];?>

                </td>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['team']->value['table']['matchBalance']['wins'];?>

                </td>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['team']->value['table']['matchBalance']['OW'];?>

                </td>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['team']->value['table']['matchBalance']['OL'];?>

                </td>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['team']->value['table']['matchBalance']['loses'];?>

                </td>
            </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

        </tbody>
    </table>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-sm-offset-3">
                GF
            </div>
            <div class="col-sm-3">
                Vstřelené góly
            </div>
        </div>
    </div>
<?php
}
}
/* {/block 'main'} */
}
