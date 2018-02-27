<?php
/* Smarty version 3.1.31, created on 2018-02-20 14:16:08
  from "D:\wamp64\www\gybuliga\templates\admin\playerAdd.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a8c2da88dbdf8_66666697',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bb76b38206d72866e7cafd18b6ca9182dac1c23' => 
    array (
      0 => 'D:\\wamp64\\www\\gybuliga\\templates\\admin\\playerAdd.tpl',
      1 => 1519136167,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a8c2da88dbdf8_66666697 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_316875a8c2da879dc11_53851870', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "@layout.tpl");
}
/* {block 'content'} */
class Block_316875a8c2da879dc11_53851870 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_316875a8c2da879dc11_53851870',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <form method="post" class="form-group" action="/gadmin/players/add">
        <label for="name">Jméno: </label><input id="name" name="player[name]" type="text" required><br>
        <label for="surname">Příjmení: </label><input id="surname" name="player[surname]" type="text" required><br>
        <label for="number">Číslo: </label><input id="number" name="player[number]" type="number" required><br>
        <label for="class">Třída: </label><input id="class" name="player[class]" type="text" required><br>
        <label for="birthday">Datum narození: </label><input id="birthday" name="player[birthday]" type="date"><br>
        <label for="team">Tým: </label><select id="team" name="player[current_team]" required>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['teams']->value, 'team');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['team']->value) {
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['team']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['team']->value['name'];?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

        </select><br>
        <input type="submit" value="Přidat hráče">
    </form>
<?php
}
}
/* {/block 'content'} */
}
