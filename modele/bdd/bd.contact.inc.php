<?php

class Contact{
    private $_idC;
    private $_nomC;
    private $_prenomC;
    private $_societeC;
    private $_adresseC;
    private $_datenaissanceC;
    private $_commentaireC;

    public function __construct(){

    }

    /**
     * @return mixed
     */
    public function getIdC()
    {
        return $this->_idC;
    }

    /**
     * @param mixed $_idC
     *
     * @return self
     */
    public function setIdC($_idC)
    {
        $this->_idC = $_idC;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNomC()
    {
        return $this->_nomC;
    }

    /**
     * @param mixed $_nomC
     *
     * @return self
     */
    public function setNomC($_nomC)
    {
        $this->_nomC = $_nomC;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrenomC()
    {
        return $this->_prenomC;
    }

    /**
     * @param mixed $_prenomC
     *
     * @return self
     */
    public function setPrenomC($_prenomC)
    {
        $this->_prenomC = $_prenomC;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSocieteC()
    {
        return $this->_societeC;
    }

    /**
     * @param mixed $_societeC
     *
     * @return self
     */
    public function setSocieteC($_societeC)
    {
        $this->_societeC = $_societeC;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAdresseC()
    {
        return $this->_adresseC;
    }

    /**
     * @param mixed $_adresseC
     *
     * @return self
     */
    public function setAdresseC($_adresseC)
    {
        $this->_adresseC = $_adresseC;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDatenaissanceC()
    {
        return $this->_datenaissanceC;
    }

    /**
     * @param mixed $_datenaissanceC
     *
     * @return self
     */
    public function setDatenaissanceC($_datenaissanceC)
    {
        $this->_datenaissanceC = $_datenaissanceC;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCommentaireC()
    {
        return $this->_commentaireC;
    }

    /**
     * @param mixed $_commentaireC
     *
     * @return self
     */
    public function setCommentaireC($_commentaireC)
    {
        $this->_commentaireC = $_commentaireC;

        return $this;
    }
}

?>