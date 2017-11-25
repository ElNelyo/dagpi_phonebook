
<div id="fh5co-hero">
	<a class="smoothscroll fh5co-arrow to-animate hero-animate-4" href="#fh5co-main"><i class="ti-angle-down"></i></a> <!-- End fh5co-arrow -->
	<div class="container">
		<div class="col-md-8 col-md-offset-2">
			<div class="fh5co-hero-wrap">
				<div class="fh5co-hero-intro">
					<h1 class="to-animate hero-animate-1">Création d'un téléphone.</h1>
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
					<i class="ti-mobile"></i>
				</div>
				<div class="row">
					<div class="col-md-12 animate-box">
						<h2 class="fh5co-uppercase-heading-sm text-center">Remplissez le formulaire</h2>
						<div class="fh5co-spacer fh5co-spacer-sm"></div>
					</div>
					<div class="col-md-8 col-md-offset-2 animate-box">
						<form action="index.php?page=phoneCreated" method="post">
							<div class="col-md-6">
								<div class="form-group">
									<label class="sr-only" for="name">Indicatif</label> <input class="form-control input-lg" name="indicatif" pattern="^\+\d{1,3}|\-\d{3}$" placeholder="Indicatif*" required="" type="tel">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="sr-only" for="prenom">Numéro</label> <input class="form-control input-lg" name="numero" pattern="^(\d\d){4}(\d\d)$" placeholder="Numéro*" title="ex : 0605040302" type="tel">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label class="sr-only" for="type">Type</label> <select class="form-control input-lg" name="selectType">
										<option selected value="">
											Type*
										</option>
										<option value="Professionnel">
											Professionnel
										</option>
										<option value="Fixe">
											Fixe
										</option>
										<option value="Portable">
											Portable
										</option>
										<option value="Fax">
											Fax
										</option>
									</select>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label class="sr-only" for="contact">Contact</label> <select class="form-control input-lg" name="selectContact">
										<?php 
                                        if (isset($id)) {
                                            echo ('<option value='.$leContact->getIdC().' selected>'.$leContact->getNomC().' - '.$leContact->getPrenomC().'</option>');
                                        } else {
                                            echo ('<option value="" disable selected>Contact*</option>');
                                            foreach ($lesContacts as $c) {
                                                echo ('<option value='.$c->getIdC().'>'.$c->getNomC().' - '.$c->getPrenomC().'</option>');
                                            }
                                        } 
										?>
									</select>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input class="btn btn-primary btn-lg" type="submit" value="Ajouter">
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