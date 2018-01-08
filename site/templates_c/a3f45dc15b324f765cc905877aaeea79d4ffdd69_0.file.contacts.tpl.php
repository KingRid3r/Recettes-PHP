<?php
/* Smarty version 3.1.30, created on 2018-01-08 00:58:34
  from "C:\xampp\htdocs\Recettes-PHP\site\application\views\modules\contacts.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a52b42a405553_26315311',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3f45dc15b324f765cc905877aaeea79d4ffdd69' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Recettes-PHP\\site\\application\\views\\modules\\contacts.tpl',
      1 => 1515367063,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_5a52b42a405553_26315311 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_293835a52b42a3f55a0_99434789', "title");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_125325a52b42a400198_29658455', "content");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "title"} */
class Block_293835a52b42a3f55a0_99434789 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

Acceuil
<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_125325a52b42a400198_29658455 extends Smarty_Internal_Block
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
