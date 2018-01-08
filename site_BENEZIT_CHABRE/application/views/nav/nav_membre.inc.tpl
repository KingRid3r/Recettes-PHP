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
          <li class="active"><a href="index.php?page=moncompte"><span class="glyphicon glyphicon-user"></span> {$smarty.session.MonLogin}</a></li>
        </ul>
      </div>
    </div>
  </nav>
</div>
