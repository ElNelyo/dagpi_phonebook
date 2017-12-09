<?php
	$myLogFiles = fopen("../downloaded_files/log.txt", "a+");
  print_r($_FILES);

	if(isset($_FILES['userfile']['name'] )){
		if ($_FILES['userfile']['error'] > 0){
			fputs($myLogFiles,"Erreur lors du transfert"."\n");

		}else{
			if ($_FILES['userfile']['size'] > 200000){
				fputs($myLogFiles,"Image trop grande"."\n");
			}else{
					$extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
					$extension_upload = strtolower(  substr(  strrchr($_FILES['userfile']['name'], '.')  ,1)  );
						if ( in_array($extension_upload,$extensions_valides) ){
							$resultat = move_uploaded_file($_FILES['userfile']['tmp_name'],"../downloaded_files/".$_POST['nom']."_".$_POST['prenom'].".png");
              header('Location: ../index.php?page=contact&id='.$_POST['id']);
              exit();


						}else{
							fputs($myLogFiles,"Extension non valide"."\n");
						}

			}
		}
	}else{
		fputs($myLogFiles,"Aucune image téléchargée"."\n");

	}

?>
