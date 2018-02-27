<?php
/* Smarty version 3.1.31, created on 2018-02-25 12:18:57
  from "D:\wamp64\www\gybuliga\templates\admin\playerEdit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a92a9b13ba6a1_95912838',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb32bf19f2387800a76f91edf6ad5f1a0babe0a9' => 
    array (
      0 => 'D:\\wamp64\\www\\gybuliga\\templates\\admin\\playerEdit.tpl',
      1 => 1519561125,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a92a9b13ba6a1_95912838 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_230705a92a9b0e72753_06189999', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "@layout.tpl");
}
/* {block 'content'} */
class Block_230705a92a9b0e72753_06189999 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_230705a92a9b0e72753_06189999',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1>Uprava hráče - <?php echo $_smarty_tpl->tpl_vars['player']->value->name;?>
 <b><?php echo $_smarty_tpl->tpl_vars['player']->value->surname;?>
</b></h1>
    <form method="post" action="/gadmin/players/edit/<?php echo $_smarty_tpl->tpl_vars['player']->value->id;?>
">
        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['player']->value->id;?>
" name="playerId">
        <div class="row">
            <div class="col-lg-6"><label for="name">Jméno:</label></div>
            <div class="col-lg-6"><input id="name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['player']->value->name;?>
" type="text"></div>
        </div>
        <div class="row">
            <div class="col-lg-6"><label for="surname">Příjmení</label></div>
            <div class="col-lg-6"><input type="text" id="surname" name="surname" value="<?php echo $_smarty_tpl->tpl_vars['player']->value->surname;?>
"></div>
        </div>
        <div class="row">
            <div class="col-lg-6"><label for="team">Tým</label></div>
            <div class="col-lg-6">
                <select id="team" name="team">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['teams']->value, 'team');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['team']->value) {
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['team']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['player']->value->currentTeam->id == $_smarty_tpl->tpl_vars['team']->value['id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['team']->value['name'];?>
</option>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6"><label for="class">Třída</label></div>
            <div class="col-lg-6"><input id="class" name="class" value="<?php echo $_smarty_tpl->tpl_vars['player']->value->class;?>
" type="text"></div>
        </div>
        <div class="row">
            <div class="col-lg-6"><label for="contact">Kontakt</label></div>
            <div class="col-lg-6"><input id="contact" name="contact" value="<?php echo $_smarty_tpl->tpl_vars['player']->value->contact;?>
" type="text"></div>
        </div>
        <div class="row">
            <div class="col-lg-6"><label for="number">Číslo</label></div>
            <div class="col-lg-6"><input id="number" name="number" value="<?php echo $_smarty_tpl->tpl_vars['player']->value->number;?>
" type="number"></div>
        </div>
        <div class="row">
            <div class="col-sm12 text-center">
                <input type="submit" name="edit" value="Upravit hráče">
            </div>
        </div>
    </form>
<?php
}
}
/* {/block 'content'} */
}
