{extends '../layout.tpl'}

{block name="title"}
Acceuil
{/block}


{block name="content"}
<div class="container">
  <p class="alert alert-danger">{$data.reponse}</p>
  <h2 style="text-align: center;">Connexion</h2>
  <br />
  <form class="form-horizontal" method="POST" id="formConnection" action="index.php?page=inscription">
      <div class="form-group">
      <label class="control-label col-sm-2" for="login">Login :</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="login" placeholder="Entrez votre login">
        </div>
      </div>
    <div class="form-group">
          <label class="control-label col-sm-2" for="mdp">Mot de passe :</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="mdp" placeholder="Entrez votre mot de passe">
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
{/block}
