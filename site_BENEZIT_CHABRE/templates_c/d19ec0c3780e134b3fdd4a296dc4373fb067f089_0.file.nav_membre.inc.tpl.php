<?php
/* Smarty version 3.1.30, created on 2018-01-08 08:17:11
  from "C:\xampp\htdocs\Recettes-PHP\site\application\views\nav\nav_membre.inc.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a531af77fe463_52406282',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd19ec0c3780e134b3fdd4a296dc4373fb067f089' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Recettes-PHP\\site\\application\\views\\nav\\nav_membre.inc.tpl',
      1 => 1515395822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a531af77fe463_52406282 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.php?page=acc">Accueil</a></li>
          <li class="dropdown">
          <li><a href="index.php?page=recettes">Recettes</a></li>
          <li><a href="index.php?page=contacts">Contacts</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="index.php?page=ajout"><span class="glyphicon glyphicon-plus"></span> Ajouter recette</a></li>
          <li><a href="index.php?page=deconnection"><span class="glyphicon glyphicon-log-out"></span> Déconnexion</a></li>
          <li class="active"><a href="index.php?page=moncompte"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['MonLogin'];?>
</a></li>
        </ul>
      </div>
    </div>
  </nav>
</div>
<?php }
}
