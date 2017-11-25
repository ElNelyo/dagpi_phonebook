<div id="fh5co-hero">
	<a class="smoothscroll fh5co-arrow to-animate hero-animate-4" href="#fh5co-main"><i class="ti-angle-down"></i></a> <!-- End fh5co-arrow -->
	<div class="container">
		<div class="col-md-8 col-md-offset-2">
			<div class="fh5co-hero-wrap">
				<div class="fh5co-hero-intro">
					<h1 class="to-animate hero-animate-1">Annuaire téléphonique.</h1>
					<h2 class="to-animate hero-animate-2">Réalisé par STERN - BAQUER - YAKER</h2>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="fh5co-main">
	<div class="container">
		<div class="row" id="fh5co-features">
			<div class="col-md-12 col-sm-6 text-center fh5co-feature feature-box">
				<div class="fh5co-feature-icon">
					<i class="ti-agenda"></i>
				</div>
				<table class="table table-bordered" id="myTable">
					<thead>
						<tr>
							<th>Nom</th>
							<th>Prénom</th>
						</tr>
					</thead>
					<tbody>





						<?php

                        foreach ($lesContacts as $c) {
                            echo "<tr>";
                            echo "<td><a href='index.php?page=contact&id=".$c->getIdC()."'>".$c->getNomC()."</a></td>";
                            echo "<td>".$c->getPrenomC()."</td>";
                            echo "<td><a id='supprimer' href='index.php?page=accueil&id=".$c->getIdC()."'/><button type='submit' name='supprimer' class='btn btn-danger'
														 onclick=\"return confirm('Êtes-vous sûre de supprimer ce contact?')\"
														 >Supprimer</button></a></td>";
                            echo "</tr>";
                        }
                        ?>
					</tbody>
				</table>
			</div>
		</div><!-- END row -->
		<div class="fh5co-spacer fh5co-spacer-md"></div><!-- End Spacer -->
	</div><!-- END fhtco-main -->
	<script>
	       $("#myTable").simplePagination({
	           perPage: 10,
	           containerClass: '',
	           previousButtonClass: 'btn btn-primary',
	           nextButtonClass: 'btn btn-primary',
	           previousButtonText: 'Précedent',
	           nextButtonText: 'Suivant',
	           currentPage: 1
	       });
	</script>
</div>
