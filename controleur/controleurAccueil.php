<?php
include 'modele/DAO/contactDAO.php';

$unContactDAO = new ContactDAO();
$lesContacts = $unContactDAO->getContact();

if (isset($_GET['id'])) {
	$unContactDAO->deleteContact($unContactDAO->getContactById($_GET['id']));
	header('Location: index.php?page=accueil');
}

require_once 'vue/vueAccueil.php';