<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rokkitt:400,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<title>Les tables de multiplications en PHP</title>
</head>
<body class="teal lighten-5">
	<header>
		<div class="navbar-fixed">
			<nav class="teal">
				<div class="nav-wrapper">
					<a href="#" class="brand-logo">Multiplications en PHP</a>
					<a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
					<ul class="right hide-on-med-and-down">
						<li><a href="#exercice1"><i class="medium material-icons">looks_one</i></a></li>
						<li><a href="#exercice2"><i class="medium material-icons">looks_two</i></a></li>
						<li><a href="#exercice3"><i class="medium material-icons">looks_3</i></a></li>
						<li><a href="#exercice4"><i class="medium material-icons">looks_4</i></a></li>
					</ul>
				</div>
			</nav>
		</div>
		<ul class="sidenav" id="mobile-demo">
			<li><a href="#exercice1"><i class="small material-icons left">looks_one</i>Exercice 1</a></li>
			<li><a href="#exercice2"><i class="small material-icons left">looks_two</i>Exercice 2</a></li>
			<li><a href="#exercice3"><i class="small material-icons left">looks_3</i>Exercice 3</a></li>
			<li><a href="#exercice4"><i class="small material-icons left">looks_4</i>Exercice 4</a></li>
			<li><a href="#" class="sidenav-close">Fermer</a></li>
		</ul>
	</header>
	<div class="fixed-action-btn">
		<a class="btn-floating btn-large pink" href="#top">
			<i class="large material-icons">arrow_upward</i>
		</a>

	</div>

	<div class="container">

		<section id="exercice1">
			<div class="row teal accent-4 white-text z-depth-1">
				<div class="col s2 m1">
					<i class="medium material-icons">looks_one</i>
				</div>
				<div class="col s10 m11 left-align">
					<h4>Afficher la table de multiplication du 3</h4>
				</div>
			</div>
			<div class="row">
				<?php
				$nb = 3;
				echo '<div class="card col s12 m6 l3"><table class="table striped">
				<tbody><thead><caption>Table du '.$nb. '</caption></thead>' ;
				for ($i=1; $i <=10 ; $i++) { 
					$result = $nb * $i;
					echo '<tr>
					<td>'.$nb. ' x '.$i.'</td>
					<td> = </td>  
					<td>'.$result.'</td>
					</tr>';
				}
				echo '</tbody></table></div>'.PHP_EOL;
				?>
			</div>
			<section id="exercice2">
				<div class="row teal accent-4 white-text z-depth-1">
					<div class="col s2 m1">
						<i class="medium material-icons">looks_two</i>
					</div>
					<div class="col s10 m11 left-align">
						<h4>Choix dans liste déroulante</h4>
					</div>
				</div>
				<div class="row">
					<form method="post" action="index.php">
						Quelle table voulez-vous afficher?<br>
						<div class="input-field col s12 m6">
							<select name="table">
								<option value="1">Table du 1</option>
								<option value="2">Table du 2</option>
								<option value="3">Table du 3</option>
								<option value="4">Table du 4</option>
								<option value="5">Table du 5</option>
								<option value="6">Table du 6</option>
								<option value="7">Table du 7</option>
								<option value="8">Table du 8</option>
								<option value="9">Table du 9</option>
								<option value="10">Table du 10</option>
							</select>
						</div>
					</div>
					<button class="btn waves-effect waves-light blue-grey darken-4" type="submit" name="selectSubmit">Valider
						<i class="material-icons right">send</i>
					</button>
				</form>
			</section>
			<section class="affichageSelect">
				<div class="row">
					<br>
					<?php
					if ( !empty($_POST)  &&   isset($_POST['selectSubmit'])) {
						$nb =  $_POST['table'];
						echo '<div class="card col s12 m6 l3"><table class="table striped">
						<tbody><thead><caption>Table du '.$nb. '</caption></thead>' ;						
						for ($i=1; $i <=10 ; $i++) { 
							$result = $nb * $i;
							echo '<tr>
							<td>'.$nb. ' x '.$i.'</td>
							<td> = </td>  
							<td>'.$result.'</td>
							</tr>';
						}
						echo '</tbody></table></div>'.PHP_EOL;
					}
					?>
				</div>
			</section>
			<section id="exercice3">
				<div class="row teal accent-4 white-text z-depth-1">
					<div class="col s2 m1">
						<i class="medium material-icons">looks_3</i>
					</div>
					<div class="col s10 m11 left-align">
						<h4>Choix simple ou multiples dans checkboxes</h4>
					</div>
				</div>
				<div class="row">
					<form action="index.php" method="post">
						Quelle table voulez-vous afficher?<br><br>						
						<label class="col s6 l3">
							<input type="checkbox"  name="choix[]" value="1" />
							<span>Table du 1</span>
						</label>
						<label class="col s6 l3">
							<input type="checkbox"  name="choix[]" value="2" />
							<span>Table du 2</span>
						</label>
						<label class="col s6 l3">
							<input type="checkbox"  name="choix[]" value="3" />
							<span>Table du 3</span>
						</label>
						<label class="col s6 l3">
							<input type="checkbox"  name="choix[]" value="4" />
							<span>Table du 4</span>
						</label>
						<label class="col s6 l3">
							<input type="checkbox"  name="choix[]" value="5" />
							<span>Table du 5</span>
						</label>
						<label class="col s6 l3">
							<input type="checkbox"  name="choix[]" value="6" />
							<span>Table du 6</span>
						</label>
						<label class="col s6 l3">
							<input type="checkbox"  name="choix[]" value="7" />
							<span>Table du 7</span>
						</label>
						<label class="col s6 l3">
							<input type="checkbox"  name="choix[]" value="8" />
							<span>Table du 8</span>
						</label>
						<label class="col s6 l3">
							<input type="checkbox"  name="choix[]" value="9" />
							<span>Table du 9</span>
						</label>
						<label class="col s6 l3">
							<input type="checkbox"  name="choix[]" value="10" />
							<span>Table du 10</span>
						</label>
					</div>
					<button class="btn waves-effect waves-light blue-grey darken-4" type="submit" name="checkboxSubmit">Valider
						<i class="material-icons right">send</i>
					</button>
				</form>				
			</section>
			<div class="affichageCheckbox row">
				<?php
				if (!empty($_POST)  &&   isset($_POST['checkboxSubmit'])) {
					$choix = $_POST['choix'];
					$choixLength = count($choix);
					for ($i=0; $i < $choixLength; $i++) { 
						$nb = $choix[$i];
						echo '<div class="card col s12 m6 l3"><table class="table striped">
						<tbody><thead><caption>Table du '.$nb. '</caption></thead>' ;
						for ($j=1; $j <=10 ; $j++) { 
							$result = $nb * $j;
							echo '<tr>
							<td>'.$nb. ' x '.$j.'</td>
							<td> = </td>  
							<td>'.$result.'</td>
							</tr>';
						}
						echo "</tbody></table></div>".PHP_EOL;
					}
				}
				?>
			</div>
			<section id="exercice4">
				<div class="row z-depth-1 teal accent-4 white-text">
					<div class="col s2 m1">
						<i class="medium material-icons">looks_4</i>
					</div>
					<div class="col s10 m11 left-align">
						<h4>Mode révision</h4>
					</div>
				</div>
				<div class="row">
					<form method="post" action="index.php">
						Quelle table voulez-vous réviser?<br>						
						<div class="input-field col s12 m6">
							<select name="revisTable" id="select">
								<option value="1">Table de 1</option>
								<option value="2">Table de 2</option>
								<option value="3">Table de 3</option>
								<option value="4">Table de 4</option>
								<option value="5">Table de 5</option>
								<option value="6">Table de 6</option>
								<option value="7">Table de 7</option>
								<option value="8">Table de 8</option>
								<option value="9">Table de 9</option>
								<option value="10">Table de 10</option>
							</select>
						</div>
					</div>
					<button class="btn waves-effect waves-light blue-grey darken-4" type="submit" name="revisSubmit">Valider
						<i class="material-icons right">send</i>
					</button>
					<?php 
			// si user a choisi une table dans select -> random + question
					if (isset($_POST['revisSubmit'])) {
						$randNb = rand(1,10);
						echo '<div class="row">
						<div class="card col s12 m6 pink lighten-1 center-align white-text"><h6>'.$randNb. " x ".$_POST['revisTable'].' =  ? </h6></div></div>';
					}
					?>
					<div class="row">
						<div class="input-field col s12 m6">
							<input name="reponse" type="text" class="validate">
							<label>Votre réponse: </label>
						</div>
					</div>
					<input type="hidden" name="randNbHidden" value="<?php if (isset($randNb)){ echo $randNb;} ?>">
					<input type="hidden" name="revisTableHidden" value="<?php if (isset($_POST['revisTable'])){echo $_POST['revisTable'];} ?>">
					<button class="btn waves-effect waves-light blue-grey darken-4" type="submit" name="reponseSubmit">Valider
						<i class="material-icons right">send</i>
					</button>
					<?php 			
			// si user a posté sa réponse:
					if (isset($_POST['reponseSubmit'])) {
						$randNbHidden = $_POST['randNbHidden'];
						$revisTableHidden = $_POST['revisTableHidden'];
						$reponse = $_POST['reponse'];
						$result = $revisTableHidden * $randNbHidden;
						if ($result == $reponse) {
							echo '<div class="row verdict"><div class="card col s12 m6 center-align teal-text"><i class="large material-icons">thumb_up</i><h6>BRAVO!</h6></div></div>';
						}else{
							echo '<div class="row verdict"><div class="card col s12 m6 center-align white-text red darken-3"><i class="large material-icons">thumb_down</i><h6>FAUX !</h6><br> <p>La bonne réponse était : '.$result. '</p></div></div>';
						}
					}
					?>
				</form>
			</div>
		</div>
		<footer class="page-footer teal">
			<div class="footer-copyright teal">
				<div class="container">
					© 2018 / Dorothée VIARD
				</div>
			</div>
		</footer>
		<script
		src="https://code.jquery.com/jquery-3.3.1.js"
		integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
		crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
		<script>
			$(document).ready(function(){
				$('.sidenav').sidenav();
			});
			$(document).ready(function(){
				$('select').formSelect();
			});
		</script>
	</body>
	</html>