
<?php 

try

{
	$bdd = new 
	PDO('mysql:host=localhost;dbname=immo;charset=utf8','root', 'admin');//se connecter a ma BDD
	//en suivant le nom de l'hote de la BDD , le nom de la BDD la personne qui se co sur la BDD
	//et pour finir le mot de passe du serveur
}

catch (Exception $e)
{
	die('Erreur :' .  $e->getMessage());
		//si il y a une erreur dans la BDD 
		//ce bout de code empechera que la personne qui se co
		//a la page vois le message d'erreur et en passant qu'il vois le mot de passe de la BDD!!
}

$reponse = $bdd->query('SELECT * FROM  annonce  INNER JOIN users ON id_user=id');



?>



<div class="container-fluid">
	<h1 class="bg-primary text-center text-uppercase">Petite annonces</h1>
</div>
<div class="container">

<div class="row">
	<div class="col-md-12">
		<div class="col-md-1 col-md-offset-11">
			<button class="btn btn-success btn-xs list-unstyled"><a href="?p=trieDecroissant">prix decroissant</a></button>
		</div>
	</div>
</div>
	
	<table class="table table-hover">
		<thead>
			<tr>
				<th><strong>#</strong></th>
				<th><strong>Nom</strong></th>
				<th><strong>Prenom</strong></th>
				<th><strong>Rubrique</strong></th>
				<th><strong>Annonce</strong></th>
				<th><strong>Prix</strong></th>
			</tr>
			
			<?php 
			while($donnees = $reponse->fetch()){

				?>
				<tr>
					<td><?= $donnees['id_user'] ?></td>
					<td><?= $donnees['last_name'] ?></td>
					<td><?= $donnees['first_name']?></td>	
					<td><?= $donnees['title'] ?></td>
					<td><?= $donnees['description'] ?></td>
					<td><?= $donnees['price'] ?>€</td>
				</tr>
				<?php 
			}
			$reponse->closeCursor(); // termine le traitement de la requête !?>

		</thead>
	</table>
</div>














































<!--                        requete detaillé                      
// $users = $bdd->query('SELECT * FROM immo.users WHERE id=1');
// $user1 = $users->fetch();

// $rubrique = $bdd->query('SELECT * FROM immo.rubrique WHERE id_rubrique=1;');
// $rubrique1 = $rubrique->fetch();

// $annonces = $bdd->query('SELECT * FROM immo.annonce WHERE title="Maison"');
// $annonce1 = $annonces->fetch();

// $prices = $bdd->query('SELECT * FROM immo.annonce WHERE id_annonce=1;');
// $price1 = $prices->fetch();



// $users = $bdd->query('SELECT * FROM immo.users WHERE id=2');
// $user2 = $users->fetch();

// $rubrique = $bdd->query('SELECT * FROM immo.rubrique WHERE id_rubrique=2;');
// $rubrique2 = $rubrique->fetch();

// $annonces = $bdd->query('SELECT * FROM immo.annonce WHERE title="Cabane au fond du jardin"');
// $annonce2 = $annonces->fetch();

// $prices = $bdd->query('SELECT * FROM immo.annonce WHERE id_annonce=2;');
// $price2 = $prices->fetch();
-->
