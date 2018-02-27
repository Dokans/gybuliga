<?php
/* Smarty version 3.1.31, created on 2018-02-27 20:12:12
  from "D:\wamp64\www\gybuliga\templates\admin\entryLogin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a95bb9c19f533_46739857',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98a6d5b839a4509a3b84cc471286c99b21d3673a' => 
    array (
      0 => 'D:\\wamp64\\www\\gybuliga\\templates\\admin\\entryLogin.tpl',
      1 => 1519762324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a95bb9c19f533_46739857 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
    <title>Login</title>
</head>
<body>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:700,600' rel='stylesheet' type='text/css'>
<link href="css/login.css" rel="stylesheet">
<?php echo '<script'; ?>
 rel="script" src="js/login.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 rel="script" src="js/jquery-ui.js"><?php echo '</script'; ?>
>
<form method="post" action="http://gybuliga.dev/gadmin/">
    <div class="box">
        <input type="text" name="[login]username" class="email" placeholder="Přihlašovací jméno">
        <input type="password" name="[login]password" class="password" placeholder="Heslo">
        <div class="" style="text-align: center; margin: 0 auto">
            <input type="submit" value="Přihlásit" class="btn">
        </div>
    </div> <!-- End Box -->

</form>
</body>
</html>
<?php }
}
