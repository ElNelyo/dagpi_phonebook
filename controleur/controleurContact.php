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
