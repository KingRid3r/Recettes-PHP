<?php
/* Smarty version 3.1.30, created on 2018-01-07 23:35:24
  from "C:\xampp\htdocs\Recettes-PHP\site\application\views\modules\erreur404.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a52a0ac8db620_31957705',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9cf1a5e57f2ba5fbcc9b14ead35a8aa7c4e2b74' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Recettes-PHP\\site\\application\\views\\modules\\erreur404.tpl',
      1 => 1515364521,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_5a52a0ac8db620_31957705 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_97245a52a0ac8d65c1_82732110', "title");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_93495a52a0ac8da047_06480126', "content");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "title"} */
class Block_97245a52a0ac8d65c1_82732110 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

Erreur 404
<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_93495a52a0ac8da047_06480126 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<img id="erreur_404" class="center-block img-responsive texte-center" style="center" src="asset/images/er404.jpg" alt="erreur 404" />
<?php
}
}
/* {/block "content"} */
}
