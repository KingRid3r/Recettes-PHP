<?php
/* Smarty version 3.1.30, created on 2018-01-08 00:19:22
  from "C:\xampp\htdocs\Recettes-PHP\site\application\views\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a52aafa512e76_29363208',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5e64d940c500af059e67716708fd00e8f3a6dd0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Recettes-PHP\\site\\application\\views\\layout.tpl',
      1 => 1515367062,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:application/views/layout/layout_entete.inc.tpl' => 1,
    'file:application/views/nav/nav_membre.inc.tpl' => 1,
    'file:application/views/nav/nav.inc.tpl' => 1,
    'file:application/views/layout/layout_pied.inc.tpl' => 1,
  ),
),false)) {
function content_5a52aafa512e76_29363208 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="asset/css/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="asset/css/style.css">
		<link rel="shortcut icon" href="asset/images/puces.png">
		<title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_299475a52aafa4caf20_63846439', "title");
?>
</title>
		<meta name="author" content="Luca BENEZIT, Mathieu CHABRE" />
		<meta name="description" content="Projet PHP, Recette Etudiante" />
		<meta name="keywords" content="recette etudiante, projet PHP, IUT, Arles" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	</head>

	<body>
		<header>
			<?php $_smarty_tpl->_subTemplateRender("file:application/views/layout/layout_entete.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		</header>
		<div class="container">
			<?php if (isset($_SESSION['MonID'])) {?>
				<?php $_smarty_tpl->_subTemplateRender("file:application/views/nav/nav_membre.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

			<?php } else { ?>
				<?php $_smarty_tpl->_subTemplateRender("file:application/views/nav/nav.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

			<?php }?>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_310005a52aafa50a0f4_89168462', "content");
?>

		</div>
		<footer>
			<?php $_smarty_tpl->_subTemplateRender("file:application/views/layout/layout_pied.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		</footer>
	</body>


</html>
<?php }
/* {block "title"} */
class Block_299475a52aafa4caf20_63846439 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Recette étudiante<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_310005a52aafa50a0f4_89168462 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Erreur<?php
}
}
/* {/block "content"} */
}
