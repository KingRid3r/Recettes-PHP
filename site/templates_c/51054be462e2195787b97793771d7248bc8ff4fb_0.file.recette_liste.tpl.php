<?php
/* Smarty version 3.1.30, created on 2018-01-03 17:09:49
  from "C:\xampp\htdocs\Recettes-PHP\site\application\views\modules\recette_liste.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4d004d8064b8_36762983',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51054be462e2195787b97793771d7248bc8ff4fb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Recettes-PHP\\site\\application\\views\\modules\\recette_liste.tpl',
      1 => 1514995762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_5a4d004d8064b8_36762983 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_172275a4d004d7e0367_29738457', "title");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_125845a4d004d802f19_49172429', "content");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "title"} */
class Block_172275a4d004d7e0367_29738457 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

Recettes
<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_125845a4d004d802f19_49172429 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['data']->value['exist'] == true) {?>
<div class="row">
  <div class="col-sm-6 col-md-12">
    <div class="panel-group" id="accordion_3">
      <div class="panel panel-default">
            <div class="panel-heading" style="background-color: black">
                <h2 style="text-align: center; color: white"><?php echo $_smarty_tpl->tpl_vars['data']->value['nom'];?>
</h2>
            </div>
            <div id="collapse0" class="panel-collapse collapse in">
              <div class="panel-body">
            <div class="col-sm-6 col-md-12">
              <div class="panel-group" id="accordion">
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['categorie'], 'cat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
?>
                  <div class="panel panel-default">
                      <div class="panel-heading" style="background-color: #76B900">
                        <a class="non_souligne" data-toggle="collapse" data-parent="#accordion" href="#collapse1" style="text-align: center; color: white"><h3><?php ob_start();
echo $_smarty_tpl->tpl_vars['cat']->value[2];
$_prefixVariable1=ob_get_clean();
echo $_prefixVariable1;?>
</h3></a>
                      </div>
                      <div id="collapse1" class="panel-collapse collapse in">
                        <div class="panel-body">
                        <img class="caption" src="media/<?php echo $_smarty_tpl->tpl_vars['cat']->value[0];?>
/<?php echo $_smarty_tpl->tpl_vars['cat']->value[1];?>
" alt="image cat" style="height: 215px"><?php echo $_smarty_tpl->tpl_vars['cat']->value[3];?>
</div>
                      </div>
                  </div>
                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </div>
            </div>
          </div>
            </div>
        </div>
      </div>
  </div>
</div>
<?php } else { ?>
<div class="row">
  <div class="col-sm-6 col-md-12">
    <div class="panel-group" id="accordion_3">
      <div class="panel panel-default">
            <div class="panel-heading" style="background-color: black">
                <h2 style="text-align: center; color: white">Recettes</h2>
            </div>
            <div id="collapse0" class="panel-collapse collapse in">
              <div class="panel-body">
            <div class="col-sm-6 col-md-12">
              <div class="panel-group" id="accordion">
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['categories'], 'cat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
?>
                  <div class="panel panel-default">
                      <div class="panel-heading" style="background-color: #76B900">
                        <a class="non_souligne" data-toggle="collapse" data-parent="#accordion" href="#collapse1" style="text-align: center; color: white"><h3><?php ob_start();
echo $_smarty_tpl->tpl_vars['cat']->value[0];
$_prefixVariable2=ob_get_clean();
echo $_prefixVariable2;?>
</h3></a>
                      </div>
                      <div id="collapse1" class="panel-collapse collapse in">
                        <div class="panel-body">
                        <img class="caption" src="media/categories/<?php echo $_smarty_tpl->tpl_vars['cat']->value[2];?>
" alt="image cat" style="height: 215px"><?php echo $_smarty_tpl->tpl_vars['cat']->value[1];?>
</div>
                      </div>
                  </div>
                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </div>
            </div>
          </div>
            </div>
        </div>
      </div>
  </div>
</div>
<?php }
}
}
/* {/block "content"} */
}
