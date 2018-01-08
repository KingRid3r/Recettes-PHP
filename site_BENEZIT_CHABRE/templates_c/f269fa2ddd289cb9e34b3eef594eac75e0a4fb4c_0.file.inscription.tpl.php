<?php
/* Smarty version 3.1.30, created on 2018-01-04 17:14:02
  from "C:\xampp\htdocs\Recettes-PHP\site\application\views\modules\inscription.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4e52ca7a5164_79418709',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f269fa2ddd289cb9e34b3eef594eac75e0a4fb4c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Recettes-PHP\\site\\application\\views\\modules\\inscription.tpl',
      1 => 1515081085,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_5a4e52ca7a5164_79418709 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_109665a4e52ca78c082_17906530', "title");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_85355a4e52ca7a0bf7_35793928', "content");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "title"} */
class Block_109665a4e52ca78c082_17906530 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

Inscription
<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_85355a4e52ca7a0bf7_35793928 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
  <?php if ($_smarty_tpl->tpl_vars['data']->value['reponse'] != false) {?>
    <?php if ($_smarty_tpl->tpl_vars['data']->value['reponse'] == "ok") {?>
      <p class="alert alert-success">Compte créé avec succés</p>
    <?php } else { ?>
      <p class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['data']->value['reponse'];?>
</p>
    <?php }?>
  <?php }?>
  <h2 style="text-align: center;">Inscription</h2>
  <br />
  <p class="center-block" style="text-align: justify; width: 75%">Inscrivez-vous ! Dès maintenant et en quelques clics, inscrivez-vous gratuitement pour pouvoir ajouter et commenter des recettes. Pour s'inscrire c'est très simple : il vous suffit de remplir le formulaire ci-dessous et de vous laisser guider. </p>
  <br />
  <form class="form-horizontal" method="POST" id="formInscription" action="" enctype="multipart/form-data">
    <div class="form-group">
      <label class="control-label col-sm-2" for="nom">Nom :</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrez votre nom" required>
        </div>
      </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="prenom">Prénom :</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Entrez votre prenom" required>
        </div>
      </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="nom">Email :</label>
        <div class="col-sm-4">
          <input type="email" class="form-control" id="email" name="email" placeholder="Entrez votre email" required>
        </div>
      </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="login">Login :</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="login" name="login" placeholder="Entrez votre login" required>
        </div>
      </div>
    <div class="form-group">
          <label class="control-label col-sm-2" for="mdp">Mot de passe :</label>
        <div class="col-sm-4">
          <input type="password" class="form-control" id="mdp" name="mdp" placeholder="Entrez votre mot de passe" required>
          </div>
      </div>
    <div class="form-group">
          <label class="control-label col-sm-2" for="mdp2">Confirmer votre mot de passe :</label>
        <div class="col-sm-4">
          <input type="password" class="form-control" id="mdp2" name="mdp2" placeholder="Confirmez votre mot de passe" required>
          </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="avatar">Avatar :</label>
        <div class="col-sm-4">
          <input type="file" accept="image/*" class="form-control" id="avatar" name="avatar" required>
        </div>
      </div>
      <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Envoyer</button>
          </div>
      </div>
    </form>
</div>
<?php
}
}
/* {/block "content"} */
}
