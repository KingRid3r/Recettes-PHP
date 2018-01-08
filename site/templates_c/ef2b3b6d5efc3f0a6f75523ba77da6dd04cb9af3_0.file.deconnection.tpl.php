<?php
/* Smarty version 3.1.30, created on 2018-01-08 00:51:49
  from "C:\xampp\htdocs\Recettes-PHP\site\application\views\modules\deconnection.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a52b295ec1222_54649856',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef2b3b6d5efc3f0a6f75523ba77da6dd04cb9af3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Recettes-PHP\\site\\application\\views\\modules\\deconnection.tpl',
      1 => 1515367063,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_5a52b295ec1222_54649856 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_32985a52b295ebda37_84494491', "title");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21635a52b295ec0333_97720203', "content");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "title"} */
class Block_32985a52b295ebda37_84494491 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

Acceuil
<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_21635a52b295ec0333_97720203 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<p class="alert alert-success">Deconnection effectué</p>
<?php
}
}
/* {/block "content"} */
}
