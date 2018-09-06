<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
		<title>statistique</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<h1>Tous au Numérique</h1>
		<h2>Statistiques<h2>
			<h3>Nombre de personnes par ville.</h3>

		<table class="table table-striped table-dark">
			<thead>
				<tr>
					<th scope="col"></th>
					<th scope="col">Nombre visiteurs</th>
					<th scope="col">Lieux</th>

				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="row">1</th>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<th scope="row">2</th>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				
			</tbody>
		</table>

		<h3>Nombres de visiteurs par entreprise</h3>
		<table class="table table-striped table-dark">
			<thead>
				<tr>
					<th scope="col"></th>
					<th scope="col">Nombre visiteurs</th>
					<th scope="col">Entreprises</th>

				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="row">1</th>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<th scope="row">2</th>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					

				</tr>
				
			</tbody>
		</table>
		<?php
			$pdo = new PDO('mysql:host=localhost;dbname=tous_au_numerique', 'segond', 'loudmila32');
					$req = $pdo->query("SELECT societe, count(societe) AS nombre FROM visiteur GROUP BY societe");
					while($datas=$req->fetch())
					{
					echo '<div>' . $datas['societe'] . '</div>';	
					echo '<div>' . $datas['nombre'] . '</div>';	
				}
		?>	

		



	</body>
</html>


