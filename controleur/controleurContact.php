<?php
require_once 'modele/dao/contactDAO.php';
require_once 'modele/bdd/bd.contact.inc.php';
require_once 'modele/dao/telephoneDAO.php';

$unContactDAO = new ContactDAO();
$unTelephoneDAO = new TelephoneDAO();

if (isset($_GET['id'])) {
	$leContact = $unContactDAO->getContactById($_GET['id']);
    $lesTelephones = $unTelephoneDAO->getTelephoneByIdContact($_GET['id']);
}

if (isset($_GET['idT'])) {
	$unTelephoneDAO->deleteTelephone($unTelephoneDAO->getTelephoneById($_GET['idT']));
	header('Location: index.php?page=contact&id='.$_GET['id']);
}



if(isset($_POST['updater'])){
	$newContact = new Contact();


	if(isset($_POST['nom']) && !empty($_POST['nom'])){
		$newContact->setNomC($_POST['nom']);
	}else{
		$newContact->setNomC($leContact->getNomC());
	}



	if(isset($_POST['prenom']) && !empty($_POST['prenom'])){
		$newContact->setPrenomC($_POST['prenom']);
	}else{
		$newContact->setPrenomC($leContact->getPrenomC());
	}


	if(isset($_POST['societe']) && !empty($_POST['societe'])){
		$newContact->setSocieteC($_POST['societe']);
	}else{
		$newContact->setSocieteC($leContact->getSocieteC());
	}

	if(isset($_POST['adresse']) && !empty($_POST['adresse'])){
		$newContact->setAdresseC($_POST['adresse']);
	}else{
		$newContact->setAdresseC($leContact->getAdresseC());
	}

	if(isset($_POST['date']) && !empty($_POST['date'])){
		$newContact->setDatenaissanceC($_POST['date']);
	}else{
		$newContact->setDatenaissanceC($leContact->getDatenaissanceC());
	}

		if(isset($_POST['message']) && !empty($_POST['message'])){
			$newContact->setCommentaireC($_POST['message']);
		}else{
			$newContact->setCommentaireC($leContact->getCommentaireC());
		}


	$unContactDAO->updateContact($leContact, $newContact);
	header('Location: index.php?page=contact&id='.$_GET['id'].'&update=1');


}


if (isset($_POST['nom']) && isset($_POST['prenom']) && !empty($_POST['nom']) && !empty($_POST['prenom'])) {
	$newContact = new Contact();
	$newContact->setNomC($_POST['nom']);
	$newContact->setPrenomC($_POST['prenom']);
	$newContact->setSocieteC($_POST['societe']);
	$newContact->setAdresseC($_POST['adresse']);
	$newContact->setDatenaissanceC($_POST['date']);
	$newContact->setCommentaireC($_POST['message']);
	$unContactDAO->updateContact($leContact, $newContact);
	header('Location: index.php?page=contact&id='.$_GET['id'].'&update=1');


}

if (isset($_GET['update'])) {
	echo '<script>alert("Le profil de '.$leContact->getNomC().' a bien été modifié")</script>';
}




include 'vue/vueContact.php';
