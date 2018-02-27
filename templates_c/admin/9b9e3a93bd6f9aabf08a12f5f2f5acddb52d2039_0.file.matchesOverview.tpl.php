<?php
/* Smarty version 3.1.31, created on 2018-02-20 22:07:05
  from "D:\wamp64\www\gybuliga\templates\admin\matchesOverview.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a8c9c0983bc86_85506054',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b9e3a93bd6f9aabf08a12f5f2f5acddb52d2039' => 
    array (
      0 => 'D:\\wamp64\\www\\gybuliga\\templates\\admin\\matchesOverview.tpl',
      1 => 1519164423,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a8c9c0983bc86_85506054 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_319425a8c9c0935ea24_07701102', 'head');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_93515a8c9c0939af61_75566946', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "@layout.tpl");
}
/* {block 'head'} */
class Block_319425a8c9c0935ea24_07701102 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_319425a8c9c0935ea24_07701102',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="/js/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="css/jquery-ui.css">
    <?php echo '<script'; ?>
>
        $(function () {
            $("#tabs").tabs();
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'head'} */
/* {block 'content'} */
class Block_93515a8c9c0939af61_75566946 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_93515a8c9c0939af61_75566946',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form action="/gadmin/matches" method="post">
        <input type="hidden" value="<?php if (isset($_smarty_tpl->tpl_vars['selectedSeason']->value)) {
echo $_smarty_tpl->tpl_vars['selectedSeason']->value;
} else {
echo $_smarty_tpl->tpl_vars['mainSeason']->value['id'];
}?>"
        <label id="season">Vyber sezónu</label><select name="season" id="season" onchange="this.form.submit()">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['seasons']->value, 'season');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['season']->value) {
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['season']->value['id'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['selectedSeason']->value)) {
if ($_smarty_tpl->tpl_vars['season']->value['id'] == $_smarty_tpl->tpl_vars['selectedSeason']->value) {?>selected<?php }
} else {
if ($_smarty_tpl->tpl_vars['season']->value['id'] == $_smarty_tpl->tpl_vars['mainSeason']->value['id']) {?>selected<?php }
}?>><?php echo $_smarty_tpl->tpl_vars['season']->value['name'];?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

        </select>
        <input type="submit" class="hidden">
    </form>
    <div id="tabs">
        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rounds']->value, 'round');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['round']->value) {
?>
                <li><a href="#<?php echo $_smarty_tpl->tpl_vars['round']->value['roundID'];?>
"> <?php echo $_smarty_tpl->tpl_vars['round']->value['from'];?>
 - <?php echo $_smarty_tpl->tpl_vars['round']->value['to'];?>
</a></li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

        </ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rounds']->value, 'round');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['round']->value) {
?>
            <div id="<?php echo $_smarty_tpl->tpl_vars['round']->value['roundID'];?>
">
                <table class="table-bordered">
                    <thead>
                    <tr>
                        <th>Domácí</th>
                        <th colspan="3"></th>
                        <th>Hosté</th>
                        <th>Výsledek</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['round']->value['matches'], 'match');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['match']->value) {
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['match']->value->homeTeam->name;?>
</td>
                            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['match']->value->getHomeGoals())===null||$tmp==='' ? "0" : $tmp);?>
</td>
                            <td>-</td>
                            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['match']->value->getAwayGoals())===null||$tmp==='' ? "0" : $tmp);?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['match']->value->awayTeam->name;?>
</td>
                            <td><a href="/gadmin/matches/edit/<?php echo $_smarty_tpl->tpl_vars['match']->value->matchID;?>
">Editovat</a></td>
                        </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                    </tbody>
                </table>
            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    </div>
<?php
}
}
/* {/block 'content'} */
}
