<?php
include_once "modele/bdd/bd.inc.php";
include_once "modele/dao/dao.inc.php";
require_once "modele/bdd/bd.telephone.inc.php";

class TelephoneDAO extends DAO{
    private $_idT = 'id as _idT';
    private $_indicatifT = 'indicatif as _indicatifT';
    private $_numeroT = 'numero as _numeroT';
    private $_typeT = 'type as _typeT';
    private $_idContactT = 'idContact as _idContactT';


    public function getTelephone(){
        try {
            $req=$this->prepare("SELECT $this->_idT, $this->_indicatifT, $this->_numeroT, $this->_typeT, $this->_idContactT FROM telephone");
            $req->execute();
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $this->cursorToObjectArray($req);
    }

    public function getTelephoneById($id){
        try {
            $req = $this->prepare("SELECT $this->_idT, $this->_indicatifT, $this->_numeroT, $this->_typeT, $this->_idContactT FROM telephone WHERE id=:id");
            $req->bindValue(':id', $id, PDO::PARAM_INT);
            $req->execute();
        
        } catch (PDOException $e) {
            print ERREUR . $e->getMessage();
            die();
        }
        return $this->cursorToObject($req);
    }

    public function getLastInsertedTelephone(){
        try {
            $req=$this->prepare("SELECT $this->_idT, $this->_indicatifT, $this->_numeroT, $this->_typeT, $this->_idContactT FROM telephone ORDER BY id DESC LIMIT 1");
            $req->execute();
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $this->cursorToObject($req);
    }


    public function getTelephoneByIdContact($id){
        try {
            $req = $this->prepare("SELECT $this->_idT, $this->_indicatifT, $this->_numeroT, $this->_typeT, $this->_idContactT FROM telephone WHERE idContact=:id");
            $req->bindValue(':id', $id, PDO::PARAM_INT);
            $req->execute();
        
        } catch (PDOException $e) {
            print ERREUR . $e->getMessage();
            die();
        }
        return $this->cursorToObjectArray($req);
    }

    public function addTelephone($unTelephone){
        try {
            $req=$this->prepare("INSERT INTO telephone (indicatif, numero, type, idContact) VALUES (:indicatif, :numero, :type, :idcontact)");
            $req->bindValue(':indicatif', $unTelephone->getIndicatifT(), PDO::PARAM_STR);
            $req->bindValue(':numero', $unTelephone->getNumeroT(), PDO::PARAM_STR);
            $req->bindValue(':type', $unTelephone->getTypeT(), PDO::PARAM_STR);
            $req->bindValue(':idcontact', $unTelephone->getIdContactT(), PDO::PARAM_INT);
            $resultat=$req->execute();

        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }

    public function deleteTelephone($unTelephone){
        try {
            $req=$this->prepare("DELETE FROM telephone WHERE id = :id");
            $req->bindValue(':id', $unTelephone->getIdT(), PDO::PARAM_INT);
            $resultat=$req->execute();

        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }
}

?>