{extends '../layout.tpl'}

{block name="title"}
Inscription
{/block}


{block name="content"}
<div class="container">
  {if $data.reponse ne false}
  <p class="alert alert-danger">{$data.reponse}</p>
  {/if}
  <h2 style="text-align: center;">Inscription</h2>
  <br />
  <p class="center-block" style="text-align: justify; width: 75%">Inscrivez-vous ! Dès maintenant et en quelques clics, inscrivez-vous gratuitement pour pouvoir ajouter et commenter des recettes. Pour s'inscrire c'est très simple : il vous suffit de remplir le formulaire ci-dessous et de vous laisser guider. </p>
  <br />
  <form class="form-horizontal" method="POST" id="formInscription" action="">
    <div class="form-group">
      <label class="control-label col-sm-2" for="nom">Nom :</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrez votre nom" required>
        </div>
      </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="prenom">Prénom :</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Entrez votre prenom" required>
        </div>
      </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="nom">Email :</label>
        <div class="col-sm-4">
          <input type="email" class="form-control" id="email" name="email" placeholder="Entrez votre email" required>
        </div>
      </div>
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
    <div class="form-group">
          <label class="control-label col-sm-2" for="mdp2">Confirmer votre mot de passe :</label>
        <div class="col-sm-4">
          <input type="password" class="form-control" id="mdp2" name="mdp2" placeholder="Confirmez votre mot de passe" required>
          </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="avatar">Avatar :</label>
        <div class="col-sm-4">
          <input type="file" accept="image/*" class="form-control" id="avatar" name="avatar">
        </div>
      </div>
      <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Envoyer</button>
          </div>
      </div>
    </form>
</div>
{/block}
