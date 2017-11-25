<?php
require_once 'modele/dao/contactDAO.php';
require_once 'modele/bdd/bd.contact.inc.php';

$unContactDAO = new ContactDAO();

if (isset($_POST['nom']) && isset($_POST['prenom']) && !empty($_POST['nom']) && !empty($_POST['prenom'])) {
	$newContact = new Contact();
	$newContact->setNomC($_POST['nom']);
	$newContact->setPrenomC($_POST['prenom']);
	$newContact->setSocieteC($_POST['societe']);
	$newContact->setAdresseC($_POST['adresse']);
	$newContact->setDatenaissanceC($_POST['date']);
	$newContact->setCommentaireC($_POST['message']);
	$unContactDAO->addContact($newContact);
	$leContact = $unContactDAO->getLastInsertedContact();

} else {
	echo ("Veuillez remplir les champs obligatoires");
}


include 'vue/vueContactCreated.php';