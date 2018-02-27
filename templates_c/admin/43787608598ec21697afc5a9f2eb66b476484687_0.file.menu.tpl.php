<?php
/* Smarty version 3.1.31, created on 2018-02-20 22:44:07
  from "D:\wamp64\www\gybuliga\templates\admin\menu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a8ca4b7666ea4_16919768',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43787608598ec21697afc5a9f2eb66b476484687' => 
    array (
      0 => 'D:\\wamp64\\www\\gybuliga\\templates\\admin\\menu.tpl',
      1 => 1519166644,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a8ca4b7666ea4_16919768 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_209355a8ca4b75ab1b8_87117491', 'menu');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "@layout.tpl");
}
/* {block 'menu'} */
class Block_209355a8ca4b75ab1b8_87117491 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_209355a8ca4b75ab1b8_87117491',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <menu>
        <ul>
            <li><a href="/gadmin/">Hlavní stránka</a></li>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menuItems']->value, 'menuItem', false, NULL, 'menu', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['menuItem']->value) {
?>
                <li><a href="/gadmin/<?php echo $_smarty_tpl->tpl_vars['menuItem']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['menuItem']->value['name'];?>
</a></li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

            <li><a href="/gadmin/user/logout">Odhlášení</a></li>
        </ul>
    </menu>
<?php
}
}
/* {/block 'menu'} */
}
