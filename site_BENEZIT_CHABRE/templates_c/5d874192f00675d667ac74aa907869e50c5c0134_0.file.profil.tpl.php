<?php
/* Smarty version 3.1.30, created on 2018-01-08 02:15:02
  from "C:\xampp\htdocs\Recettes-PHP\site\application\views\modules\profil.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a52c6160cd033_73662332',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d874192f00675d667ac74aa907869e50c5c0134' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Recettes-PHP\\site\\application\\views\\modules\\profil.tpl',
      1 => 1515374100,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_5a52c6160cd033_73662332 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_128915a52c6160b29e7_87478651', "title");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_232885a52c6160c8399_47794224', "content");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "title"} */
class Block_128915a52c6160b29e7_87478651 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo $_SESSION['MonLogin'];?>

<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_232885a52c6160c8399_47794224 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="col-sm-2" id="mySidebar">
  <div class="row">
    <nav class="nav-sidebar sidebar">
      <ul class="nav">
        <li class="active"><a href="compte.php">Informations personnelles</a></li>
        <li><a href="gerer_recettes.php">Gerer les recettes</a></li>
        <li><a href="suppression.php">Supprimer le compte</a></li>
      </ul>
    </nav>
  </div>
</div>



<div class="container" id="infos_persos">
  <?php if (isset($_smarty_tpl->tpl_vars['data']->value['ok'])) {?>
    <p class="alert alert-success">Modification effectué avec succés</p>
  <?php }?>
  <?php if (isset($_smarty_tpl->tpl_vars['data']->value['reponse'])) {?>
    <p class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['data']->value['reponse'];?>
</p>
  <?php }?>
  <img class="caption" src="media/<?php echo $_smarty_tpl->tpl_vars['data']->value['user'][3];?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['user'][4];?>
" alt="avatar" style="height: 215px">
  <h2 style="text-align: center;">Informations personnelles</h2>
  <br/>
  <p class="center-block" style="text-align: justify; width: 65%">Bienvenue sur les parametres de votre profil. <br/> Vous pouvez modifier vos informations personnelles juste en dessous. </p>
  <br />
  <form class="form-horizontal" style="text-align: justify; width: 100%" method="POST" id="formInscription" action="" enctype="multipart/form-data">
    <div class="form-group">
      <label class="control-label col-sm-2" for="nom">Nom :</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="nom" name="nom" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user'][0];?>
">
        </div>
      </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="prenom">Prénom :</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="prenom" name="prenom" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user'][1];?>
">
        </div>
      </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="nom">Email :</label>
        <div class="col-sm-4">
          <input type="email" class="form-control" id="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user'][2];?>
">
        </div>
      </div>
    <div class="form-group">
          <label class="control-label col-sm-2" for="mdp">Mot de passe :</label>
        <div class="col-sm-4">
          <input type="password" class="form-control" id="mdp" name="mdp" placeholder="Entrez votre mot de passe">
        </div>
      </div>
    <div class="form-group">
          <label class="control-label col-sm-2" for="mdp2">Confirmer votre mot de passe :</label>
        <div class="col-sm-4">
          <input type="password" class="form-control" id="mdp2" name="mdp2" placeholder="Confirmez votre mot de passe">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="avatar">Avatar :</label>
        <div class="col-sm-4">
          <input type="file" accept="image/*" class="form-control" id="avatar" name="avatar">
        </div>
      </div>
      <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10" style="width: 10%">
            <button type="submit" class="btn btn-primary">Modifier</button>
          </div>
      </div>
    </form>
</div>
<?php
}
}
/* {/block "content"} */
}
