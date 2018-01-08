<?php
/* Smarty version 3.1.30, created on 2018-01-08 08:16:20
  from "C:\xampp\htdocs\Recettes-PHP\site\application\views\modules\ajout_recette.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a531ac42218c3_01139395',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f479acef84caab5be20b1d88d38575c10a64f6e5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Recettes-PHP\\site\\application\\views\\modules\\ajout_recette.tpl',
      1 => 1515378928,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_5a531ac42218c3_01139395 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_259695a531ac4216e04_12352928', "title");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_203105a531ac421d5e8_09596657', "content");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "title"} */
class Block_259695a531ac4216e04_12352928 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

Ajout Recette
<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_203105a531ac421d5e8_09596657 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container" id="infos_persos">
  <h2 style="text-align: center;">Ajouter une recette</h2>
  <br />
  <p class="center-block" style="text-align: justify; width: 65%">Bienvenue sur le formulaire d'ajout des recttes. <br/> Vous pouvez ajouter une recette en remplissant les champs suivant. </p>
  <br/>
  <form class="form-horizontal" style="text-align: justify; width: 100%">
    <div class="form-group">
      <label class="control-label col-sm-2" for="titre">Titre :</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="titre" name="titre" placeholder="Entrez le titre de votre recette">
        </div>
      </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Type :</label>
          <div class="col-sm-4">
        <select name="type" class="form-control">
          <option value="1">Entrée</option>
          <option value="2">Plat</option>
          <option value="3">Dessert</option>
        </select>
        </div>
      </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Difficulté :</label>
          <div class="col-sm-4">
        <select name="difficulte" class="form-control">
          <option value="facile">Facile</option>
          <option value="moyen">2</option>
          <option value="difficile">3</option>
        </select>
        </div>
      </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="cout">Cout :</label>
        <div class="col-sm-4">
          <input type="number" class="form-control" id="cout" name="cout" placeholder="Entrez le cout estimé">
        </div>
      </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="tps_prepa">Temps de préparation :</label>
          <div class="col-sm-4">
            <input type="time" class="form-control" id="tps_prepa" name="tps_prepa">
        </div>
      </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="tps_cuis">Temps de cuisson :</label>
          <div class="col-sm-4">
            <input type="time" class="form-control" id="tps_cuis" name="tps_cuis">
        </div>
      </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="tps_repos">Temps de repos :</label>
          <div class="col-sm-4">
            <input type="time" class="form-control" id="tps_repos" name="tps_repos">
        </div>
      </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Ingrédiants :</label>
          <div class="col-sm-4">
        <select size="4" multiple name="difficulte" class="form-control">
          <option disabled value="1">Afin de selectionner les ingrediants appuyer sur ctrl</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
        </div>
      </div>

    <div class="form-group">
          <label class="control-label col-sm-2" for="recette">Recette</label>
        <div class="col-sm-4">
          <textarea spellcheck="true" class="form-control" id="recette" name="recette" placeholder="Entrez la recette"></textarea>
        </div>
      </div>
    <div class="form-group">
          <label class="control-label col-sm-2" for="description">Description :</label>
        <div class="col-sm-4">
          <textarea spellcheck="true" class="form-control" id="description" name="description" placeholder="Entrez la description"></textarea>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="photo">Photo :</label>
        <div class="col-sm-4">
          <input type="file" accept="image/*" class="form-control" id="photo" name="photo">
        </div>
      </div>
      <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10" style="width: 10%">
            <button type="submit" class="btn btn-primary">Ajouter</button>
          </div>
      </div>
    </form>
</div>
<?php
}
}
/* {/block "content"} */
}
