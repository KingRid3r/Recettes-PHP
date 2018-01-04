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
              Adolescebat autem obstinatum propositum erga haec et similia multa scrutanda,
              stimulos admovente regina, quae abrupte mariti fortunas trudebat in exitium praeceps,
              cum eum potius lenitate feminea ad veritatis humanitatisque viam reducere utilia suadendo deberet,
              ut in Gordianorum actibus factitasse Maximini truculenti illius imperatoris rettulimus coniugem.
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
        <div>
          <br/>
          <h1 style="text-align: center"> ICI C'EST LES COMMENTAIRES !!! </h1>
          <br/>
        </div>
        </div>
      </div>
  </div>
</div>
{/block}
