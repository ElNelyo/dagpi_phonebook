<?php

require 'configs/param.inc.php';

if (isset($_GET['page'])){
    switch ($_GET['page']) {
        case 'createContact':
            require 'controleur/controleurCreateContact.php';
            break;
        case 'contactCreated':
            require 'controleur/controleurContactCreated.php';
            break;
        case 'createPhone':
            require 'controleur/controleurCreatePhone.php';
            break;
        case 'phoneCreated':
            require 'controleur/controleurPhoneCreated.php';
            break;
        case 'contact':
            require 'controleur/controleurContact.php';
            break;

        default:
            require 'controleur/controleurAccueil.php';
            break;

    }
}else{
      require 'controleur/controleurAccueil.php';
}

?>
