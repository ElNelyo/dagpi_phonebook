<?php
require_once("modele/dao/contactDAO.php");

$unContactDAO = new ContactDAO();
$lesContacts = $unContactDAO->getContact();

if (isset($_GET["id"])){
	$id = true;
	$leContact = $unContactDAO->getContactById($_GET["id"]);
}

include 'vue/vueCreatePhone.php';