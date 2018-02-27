<?php
/* Smarty version 3.1.31, created on 2018-02-05 22:59:40
  from "D:\wamp64\www\gybuliga\templates\teamDetail.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a78e1dc7ce561_28505738',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c835da9b6c2d19c2380009bdd6ca2024a44621a' => 
    array (
      0 => 'D:\\wamp64\\www\\gybuliga\\templates\\teamDetail.tpl',
      1 => 1509898056,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a78e1dc7ce561_28505738 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_160455a78e1dc6805f6_01075571', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "@layout.tpl");
}
/* {block 'main'} */
class Block_160455a78e1dc6805f6_01075571 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_160455a78e1dc6805f6_01075571',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container">
        <div class="row center-block">
            <div class="col-lg-4" style="padding: 10px auto">
                <img src="<?php echo $_smarty_tpl->tpl_vars['teamLogo']->value;?>
" class="img-responsive" style="width: 300px; padding: 0 auto">
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="page-header">
                        <h1><?php echo $_smarty_tpl->tpl_vars['teamName']->value;?>
</h1>
                    </div>
                    <div class="col-lg-12">
                        <?php echo $_smarty_tpl->tpl_vars['teamText']->value;?>

                    </div>
                </div>
            </div>
        </div>

        <table class="table table-striped">
            <thead class=>
            <tr>
                <th>#</th><th>Jméno</th><th>Počet gólů</th><th>Kontakt</th>
            </tr>
            </thead>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['roster']->value, 'player', false, NULL, 'roster', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['player']->value) {
?>
                <tr>
                    <td class="col-md-2"><?php echo $_smarty_tpl->tpl_vars['player']->value->number;?>
</td>
                    <td class="col-lg-4"><?php echo $_smarty_tpl->tpl_vars['player']->value->getName();?>
</td>
                    <td class="col-lg-3"><?php echo $_smarty_tpl->tpl_vars['player']->value->getGoalsForCurrentTeam();?>
</td>
                    <td class="col-lg-3"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['player']->value->contact)===null||$tmp==='' ? "----" : $tmp);?>
</td>
                </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

        </table>
    </div>
<?php
}
}
/* {/block 'main'} */
}
