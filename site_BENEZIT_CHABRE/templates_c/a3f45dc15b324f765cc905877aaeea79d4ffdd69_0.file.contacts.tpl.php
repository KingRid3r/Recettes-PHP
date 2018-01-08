<?php
/* Smarty version 3.1.30, created on 2018-01-08 08:14:49
  from "C:\xampp\htdocs\Recettes-PHP\site\application\views\modules\contacts.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a531a69528d23_84066876',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3f45dc15b324f765cc905877aaeea79d4ffdd69' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Recettes-PHP\\site\\application\\views\\modules\\contacts.tpl',
      1 => 1515395659,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_5a531a69528d23_84066876 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_119715a531a69523364_33660842', "title");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8325a531a69526e15_21524460', "content");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "title"} */
class Block_119715a531a69523364_33660842 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

Contact
<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_8325a531a69526e15_21524460 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="row">
  <div class="col-sm-6 col-md-6">
    <div class="thumbnail">
      <h2 class="caption">Nous Contacter</h2>
      <img src="asset/images/groupe.jpg" alt="photo de groupe">
      <br>
      <a class="btn btn-primary center-block" href="mailto:recette_etudiante@yopmail.com">GO ! </a>
    </div>
  </div>

  <div class="col-sm-6 col-md-6">
    <div class="thumbnail">
      <h2 class="caption">Qui sommes-nous ?</h2>
      <br />
      <div class="row">
        <div class="col-sm-6 col-md-3">
          <img style="width: 100%; margin-left: 12px" src="asset/images/luca.png" alt="mangatar luca">
        </div>
        <div class="col-sm-6 col-md-7">
          <h3>Luca BENEZIT</h3>
          <p style="color: orange">Ingénieur Web</p>
          <small>A étudié à l'IUT d'Arles</small>
        </div>
        <div class="col-sm-6 col-md-2">
          <a href="http://www.facebook.com/luca.benezit"><img style="width: 70%; margin-top: 35px; margin-right: 30px" src="asset/images/logo_fb.png" alt="logo Facebook"></a>
        </div>
      </div>
      <br />
      <div class="row">
        <div class="col-sm-6 col-md-3">
          <img style="width: 100%; margin-left: 12px" src="asset/images/mathieu.png" alt="mangatar mathieu">
        </div>
        <div class="col-sm-6 col-md-7">
          <h3>Mathieu CHABRE</h3>
          <p style="color: orange">Ingénieur Web</p>
          <small>A étudié à l'IUT d'Arles</small>
        </div>
        <div class="col-sm-6 col-md-2">
          <a href="http://www.facebook.com/mathieu.chabre"><img style="width: 70%; margin-top: 35px; margin-right: 30px" src="asset/images/logo_fb.png" alt="logo Facebook"></a>
        </div>
      </div>
      <br />
    </div>
  </div>
</div>
<?php
}
}
/* {/block "content"} */
}
