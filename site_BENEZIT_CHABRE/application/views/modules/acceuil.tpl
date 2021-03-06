{extends '../layout.tpl'}

{block name="title"}
Acceuil
{/block}


{block name="content"}
<div>
			<h2 style="color: black"><u><strong> Présentation : </strong></u></h2>
			<h4 style="color: black"> Bonjour et bienvenue sur le site de Luca et Mathieu. <br/>
				Nous avons créé ce site pour les nouveaux étudiants mais pas seulement pour les nouveaux.<br/>
				En effet, grâce à ce site communautaire, vous pourrez consulter des recettes de cuisine faites pars d'autres personnes.<br/>
				Ainsi, vous pourrais vous cuisiner des bons petits plats fait maison et surtout équilibré !<br/>
				En bref, les membres de la commmunauté pourrons ajouter leurs recettes de cuisine qui seront ainsi visible par tout les visiteurs du site qui pourront se régaler à la maison ! </h4>
		</div>
		<br/>

		<div class="row">
			<div class="col-sm-6 col-md-12">
				<div class="panel-group" id="accordion_3">
					<div class="panel panel-default">
      					<div class="panel-heading" style="background-color: black">
          					<h2 style="text-align: center; color: white">Repas du jour</h2>
      					</div>
        				<div class="panel-body">
							<div class="col-sm-6 col-md-4">
								<div class="thumbnail">
									<h3 class="text-center">{$data.entree[0][0]}</h3>
									<img class="caption" src="media/{$data.entree[0][2]}/{$data.entree[0][1]}" alt="image entré" style="height: 215px">
									<a class="btn btn-primary center-block" href="index.php?page=detail&idr={$data.entree[0][3]}">GO !</a>
								</div>
							</div>
							<div class="col-sm-6 col-md-4">
								<div class="thumbnail">
									<h3 class="text-center">{$data.plat[0][0]}</h3>
									<img class="caption" src="media/{$data.plat[0][2]}/{$data.plat[0][1]}" alt="image plat" style="height: 215px">
									<a class="btn btn-primary center-block" href="index.php?page=detail&idr={$data.plat[0][3]}">GO !</a>
								</div>
							</div>
							<div class="col-sm-6 col-md-4">
								<div class="thumbnail">
									<h3 class="text-center">{$data.dessert[0][0]}</h3>
									<img class="caption" src="media/{$data.dessert[0][2]}/{$data.dessert[0][1]}" alt="image dessert" style="height: 215px">
									<a class="btn btn-primary center-block" href="index.php?page=detail&idr={$data.dessert[0][3]}">GO !</a>
								</div>
							</div>
						</div>
    				</div>
  				</div>
			</div>
		</div>
{/block}
