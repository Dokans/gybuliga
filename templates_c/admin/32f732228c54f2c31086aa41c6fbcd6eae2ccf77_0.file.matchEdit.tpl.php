<?php
/* Smarty version 3.1.31, created on 2018-02-23 21:53:50
  from "D:\wamp64\www\gybuliga\templates\admin\matchEdit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a908d6ef07385_84896819',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32f732228c54f2c31086aa41c6fbcd6eae2ccf77' => 
    array (
      0 => 'D:\\wamp64\\www\\gybuliga\\templates\\admin\\matchEdit.tpl',
      1 => 1519422825,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a908d6ef07385_84896819 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7985a908d6e8886f2_14613833', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "@layout.tpl");
}
/* {block 'content'} */
class Block_7985a908d6e8886f2_14613833 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7985a908d6e8886f2_14613833',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="card-header text-center">
        <h1>Zápas: <?php echo $_smarty_tpl->tpl_vars['homeTeam']->value['name'];?>
 <?php echo (($tmp = @$_smarty_tpl->tpl_vars['match']->value->getHomeGoals())===null||$tmp==='' ? "0" : $tmp);?>
 vs <?php echo $_smarty_tpl->tpl_vars['match']->value->getAwayGoals();?>
 <?php echo $_smarty_tpl->tpl_vars['awayTeam']->value['name'];?>
</h1>
    </div>
    <div class="row">
        <?php if (isset($_smarty_tpl->tpl_vars['success']->value)) {?>
            <div class="text-center" style="background-color: #26c738">
                <?php echo $_smarty_tpl->tpl_vars['success']->value;?>

            </div>
        <?php } elseif (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
            <div class="text-center" style="background-color: red">
                <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

            </div>
        <?php }?>
    </div>
    <div class="row">
        <form method="post" action="/gadmin/matches/edit/<?php echo $_smarty_tpl->tpl_vars['matchID']->value;?>
">
            <div class="col-md-2"></div>
            <div class="col-md-2">Změnit výsledek</div>
            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['matchID']->value;?>
" name="matchID">
            <div class="col-md-4">
                <select name="result" title="Výsledek">
                    <option value="1" <?php if ($_smarty_tpl->tpl_vars['result']->value == 1) {?>selected<?php }?>>Výhra domácích</option>
                    <option value="3" <?php if ($_smarty_tpl->tpl_vars['result']->value == 3) {?>selected<?php }?>>Výhra hostů</option>
                    <option value="2" <?php if ($_smarty_tpl->tpl_vars['result']->value == 2) {?>selected<?php }?>>Výhra domácích v prodloužení</option>
                    <option value="4" <?php if ($_smarty_tpl->tpl_vars['result']->value == 4) {?>selected<?php }?>>Výhra hostů v prodloužení</option>
                    <option value="0" <?php if ($_smarty_tpl->tpl_vars['result']->value == 0) {?>selected<?php }?>>Neodehráno</option>
                    <option value="5" <?php if ($_smarty_tpl->tpl_vars['result']->value == 5) {?>selected<?php }?>>Kontumace</option>
                </select>
            </div>
            <div class="col-md-2">
                <input type="submit" value="Změnit">
            </div>
            <div class="col-md-2"></div>
        </form>

    </div>
    <form method="post" action="/gadmin/matches/edit/<?php echo $_smarty_tpl->tpl_vars['matchID']->value;?>
">
        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['matchID']->value;?>
" name="matchID">
        <div class="row" style="padding-top: 10px; margin-top: 10px; border-top: solid black 0.5px">
            <div class="col-lg-3 col-md-6 text-center">
                <label for="mvpHome">Nejlepší hráč domácích</label>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <select id="mvpHome" name="mvpHome" required>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['homeTeam']->value['players'], 'player');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['player']->value) {
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['player']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['player']->value->id == $_smarty_tpl->tpl_vars['match']->value->HomeMVP) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['player']->value->name;?>
 <?php echo $_smarty_tpl->tpl_vars['player']->value->surname;?>
</option>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                    <?php if ($_smarty_tpl->tpl_vars['match']->value->HomeMVP == '') {?>
                        <option selected value="">-------</option>
                    <?php }?>
                </select>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <label for="mvpAway">Nejlepší hráč hosté</label>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <select id="mvpHome" name="mvpAway" required>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['awayTeam']->value['players'], 'player');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['player']->value) {
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['player']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['player']->value->id == $_smarty_tpl->tpl_vars['match']->value->AwayMVP) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['player']->value->name;?>
 <?php echo $_smarty_tpl->tpl_vars['player']->value->surname;?>
</option>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                    <?php if ($_smarty_tpl->tpl_vars['match']->value->AwayMVP == '') {?>
                        <option selected value="">-------</option>
                    <?php }?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <input type="submit" value="Uložit MVP">
            </div>
        </div>
    </form>
    <div class="row" style="padding-top: 10px; margin-top: 10px; border-top: solid black 0.5px">
        <div class="col-lg-6">
            <h2 class="text-center">Domácí - <?php echo $_smarty_tpl->tpl_vars['homeTeam']->value['name'];?>
</h2>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['homeTeam']->value['strikers'], 'striker');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['striker']->value) {
?>
                <div class="row">
                    <form action="/gadmin/matches/edit/<?php echo $_smarty_tpl->tpl_vars['matchID']->value;?>
" method="post">
                        <div class="col-lg-4">
                            <input type="hidden" name="goalID" value="<?php echo $_smarty_tpl->tpl_vars['striker']->value['goalID'];?>
">
                            <input type="hidden" name="playerID" value="<?php echo $_smarty_tpl->tpl_vars['striker']->value['playerID'];?>
">
                            <input type="hidden" name="matchID" value="<?php echo $_smarty_tpl->tpl_vars['striker']->value['matchID'];?>
">
                            <?php echo $_smarty_tpl->tpl_vars['striker']->value['name'];?>
 <b><?php echo $_smarty_tpl->tpl_vars['striker']->value['surname'];?>
</b>
                        </div>
                        <div class="col-lg-4">
                            <input type="number" value="<?php echo $_smarty_tpl->tpl_vars['striker']->value['goals'];?>
" name="goals" title="goals">
                        </div>
                        <div class="col-lg-2">
                            <input type="submit" value="Změnit">
                        </div>
                        <div class="col-lg-2">
                                <span class="icon-close">
                                    Smazat
                                </span>
                        </div>
                    </form>
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

            <div class="row" style="padding-top: 10px; margin-top: 10px; border-top: solid black 0.5px">
                <div class="col-lg-12 border-dark"></div>
            </div>
            <form action="/gadmin/matches/edit/<?php echo $_smarty_tpl->tpl_vars['matchID']->value;?>
" method="post">
                <div class="row">
                    <div class="col-lg-4">
                        <input type="hidden" name="teamID" value="<?php echo $_smarty_tpl->tpl_vars['homeTeam']->value['id'];?>
">
                        <input type="hidden" name="matchID" value="<?php echo $_smarty_tpl->tpl_vars['matchID']->value;?>
">
                        <select name="playerID" title="Hráč">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['homeTeam']->value['players'], 'player');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['player']->value) {
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['player']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['player']->value->name;?>
 <?php echo $_smarty_tpl->tpl_vars['player']->value->surname;?>
</option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                        </select>
                    </div>
                    <div class="col-lg-4">
                        <input type="number" name="goals" title="goals" value="1">
                    </div>
                    <div class="col-lg-4">
                        <input type="submit" value="Přidat">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <h2 class="text-center">Hosté - <?php echo $_smarty_tpl->tpl_vars['awayTeam']->value['name'];?>
</h2>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['awayTeam']->value['strikers'], 'striker');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['striker']->value) {
?>
                <div class="row" >
                    <form action="/gadmin/matches/edit/<?php echo $_smarty_tpl->tpl_vars['matchID']->value;?>
" method="post">
                        <div class="col-lg-4">
                            <input type="hidden" name="goalID" value="<?php echo $_smarty_tpl->tpl_vars['striker']->value['goalID'];?>
">
                            <input type="hidden" name="playerID" value="<?php echo $_smarty_tpl->tpl_vars['striker']->value['playerID'];?>
">
                            <input type="hidden" name="matchID" value="<?php echo $_smarty_tpl->tpl_vars['striker']->value['matchID'];?>
">
                            <?php echo $_smarty_tpl->tpl_vars['striker']->value['name'];?>
 <b><?php echo $_smarty_tpl->tpl_vars['striker']->value['surname'];?>
</b>
                        </div>
                        <div class="col-lg-4">
                            <input type="number" value="<?php echo $_smarty_tpl->tpl_vars['striker']->value['goals'];?>
" name="goals" title="goals">
                        </div>
                        <div class="col-lg-2">
                            <input type="submit" value="Změnit">
                        </div>
                        <div class="col-lg-2">
                                <span class="icon-close">
                                    Smazat
                                </span>
                        </div>
                    </form>
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

            <div class="row" style="padding-top: 10px; margin-top: 10px; border-top: solid black 0.5px">
                <div class="col-lg-12"></div>
            </div>
            <form action="/gadmin/matches/edit/<?php echo $_smarty_tpl->tpl_vars['matchID']->value;?>
" method="post">
                <div class="row">
                    <div class="col-lg-4">
                        <input type="hidden" name="teamID" value="<?php echo $_smarty_tpl->tpl_vars['awayTeam']->value['id'];?>
">
                        <input type="hidden" name="matchID" value="<?php echo $_smarty_tpl->tpl_vars['matchID']->value;?>
">
                        <select name="playerID" title="Hráč">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['awayTeam']->value['players'], 'player');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['player']->value) {
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['player']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['player']->value->name;?>
 <?php echo $_smarty_tpl->tpl_vars['player']->value->surname;?>
</option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                        </select>
                    </div>
                    <div class="col-lg-4">
                        <input type="number" name="goals" title="goals" value="1">
                    </div>
                    <div class="col-lg-4">
                        <input type="submit" value="Přidat">
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php
}
}
/* {/block 'content'} */
}
