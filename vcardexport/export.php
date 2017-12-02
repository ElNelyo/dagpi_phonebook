<?php
$PRENOM = "CHARLY";
$NOM    = "STERN";
$SEX   ="Mr.";
$BOITE ="Moi Boite";
$TITLE ="Titre à mettre";
$NAISS ="25/10/1997";
$TELFIXE="0556";
$TELFAXE="0756";
$TELMOBILE="0656";
$ADRESSE ="30 rue chez moi";
$NOTE ="Ma note blabla";


$content = "BEGIN:VCARD \n";
$content.="VERSION 4.0\n";
$content.="N:".$NOM.";".$PRENOM.";;".$SEX.";\n";
$content.="FN:".$NOM." ".$PRENOM."\n";
$content.="ORG:".$BOITE."\n";
$content.="TITLE:".$TITLE."\n";
$content.="BDAY:".$NAISS."\n";
$content.="TEL;HOME:".$TELFIXE."\n";
$content.="TEL;CELL:".$TELMOBILE."\n";
$content.="TEL;FAXE:".$TELFAXE."\n";
$content.="ADR;".$ADRESSE."\n";
$content.="NOTE:".$NOTE."\n";
$content.="END:VCARD";



$fp = fopen($NOM."_".$PRENOM.".vcf","wb");
fwrite($fp,$content);
fclose($fp);
?>
