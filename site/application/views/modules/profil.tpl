{extends '../layout.tpl'}

{block name="title"}
{$smarty.session.MonLogin}
{/block}


{block name="content"}
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
  {if isset($data.ok)}
    <p class="alert alert-success">Modification effectué avec succés</p>
  {/if}
  {if isset($data.reponse)}
    <p class="alert alert-danger">{$data.reponse}</p>
  {/if}
  <img class="caption" src="media/{$data.user[3]}/{$data.user[4]}" alt="avatar" style="height: 215px">
  <h2 style="text-align: center;">Informations personnelles</h2>
  <br/>
  <p class="center-block" style="text-align: justify; width: 65%">Bienvenue sur les parametres de votre profil. <br/> Vous pouvez modifier vos informations personnelles juste en dessous. </p>
  <br />
  <form class="form-horizontal" style="text-align: justify; width: 100%" method="POST" id="formInscription" action="" enctype="multipart/form-data">
    <div class="form-group">
      <label class="control-label col-sm-2" for="nom">Nom :</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="nom" name="nom" value="{$data.user[0]}">
        </div>
      </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="prenom">Prénom :</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="prenom" name="prenom" value="{$data.user[1]}">
        </div>
      </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="nom">Email :</label>
        <div class="col-sm-4">
          <input type="email" class="form-control" id="email" name="email" value="{$data.user[2]}">
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
{/block}
