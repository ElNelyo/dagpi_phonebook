<div id="fh5co-hero">
	<a class="smoothscroll fh5co-arrow to-animate hero-animate-4" href="#fh5co-main"><i class="ti-angle-down"></i></a> <!-- End fh5co-arrow -->
	<div class="container">
		<div class="col-md-8 col-md-offset-2">
			<div class="fh5co-hero-wrap">
				<div class="fh5co-hero-intro">
					<h1 class="to-animate hero-animate-1"><?php echo ($leContact->getNomC()." - ".$leContact->getPrenomC()) ?></h1>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="fh5co-main">
	<div class="container">
		<div class="row" id="fh5co-features">
			<div class="col-md-5 col-sm-6 text-center fh5co-feature feature-box">
				<div class="fh5co-feature-icon">
					<i class="ti-mobile"></i>
				</div>
				<div class="row">
					<div class="col-md-12 animate-box">
						<h2 class="fh5co-uppercase-heading-sm text-center">Numéros</h2>
						<div class="fh5co-spacer fh5co-spacer-sm"></div>
					</div>
					<div class="col-md-12 animate-box">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Indicatif</th>
									<th>Numéro</th>
									<th>Type</th>
								</tr>
							</thead>
							<tbody>
								<?php 
	                            foreach ($lesTelephones as $t) {
	                                echo "<tr>";
	                                    echo "<td>".$t->getIndicatifT()."</td>";
	                                    echo "<td>".$t->getNumeroT()."</td>";
	                                    echo "<td>".$t->getTypeT()."</td>";
	                                    echo "<td><a id='supprimer' href='index.php?page=contact&id=".$_GET['id']."&idT=".$t->getIdT()."' /><button type='submit' name='supprimer' class='btn btn-danger'>Supprimer</button></a></td>";
	                                echo "</tr>";
	                            }
	                            ?>
							</tbody>
						</table>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 animate-box">
						<?php echo '<a href="index.php?page=createPhone&id='.$_GET['id'].'">Ajouter un téléphone</a>' ?>
					</div>
				</div>
			</div>
			<div class="col-md-7 col-sm-6 text-center fh5co-feature feature-box">
				<div class="fh5co-feature-icon">
					<i class="ti-user"></i>
				</div>
				<div class="row">
					<div class="col-md-12 animate-box">
						<h2 class="fh5co-uppercase-heading-sm text-center">Informations</h2>
						<div class="fh5co-spacer fh5co-spacer-sm"></div>
					</div>
					<div class="col-md-8 col-md-offset-2 animate-box">
						<form method="post">
							<div class="col-md-6">
								<div class="form-group">
									<label class="sr-only" for="name">Nom</label> <input class="form-control input-lg" name="nom" placeholder="Nom" type="text">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="sr-only" for="email">Prenom</label> <input class="form-control input-lg" name="prenom" placeholder="Prénom" type="text">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label class="sr-only" for="societe">Societe</label> <input class="form-control input-lg" name="societe" placeholder="Société" type="text">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label class="sr-only" for="adresse">Adresse</label> <input class="form-control input-lg" name="adresse" placeholder="Adresse" type="text">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label class="sr-only" for="date">Date de naissance</label> <input class="form-control input-lg" name="date" placeholder="Date de naissance" type="text">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label class="sr-only" for="message">Commentaire</label> 
									<textarea class="form-control input-lg" name="message" placeholder="Commentaire" rows="3"><?php echo $leContact->getCommentaireC(); ?></textarea>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input class="btn btn-primary btn-lg" type="submit" value="Modifier">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div><!-- END row -->
		<div class="fh5co-spacer fh5co-spacer-md"></div><!-- End Spacer -->
	</div><!-- END fhtco-main -->
</div>