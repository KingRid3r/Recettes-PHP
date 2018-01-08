<?php
/* Smarty version 3.1.30, created on 2018-01-08 04:44:20
  from "C:\xampp\htdocs\Recettes-PHP\site\application\views\modules\recette_detail.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a52e9146c3f27_63913488',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69fb397a35057d7d619700de0d5353ee933f3eec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Recettes-PHP\\site\\application\\views\\modules\\recette_detail.tpl',
      1 => 1515382883,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_5a52e9146c3f27_63913488 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_64555a52e914696846_66538401', "title");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_119405a52e9146c0667_91965023', "content");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "title"} */
class Block_64555a52e914696846_66538401 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo $_smarty_tpl->tpl_vars['data']->value['recette'][1];?>

<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_119405a52e9146c0667_91965023 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="row">
  <div class="col-sm-6 col-md-12">
    <div class="panel-group" id="accordion_3">
      <div class="panel panel-default">
            <div class="panel-heading" style="background-color: black">
                <h2 style="text-align: center; color: white"><?php echo $_smarty_tpl->tpl_vars['data']->value['recette'][1];?>
</h2>
            </div>
        <p> Le <?php echo $_smarty_tpl->tpl_vars['data']->value['recette'][2];?>
, par <?php echo $_smarty_tpl->tpl_vars['data']->value['recette'][10];?>
</p>
            <div class="panel-body">
          <div class="col-sm-6 col-md-4">
            <img class="caption" src="media/<?php echo $_smarty_tpl->tpl_vars['data']->value['recette'][10];?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['recette'][9];?>
" alt="image recette" style="height: 215px">
          </div>
          <div class="col-sm-6 col-md-8">
            <h4><u><strong> Difficultée :</strong></u> <?php echo $_smarty_tpl->tpl_vars['data']->value['recette'][7];?>
</h4>
            <h4><u><strong> Cout :</strong></u> <?php echo $_smarty_tpl->tpl_vars['data']->value['recette'][8];?>
</h4>
            <h4><u><strong> Temps de Préparation :</strong></u> <?php echo $_smarty_tpl->tpl_vars['data']->value['recette'][4];?>
 environ </h4>
            <h4><u><strong> Temps de Cuisson :</strong></u> <?php echo $_smarty_tpl->tpl_vars['data']->value['recette'][5];?>
 </h4>
            <h4><u><strong> Temps de Repos :</strong></u> <?php echo $_smarty_tpl->tpl_vars['data']->value['recette'][6];?>
 </h4>
            <h4><u><strong> Note :</strong></u> <img class="caption" src="asset/images/note<?php echo $_smarty_tpl->tpl_vars['data']->value['note'];?>
.jpg" alt="note"></h4>
          </div>
          <div class="col-sm-6 col-md-12">
            <br/>
            <h4><u><strong> Description : </strong></u></h4>
            <p>
              <?php echo $_smarty_tpl->tpl_vars['data']->value['recette'][3];?>

            </p>
          </div>
          <div class="col-sm-6 col-md-12">
            <br/>
            <h4><u><strong> Liste des ingrédiants : </strong></u></h4>
            <li> ingredian 1 </li>
            <li> ingredian 1 </li>
            <li> ingredian 1 </li>
            <li> ingredian 1 </li>
          </div>
          <div class="col-sm-6 col-md-12">
            <br/>
            <h4><u><strong> Recette : </strong></u></h4>
            <p>
              <?php echo $_smarty_tpl->tpl_vars['data']->value['recette'][11];?>

            </p>
          </div>
        </div>
        </div>
      </div>
  </div>
</div>




<div class="row">
  <div class="col-sm-6 col-md-12">
    <div class="panel-group" id="accordion_3">
      <div class="panel panel-default">
        <div class="panel-heading" style="background-color: black">
          <h2 style="text-align: center; color: white">Espace Commentaire</h2>
        </div>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['coms'], 'com');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['com']->value) {
?>
          <div class="panel-body">
            <div class="col-sm-6 col-md-2">
              <p> Le <?php echo $_smarty_tpl->tpl_vars['com']->value[1];?>
, par <?php echo $_smarty_tpl->tpl_vars['com']->value[2];?>
 </p>
              <a><img style="width: 70%; margin-left: 22px" src="media/<?php echo $_smarty_tpl->tpl_vars['com']->value[2];?>
/<?php echo $_smarty_tpl->tpl_vars['com']->value[3];?>
" alt="avatar"></a>
            </div>
            <div class="col-sm-6 col-md-10">
              <br/>
              <br/>
              <br/>
              <p>
                <?php echo $_smarty_tpl->tpl_vars['com']->value[0];?>

              </p>
              <br/>
            </div>
            <div class="col-sm-6 col-md-12">
              <a><img style="margin-left: 22px" src="asset/images/sep.png" alt="separation"></a>
            </div>
          </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <?php if (isset($_SESSION['MonID'])) {?>


        <div class="panel-body">
          <div class="col-sm-12" style="text-align: center">
            <form class="form-horizontal" method="POST" id="formConnection" action="">
              <textarea spellcheck="true" class="form-control" id="commentaire" name="commentaire" rows="4" placeholder="Commentaire"></textarea>
              <br/>
              <div class="col-sm-4">
                <input type="number" class="form-control" id="note" name="note" placeholder="Entrez une note sur 5" max="5">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary"style="width: 25%"><h4>Ajouter un commentaire</h4></button>
              </div>
            </form>
          </div>
        </div>
        <?php }?>


      </div>
    </div>
  </div>
</div>
<?php
}
}
/* {/block "content"} */
}
