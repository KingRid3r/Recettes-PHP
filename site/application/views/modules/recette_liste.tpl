{extends '../layout.tpl'}

{block name="title"}
Recettes
{/block}


{block name="content"}
{if $data.exist eq true}
<div class="row">
  <div class="col-sm-6 col-md-12">
    <div class="panel-group" id="accordion_3">
      <div class="panel panel-default">
            <div class="panel-heading" style="background-color: black">
                <h2 style="text-align: center; color: white">{$data.nom}</h2>
            </div>
            <div id="collapse0" class="panel-collapse collapse in">
              <div class="panel-body">
            <div class="col-sm-6 col-md-12">
              <div class="panel-group" id="accordion">
                  {foreach from=$data.categorie item=cat}
                  <div class="panel panel-default">
                      <div class="panel-heading" style="background-color: #76B900">
                        <a class="non_souligne" data-toggle="collapse" data-parent="#accordion" href="#collapse1" style="text-align: center; color: white"><h3>{$cat[2]}</h3></a>
                      </div>
                      <div id="collapse1" class="panel-collapse collapse in">
                        <div class="panel-body">
                        <img class="caption" src="media/{$cat[0]}/{$cat[1]}" alt="image cat" style="height: 215px">{$cat[3]} <a href="index.php?page=detail&idr={$cat[4]}">Accéder à la Recette</a></div>
                      </div>
                  </div>
                  {/foreach}
                </div>
            </div>
          </div>
            </div>
        </div>
      </div>
  </div>
</div>
{else}
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
                  {foreach from=$data.categories item=cat}
                  <div class="panel panel-default">
                      <div class="panel-heading" style="background-color: #76B900">
                        <a class="non_souligne" data-toggle="collapse" data-parent="#accordion" href="#collapse1" style="text-align: center; color: white"><h3>{$cat[0]}</h3></a>
                      </div>
                      <div id="collapse1" class="panel-collapse collapse in">
                        <div class="panel-body">
                        <img class="caption" src="media/categories/{$cat[2]}" alt="image cat" style="height: 215px">{$cat[1]} <a href="index.php?page=recettes&idc={$cat[3]}">Accéder à la catégorie</a></div>
                      </div>
                  </div>
                  {/foreach}
                </div>
            </div>
          </div>
            </div>
        </div>
      </div>
  </div>
</div>
{/if}
{/block}
