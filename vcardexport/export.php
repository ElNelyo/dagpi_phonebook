<?php
session_start();
$NOM = $_SESSION['NOM'];
$PRENOM = $_SESSION['PRENOM'];
$NAISS= $_SESSION['NAISSANCE'];
$BOITE = $_SESSION['BOITE'];
$ADRESSE = $_SESSION['ADRESSE'];
$NOTE = $_SESSION['COMMENTAIRE'];
if(isset($_SESSION['FIXE'])){
$TELFIXE = $_SESSION['FIXE'];
}

if(isset($_SESSION['MOBILE'])){
$TELMOBILE = $_SESSION['MOBILE'];
}

$TITLE ="Exported from phonebook";
$TELFAXE="00";
$SEX ="Mr";



$content = "BEGIN:VCARD \n";
$content.="VERSION 4.0\n";
$content.="N:".$NOM.";".$PRENOM.";;".$SEX.";\n";
$content.="FN:".$NOM." ".$PRENOM."\n";
$content.="ORG:".$BOITE."\n";
$content.="TITLE:".$TITLE."\n";
$content.="BDAY:".$NAISS."\n";
if(isset($TELMOBILE)){
$content.="TEL;CELL:".$TELMOBILE."\n";
}
if(isset($TELFIXE)){
$content.="TEL;HOME:".$TELFIXE."\n";
}


$content.="ADR;".$ADRESSE."\n";
$content.="NOTE:".$NOTE."\n";
$content.="END:VCARD";

$handle = fopen($NOM."_".$PRENOM.".vcf","wb");
fwrite($handle,$content);
    fclose($handle);

    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename='.basename($NOM."_".$PRENOM.".vcf"));
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($NOM."_".$PRENOM.".vcf"));
    readfile($NOM."_".$PRENOM.".vcf");
    exit;






?>
