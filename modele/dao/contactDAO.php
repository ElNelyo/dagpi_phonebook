<?php
include_once "modele/bdd/bd.inc.php";
include_once "modele/dao/dao.inc.php";
require_once "modele/bdd/bd.contact.inc.php";

class ContactDAO extends DAO{
    private $_idC = 'id as _idC';
    private $_nomC = 'nom as _nomC';
    private $_prenomC = 'prenom as _prenomC';
    private $_societeC = 'societe as _societeC';
    private $_adresseC = 'adresse as _adresseC';
    private $_datenaissanceC = 'date_naissance as _datenaissanceC';
    private $_commentaireC = 'commentaire as _commentaireC';

    public function getContact(){
        try {
            $req=$this->prepare("SELECT $this->_idC, $this->_nomC, $this->_prenomC, $this->_societeC, $this->_adresseC, $this->_datenaissanceC, $this->_datenaissanceC, $this->_commentaireC FROM contact");
            $req->execute();
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $this->cursorToObjectArray($req);
    }

    public function getLastInsertedContact(){
        try {
            $req=$this->prepare("SELECT $this->_idC, $this->_nomC, $this->_prenomC, $this->_societeC, $this->_adresseC, $this->_datenaissanceC, $this->_datenaissanceC, $this->_commentaireC FROM contact ORDER BY id DESC LIMIT 1");
            $req->execute();
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $this->cursorToObject($req);
    }

    public function getContactById($id){
        try {
            $req = $this->prepare("SELECT $this->_idC, $this->_nomC, $this->_prenomC, $this->_societeC, $this->_adresseC, $this->_datenaissanceC, $this->_datenaissanceC, $this->_commentaireC FROM contact WHERE id=:id");
            $req->bindValue(':id', $id, PDO::PARAM_INT);
            $req->execute();
        
        } catch (PDOException $e) {
            print ERREUR . $e->getMessage();
            die();
        }
        return $this->cursorToObject($req);
    }

    public function addContact($unContact){
        try {
            $req=$this->prepare("INSERT INTO contact (nom, prenom, societe, adresse, date_naissance, commentaire) VALUES (:nom, :prenom, :societe, :adresse, :datenaissance, :commentaire)");
            $req->bindValue(':nom', $unContact->getNomC(), PDO::PARAM_STR);
            $req->bindValue(':prenom', $unContact->getPrenomC(), PDO::PARAM_STR);
            $req->bindValue(':societe', $unContact->getSocieteC(), PDO::PARAM_STR);
            $req->bindValue(':adresse', $unContact->getAdresseC(), PDO::PARAM_STR);
            $req->bindValue(':datenaissance', $unContact->getDatenaissanceC(), PDO::PARAM_STR);
            $req->bindValue(':commentaire', $unContact->getCommentaireC(), PDO::PARAM_STR);
            $resultat=$req->execute();

        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }

    public function deleteContact($unContact){
        try {
            $req=$this->prepare("DELETE FROM contact WHERE Id = :id");
            $req->bindValue(':id', $unContact->getIdC(), PDO::PARAM_INT);
            $resultat=$req->execute();

        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }

    public function updateContact($unContact, $unContactUpdate){
        try {
            $req = $this->prepare("UPDATE contact SET nom=:nom, prenom=:prenom, societe=:societe, adresse=:adresse, date_naissance=:datenaissance, commentaire=:commentaire WHERE id=:id");
            $req->bindValue(':nom', $unContactUpdate->getNomC(), PDO::PARAM_STR);
            $req->bindValue(':prenom', $unContactUpdate->getPrenomC(), PDO::PARAM_STR);
            $req->bindValue(':societe', $unContactUpdate->getSocieteC(), PDO::PARAM_STR);
            $req->bindValue(':adresse', $unContactUpdate->getAdresseC(), PDO::PARAM_STR);
            $req->bindValue(':datenaissance', $unContactUpdate->getDatenaissanceC(), PDO::PARAM_STR);
            $req->bindValue(':commentaire', $unContactUpdate->getCommentaireC(), PDO::PARAM_STR);
            $req->bindValue(':id', $unContact->getIdC(), PDO::PARAM_INT);
            $resultat = $req->execute();
        } catch (PDOException $e) {
            print ERREUR . $e->getMessage();
            die();
        }
        return $resultat;
    }
}

?>