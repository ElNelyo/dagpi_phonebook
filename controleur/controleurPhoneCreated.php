<?php
require_once 'modele/dao/telephoneDAO.php';
require_once 'modele/bdd/bd.telephone.inc.php';
require_once 'modele/dao/contactDAO.php';

$unTelephoneDAO = new TelephoneDAO();
$unContactDAO = new ContactDAO();

if (isset($_POST['indicatif']) && !empty($_POST['indicatif']) 
	&& isset($_POST['numero']) && !empty($_POST['numero'])
	&& isset($_POST['selectType']) && !empty($_POST['selectType'])
	&& isset($_POST['selectContact']) && !empty($_POST['selectContact'])) {
		$newTelephone = new Telephone();
		$leContact = $unContactDAO->getContactById($_POST['selectContact']);
		$newTelephone->setIndicatifT($_POST['indicatif']);
		$newTelephone->setNumeroT($_POST['numero']);
		$newTelephone->setTypeT($_POST['selectType']);
		$newTelephone->setIdContactT($leContact->getIdC());
		$unTelephoneDAO->addTelephone($newTelephone);
		$leTelephone = $unTelephoneDAO->getLastInsertedTelephone();
} else {
	echo "Veuillez remplir tous les champs obligatoires";
}

include 'vue/vuePhoneCreated.php';