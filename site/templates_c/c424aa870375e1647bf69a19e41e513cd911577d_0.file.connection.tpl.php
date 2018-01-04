<?php
/* Smarty version 3.1.30, created on 2018-01-04 21:10:49
  from "C:\xampp\htdocs\Recettes-PHP\site\application\views\modules\connection.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4e8a499fffb6_72136150',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c424aa870375e1647bf69a19e41e513cd911577d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Recettes-PHP\\site\\application\\views\\modules\\connection.tpl',
      1 => 1515096566,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_5a4e8a499fffb6_72136150 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_203125a4e8a499f0756_17333663', "title");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_186095a4e8a499fe5c2_32109204', "content");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "title"} */
class Block_203125a4e8a499f0756_17333663 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

Connection
<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_186095a4e8a499fe5c2_32109204 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
  <?php if ($_smarty_tpl->tpl_vars['data']->value['etat'] == "ok") {?>
  <p class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['data']->value['reponse'];?>
</p>
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['data']->value['etat'] == "no") {?>
  <p class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['data']->value['reponse'];?>
</p>
  <?php }?>
  <h2 style="text-align: center;">Connexion</h2>
  <br />
  <form class="form-horizontal" method="POST" id="formConnection" action="">
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
    <p class="col-sm-offset-2" style="text-align: justify; width: 75%">Pas encore de compte ? <a href="index.php?page=inscription"> Inscrivez-vous</a></p>
      <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Se connecter</button>
          </div>
      </div>
    </form>
</div>
<?php
}
}
/* {/block "content"} */
}
