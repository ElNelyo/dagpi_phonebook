<?php
include_once "configs/param.inc.php";


abstract class DAO extends PDO{
        public function __construct(){
        parent::__construct(Param::$dsn, Param::$login, Param::$mdp);
        
    }

    protected function cursorToObjectArray($curseur){
        return $tab = $curseur->fetchAll(PDO::FETCH_CLASS, substr(get_class($this),0,-3));
    }
    
    protected function cursorToObject($curseur){
        $curseur->setFetchMode(PDO::FETCH_CLASS, substr(get_class($this),0,-3));
        return $curseur->fetch(PDO::FETCH_CLASS);
    }
    
}


?>