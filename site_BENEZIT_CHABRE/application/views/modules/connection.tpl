{extends '../layout.tpl'}

{block name="title"}
Connection
{/block}


{block name="content"}
<div class="container">
  {if $data.etat eq "ok"}
  <p class="alert alert-success">{$data.reponse}</p>
  {/if}
  {if $data.etat eq "no"}
  <p class="alert alert-danger">{$data.reponse}</p>
  {/if}
  <h2 style="text-align: center;">Connexion</h2>
  <br />
  <form class="form-horizontal" method="POST" id="formConnection" action="">
      <div class="form-group">
      <label class="control-label col-sm-2" for="login">Login :</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="login" name="login" placeholder="Entrez votre login" required>
        </div>
      </div>
    <div class="form-group">
          <label class="control-label col-sm-2" for="mdp">Mot de passe :</label>
        <div class="col-sm-4">
          <input type="password" class="form-control" id="mdp" name="mdp" placeholder="Entrez votre mot de passe" required>
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
