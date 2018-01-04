<?php
/* Smarty version 3.1.30, created on 2018-01-04 13:46:24
  from "C:\xampp\htdocs\Recettes-PHP\site\application\views\modules\recette_detail.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4e2220615ac1_84143411',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69fb397a35057d7d619700de0d5353ee933f3eec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Recettes-PHP\\site\\application\\views\\modules\\recette_detail.tpl',
      1 => 1515069973,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_5a4e2220615ac1_84143411 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_307395a4e22205f9f00_25850078', "title");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_67365a4e22206121e5_41506481', "content");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "title"} */
class Block_307395a4e22205f9f00_25850078 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo $_smarty_tpl->tpl_vars['data']->value['recette'][1];?>

<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_67365a4e22206121e5_41506481 extends Smarty_Internal_Block
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
              Adolescebat autem obstinatum propositum erga haec et similia multa scrutanda,
              stimulos admovente regina, quae abrupte mariti fortunas trudebat in exitium praeceps,
              cum eum potius lenitate feminea ad veritatis humanitatisque viam reducere utilia suadendo deberet,
              ut in Gordianorum actibus factitasse Maximini truculenti illius imperatoris rettulimus coniugem.
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
        <div>
          <br/>
          <h1 style="text-align: center"> ICI C'EST LES COMMENTAIRES !!! </h1>
          <br/>
        </div>
        </div>
      </div>
  </div>
</div>
<?php
}
}
/* {/block "content"} */
}
