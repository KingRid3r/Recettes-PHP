<?php
/* Smarty version 3.1.30, created on 2018-01-04 13:07:57
  from "C:\xampp\htdocs\Recettes-PHP\site\application\views\modules\erreur404.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4e191d21aad8_07794666',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9cf1a5e57f2ba5fbcc9b14ead35a8aa7c4e2b74' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Recettes-PHP\\site\\application\\views\\modules\\erreur404.tpl',
      1 => 1515067601,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_5a4e191d21aad8_07794666 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_141415a4e191d2171c6_20655247', "title");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_192505a4e191d219f72_78246563', "content");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "title"} */
class Block_141415a4e191d2171c6_20655247 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

Erreur 404
<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_192505a4e191d219f72_78246563 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<p> Erreur 404<p>
<?php
}
}
/* {/block "content"} */
}
