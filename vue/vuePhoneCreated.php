<div id="fh5co-hero">
	<div class="container">
		<div class="col-md-8 col-md-offset-2">
			<div class="fh5co-hero-wrap">
				<div class="fh5co-hero-intro">
					<h1 class="to-animate hero-animate-1">
						Le téléphone 
						<b>
							<?php echo ($leTelephone->getIndicatifT()." - ".$leTelephone->getNumeroT())?>
						</b> 
						a bien été ajouté au contact
						 <?php echo '<a href="index.php?page=contact&id='.$leContact->getIdC().'"><b>'?>
						 <?php echo ($leContact->getNomC()." - ".$leContact->getPrenomC())?>
						 <?php echo '</b></a>'?>.
					</h1>
				</div>
			</div>
		</div>
	</div>
</div>