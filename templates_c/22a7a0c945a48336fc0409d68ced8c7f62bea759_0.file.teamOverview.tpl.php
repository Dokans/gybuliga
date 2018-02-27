<?php
/* Smarty version 3.1.31, created on 2018-02-25 14:23:12
  from "D:\wamp64\www\gybuliga\templates\teamOverview.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a92c6d084c166_29901130',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22a7a0c945a48336fc0409d68ced8c7f62bea759' => 
    array (
      0 => 'D:\\wamp64\\www\\gybuliga\\templates\\teamOverview.tpl',
      1 => 1519568519,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a92c6d084c166_29901130 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_176425a92c6d034cb19_11689322', 'scripts');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_214675a92c6d037a073_10033428', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "@layout.tpl");
}
/* {block 'scripts'} */
class Block_176425a92c6d034cb19_11689322 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_176425a92c6d034cb19_11689322',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'scripts'} */
/* {block 'main'} */
class Block_214675a92c6d037a073_10033428 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_214675a92c6d037a073_10033428',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-2"><?php echo $_smarty_tpl->tpl_vars['description']->value['title'];?>
</h1>
            <p class="lead"><?php echo $_smarty_tpl->tpl_vars['description']->value['content'];?>
</p>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th></th>
            <th>Jméno</th>
            <th>Kapitán</th>
            <th>Kontakt</th>
        </tr>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['teams']->value, 'team', false, NULL, 'teams', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['team']->value) {
?>
            <tr onclick="window.document.location='<?php echo $_smarty_tpl->tpl_vars['team']->value['urlLink'];?>
';">
                <th><img src="<?php echo $_smarty_tpl->tpl_vars['team']->value['logo'];?>
" class="img-thumbnail" style="width: 60px">
                </th>
                <td><?php echo $_smarty_tpl->tpl_vars['team']->value['name'];?>
</td>
                <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['team']->value['capitan']->surname)===null||$tmp==='' ? "------" : $tmp);?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['team']->value['capitan']->contact;?>
</td>
            </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

        </tbody>
    </table>
    <?php echo '<script'; ?>
 src="js/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'main'} */
}
