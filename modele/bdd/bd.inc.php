<?php
function connexion($unDsn,$unUser, $unPass) {
    try{
        return $uneConnex = new PDO($unDsn,$unUser, $unPass);
    }catch (PDOException $e) {
        die("erreur de connexion !" );
    }
}
