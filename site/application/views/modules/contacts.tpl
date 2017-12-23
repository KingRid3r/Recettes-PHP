{extends '../layout.tpl'}

{block name="title"}
Acceuil
{/block}


{block name="content"}
<div class="row">
  <div class="col-sm-6 col-md-6">
    <div class="thumbnail">
      <h2 class="caption">Nous Contacter</h2>
      <img src="asset/images/groupe.jpg" alt="photo de groupe">
      <br>
      <a class="btn btn-primary center-block" href="mailto:recette_etudiante@yopmail.com">GO ! </a>
    </div>
  </div>

  <div class="col-sm-6 col-md-6">
    <div class="thumbnail">
      <h2 class="caption">Qui sommes-nous ?</h2>
      <br />
      <div class="row">
        <div class="col-sm-6 col-md-3">
          <img style="width: 100%; margin-left: 12px" src="asset/images/luca.png" alt="mangatar luca">
        </div>
        <div class="col-sm-6 col-md-7">
          <h3>Luca BENEZIT</h3>
          <p style="color: orange">Ingénieur Web</p>
          <small>A étudié à l'IUT d'Arles</small>
        </div>
        <div class="col-sm-6 col-md-2">
          <a href="http://www.facebook.com/luca.benezit"><img style="width: 70%; margin-top: 35px; margin-right: 30px" src="asset/images/logo_fb.png" alt="logo Facebook"></a>
        </div>
      </div>
      <br />
      <div class="row">
        <div class="col-sm-6 col-md-3">
          <img style="width: 100%; margin-left: 12px" src="asset/images/mathieu.png" alt="mangatar mathieu">
        </div>
        <div class="col-sm-6 col-md-7">
          <h3>Mathieu CHABRE</h3>
          <p style="color: orange">Ingénieur Web</p>
          <small>A étudié à l'IUT d'Arles</small>
        </div>
        <div class="col-sm-6 col-md-2">
          <a href="http://www.facebook.com/mathieu.chabre"><img style="width: 70%; margin-top: 35px; margin-right: 30px" src="asset/images/logo_fb.png" alt="logo Facebook"></a>
        </div>
      </div>
      <br />
    </div>
  </div>
</div>
{/block}
