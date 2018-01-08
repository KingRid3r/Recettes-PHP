{extends '../layout.tpl'}

{block name="title"}
{$data.recette[1]}
{/block}


{block name="content"}
<div class="row">
  <div class="col-sm-6 col-md-12">
    <div class="panel-group" id="accordion_3">
      <div class="panel panel-default">
            <div class="panel-heading" style="background-color: black">
                <h2 style="text-align: center; color: white">{$data.recette[1]}</h2>
            </div>
        <p> Le {$data.recette[2]}, par {$data.recette[10]}</p>
            <div class="panel-body">
          <div class="col-sm-6 col-md-4">
            <img class="caption" src="media/{$data.recette[10]}/{$data.recette[9]}" alt="image recette" style="height: 215px">
          </div>
          <div class="col-sm-6 col-md-8">
            <h4><u><strong> Difficultée :</strong></u> {$data.recette[7]}</h4>
            <h4><u><strong> Cout :</strong></u> {$data.recette[8]}</h4>
            <h4><u><strong> Temps de Préparation :</strong></u> {$data.recette[4]} environ </h4>
            <h4><u><strong> Temps de Cuisson :</strong></u> {$data.recette[5]} </h4>
            <h4><u><strong> Temps de Repos :</strong></u> {$data.recette[6]} </h4>
            <h4><u><strong> Note :</strong></u> <img class="caption" src="asset/images/note{$data.note}.jpg" alt="note"></h4>
          </div>
          <div class="col-sm-6 col-md-12">
            <br/>
            <h4><u><strong> Description : </strong></u></h4>
            <p>
              {$data.recette[3]}
            </p>
          </div>
          <div class="col-sm-6 col-md-12">
            <br/>
            <h4><u><strong> Liste des ingrédiants : </strong></u></h4>
            <li> ingredian 1 </li>
            <li> ingredian 1 </li>
            <li> ingredian 1 </li>
            <li> ingredian 1 </li>
          </div>
          <div class="col-sm-6 col-md-12">
            <br/>
            <h4><u><strong> Recette : </strong></u></h4>
            <p>
              {$data.recette[11]}
            </p>
          </div>
        </div>
        </div>
      </div>
  </div>
</div>




<div class="row">
  <div class="col-sm-6 col-md-12">
    <div class="panel-group" id="accordion_3">
      <div class="panel panel-default">
        <div class="panel-heading" style="background-color: black">
          <h2 style="text-align: center; color: white">Espace Commentaire</h2>
        </div>

        {foreach from=$data.coms item=com}
          <div class="panel-body">
            <div class="col-sm-6 col-md-2">
              <p> Le {$com[1]}, par {$com[2]} </p>
              <a><img style="width: 70%; margin-left: 22px" src="media/{$com[2]}/{$com[3]}" alt="avatar"></a>
            </div>
            <div class="col-sm-6 col-md-10">
              <br/>
              <br/>
              <br/>
              <p>
                {$com[0]}
              </p>
              <br/>
            </div>
            <div class="col-sm-6 col-md-12">
              <a><img style="margin-left: 22px" src="asset/images/sep.png" alt="separation"></a>
            </div>
          </div>
        {/foreach}
        {if isset($smarty.session.MonID)}


        <div class="panel-body">
          <div class="col-sm-12" style="text-align: center">
            <form class="form-horizontal" method="POST" id="formConnection" action="">
              <textarea spellcheck="true" class="form-control" id="commentaire" name="commentaire" rows="4" placeholder="Commentaire"></textarea>
              <br/>
              <div class="col-sm-4">
                <input type="number" class="form-control" id="note" name="note" placeholder="Entrez une note sur 5" max="5">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary"style="width: 25%"><h4>Ajouter un commentaire</h4></button>
              </div>
            </form>
          </div>
        </div>
        {/if}


      </div>
    </div>
  </div>
</div>
{/block}
