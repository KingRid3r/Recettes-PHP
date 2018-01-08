<?php
/* Smarty version 3.1.30, created on 2018-01-08 08:08:48
  from "C:\xampp\htdocs\Recettes-PHP\site\application\views\nav\nav.inc.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5319004fb937_79195528',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dcd8802764bcb8b09bec488e0dbf9e86606a8449' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Recettes-PHP\\site\\application\\views\\nav\\nav.inc.tpl',
      1 => 1515395317,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5319004fb937_79195528 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
						<li class="active"><a href="index.php?page=acc">Accueil</a></li>
						<li class="dropdown">
							<a href="top_recettes.php">Top Recettes</a>
						<li><a href="index.php?page=recettes">Recettes</a></li>
						<li><a href="index.php?page=contacts">Contacts</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="index.php?page=inscription"><span class="glyphicon glyphicon-modal-window"></span> Inscription</a></li>
						<li><a href="index.php?page=connection"><span class="glyphicon glyphicon-user"></span> Connexion</a></li>
					</ul>
				</div>
			</div>
</nav>
<?php }
}
