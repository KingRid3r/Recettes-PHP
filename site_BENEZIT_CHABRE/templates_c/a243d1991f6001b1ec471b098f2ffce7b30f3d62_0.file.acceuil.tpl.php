<?php
/* Smarty version 3.1.30, created on 2018-01-08 00:58:31
  from "C:\xampp\htdocs\Recettes-PHP\site\application\views\modules\acceuil.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a52b427f00e85_57015796',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a243d1991f6001b1ec471b098f2ffce7b30f3d62' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Recettes-PHP\\site\\application\\views\\modules\\acceuil.tpl',
      1 => 1515369243,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_5a52b427f00e85_57015796 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_226005a52b427e76839_87640248', "title");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_140495a52b427ef8289_97881771', "content");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "title"} */
class Block_226005a52b427e76839_87640248 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

Acceuil
<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_140495a52b427ef8289_97881771 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div>
			<h2 style="color: black"><u><strong> Présentation : </strong></u></h2>
			<h4 style="color: black"> Bonjour et bienvenue sur le site de Luca et Mathieu. <br/>
				Nous avons créé ce site pour les nouveaux étudiants mais pas seulement pour les nouveaux.<br/>
				En effet, grâce à ce site communautaire, vous pourrez consulter des recettes de cuisine faites pars d'autres personnes.<br/>
				Ainsi, vous pourrais vous cuisiner des bons petits plats fait maison et surtout équilibré !<br/>
				En bref, les membres de la commmunauté pourrons ajouter leurs recettes de cuisine qui seront ainsi visible par tout les visiteurs du site qui pourront se régaler à la maison ! </h4>
		</div>
		<br/>

		<div class="row">
			<div class="col-sm-6 col-md-12">
				<div class="panel-group" id="accordion_3">
					<div class="panel panel-default">
      					<div class="panel-heading" style="background-color: black">
          					<h2 style="text-align: center; color: white">Repas du jour</h2>
      					</div>
        				<div class="panel-body">
							<div class="col-sm-6 col-md-4">
								<div class="thumbnail">
									<h3 class="text-center"><?php echo $_smarty_tpl->tpl_vars['data']->value['entree'][0][0];?>
</h3>
									<img class="caption" src="media/<?php echo $_smarty_tpl->tpl_vars['data']->value['entree'][0][2];?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['entree'][0][1];?>
" alt="image entré" style="height: 215px">
									<a class="btn btn-primary center-block" href="index.php?page=detail&idr=<?php echo $_smarty_tpl->tpl_vars['data']->value['entree'][0][3];?>
">GO !</a>
								</div>
							</div>
							<div class="col-sm-6 col-md-4">
								<div class="thumbnail">
									<h3 class="text-center"><?php echo $_smarty_tpl->tpl_vars['data']->value['plat'][0][0];?>
</h3>
									<img class="caption" src="media/<?php echo $_smarty_tpl->tpl_vars['data']->value['plat'][0][2];?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['plat'][0][1];?>
" alt="image plat" style="height: 215px">
									<a class="btn btn-primary center-block" href="index.php?page=detail&idr=<?php echo $_smarty_tpl->tpl_vars['data']->value['plat'][0][3];?>
">GO !</a>
								</div>
							</div>
							<div class="col-sm-6 col-md-4">
								<div class="thumbnail">
									<h3 class="text-center"><?php echo $_smarty_tpl->tpl_vars['data']->value['dessert'][0][0];?>
</h3>
									<img class="caption" src="media/<?php echo $_smarty_tpl->tpl_vars['data']->value['dessert'][0][2];?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['dessert'][0][1];?>
" alt="image dessert" style="height: 215px">
									<a class="btn btn-primary center-block" href="index.php?page=detail&idr=<?php echo $_smarty_tpl->tpl_vars['data']->value['dessert'][0][3];?>
">GO !</a>
								</div>
							</div>
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
