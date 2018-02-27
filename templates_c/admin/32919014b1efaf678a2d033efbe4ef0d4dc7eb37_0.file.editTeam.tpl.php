<?php
/* Smarty version 3.1.31, created on 2018-02-26 14:07:26
  from "D:\wamp64\www\gybuliga\templates\admin\editTeam.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a94149ec306d0_92977892',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32919014b1efaf678a2d033efbe4ef0d4dc7eb37' => 
    array (
      0 => 'D:\\wamp64\\www\\gybuliga\\templates\\admin\\editTeam.tpl',
      1 => 1519654045,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a94149ec306d0_92977892 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_25455a94149ea4d687_79485775', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "@layout.tpl");
}
/* {block 'content'} */
class Block_25455a94149ea4d687_79485775 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_25455a94149ea4d687_79485775',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1>Uprava týmu - <?php echo $_smarty_tpl->tpl_vars['team']->value->name;?>
</h1>
    <form method="post" action="/gadmin/teams/edit/<?php echo $_smarty_tpl->tpl_vars['team']->value->id;?>
">
        <div class="row">
            <div class="col-lg-6"><label for="name">Jméno:</label></div>
            <div class="col-lg-6"><input id="name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['team']->value->name;?>
" type="text"></div>
        </div>
        <div class="row">
            <div class="col-lg-3"><label for="active-t">Aktivní:</label></div>
            <div class="col-lg-3"><input id="active-t" name="active" value="1" type="radio" <?php if ($_smarty_tpl->tpl_vars['team']->value->active == 1) {?>checked<?php }?>></div>
            <div class="col-lg-3"><label for="active-f">Neaktivní:</label></div>
            <div class="col-lg-3"><input id="active-f" name="active" value="0" type="radio" <?php if ($_smarty_tpl->tpl_vars['team']->value->active == 0) {?>checked<?php }?>></div>
        </div>
        <div class="row">
            <div class="col-lg-6"><label for="capitan">Kapitán</label></div>
            <div class="col-lg-6">
                <select id="capitan" name="capitan">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['team']->value->getRoster(), 'player');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['player']->value) {
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['player']->value->id;?>
"
                                <?php if ($_smarty_tpl->tpl_vars['player']->value->id == $_smarty_tpl->tpl_vars['team']->value->capitan) {?>selected <?php $_smarty_tpl->_assignInScope('capitan', 1);
}?>><?php echo $_smarty_tpl->tpl_vars['player']->value->name;?>
 <?php echo $_smarty_tpl->tpl_vars['player']->value->surname;?>
</option>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                    <?php if (!isset($_smarty_tpl->tpl_vars['capitan']->value)) {?>
                        <option selected value="">----</option>
                    <?php }?>
                </select>
            </div>
        </div>
        <div class="row text-center">
            <label for="description" style="font-size: larger; margin-top: 10px">Popis</label>
        </div>
        <div class="row" style="margin-top: 10px">
            <textarea name="description" id="description">
                <?php echo $_smarty_tpl->tpl_vars['team']->value->getTeamDescription();?>

            </textarea>
        </div>
        <!-- Include external JS libs. -->
        <?php echo '<script'; ?>
 src='https://cdn.tinymce.com/4/tinymce.min.js'><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
            tinymce.init({
                selector: '#description'
            });
        <?php echo '</script'; ?>
>
        <div class="row" style="margin-top: 30px">

        </div>

        <div class="row">
            <div class="col-sm12 text-center">
                <input type="submit" name="edit" value="Upravit tým">
            </div>
        </div>
    </form>
<?php
}
}
/* {/block 'content'} */
}
