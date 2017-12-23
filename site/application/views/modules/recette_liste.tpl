{extends '../layout.tpl'}

{block name="title"}
Recettes
{/block}


{block name="content"}
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

                  <div class="panel panel-default">
                      <div class="panel-heading" style="background-color: #76B900">
                        <a class="non_souligne" data-toggle="collapse" data-parent="#accordion" href="#collapse1" style="text-align: center; color: white"><h3>Entrée</h3></a>
                      </div>
                      <div id="collapse1" class="panel-collapse collapse in">
                        <div class="panel-body">
                        Le processeur graphique est un circuit intégré se trouvant majoritairement sur une carte. Il permet de gérer tout le côté graphique (interface, rendu 3D, etc) mais également d'accélérer certaines applications en étant utilisé en parallèle du CPU.</div>
                      </div>
                  </div>

                  <div class="panel panel-default">
                      <div class="panel-heading" style="background-color: #D71920">
                        <a class="non_souligne" data-toggle="collapse" data-parent="#accordion" href="#collapse2"><h3 style="text-align: center; color: white">Plats</h3></a>
                      </div>
                      <div id="collapse2" class="panel-collapse collapse in">
                    <div class="panel-body">
                    <p id="plat"> Un GPU sert principalement à afficher les informations graphiques à l'écran en optimisant les images, en évitant de calculer des informations inutiles. Ainsi, le processeur graphique coordonne puis envoie l'image à la VRAM avant d'être affiché à l'écran.</p></div>
                      </div>
                  </div>

                <div class="panel panel-default">
                      <div class="panel-heading" style="background-color: #76B900">
                        <a class="non_souligne" data-toggle="collapse" data-parent="#accordion" href="#collapse3"><h3 id="dessert" style="text-align: center; color: white">Dessert</h3></a>
                      </div>
                      <div id="collapse3" class="panel-collapse collapse in">
                        <div class="panel-body">
                        Le processeur graphique est un circuit intégré se trouvant majoritairement sur une carte. Il permet de gérer tout le côté graphique (interface, rendu 3D, etc) mais également d'accélérer certaines applications en étant utilisé en parallèle du CPU.</div>
                      </div>
                  </div>
                </div>
            </div>
          </div>
            </div>
        </div>
      </div>
  </div>
</div>
{/block}
