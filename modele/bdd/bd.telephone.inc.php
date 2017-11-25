<?php

class Telephone{
    private $_idT;
    private $_indicatifT;
    private $_numeroT;
    private $_typeT;
    private $_idContactT;

    public function __construct(){
    }

    /**
     * @return mixed
     */
    public function getIdT()
    {
        return $this->_idT;
    }

    /**
     * @param mixed $_idT
     *
     * @return self
     */
    public function setIdT($_idT)
    {
        $this->_idT = $_idT;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIndicatifT()
    {
        return $this->_indicatifT;
    }

    /**
     * @param mixed $_indicatifT
     *
     * @return self
     */
    public function setIndicatifT($_indicatifT)
    {
        $this->_indicatifT = $_indicatifT;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumeroT()
    {
        return $this->_numeroT;
    }

    /**
     * @param mixed $_numeroT
     *
     * @return self
     */
    public function setNumeroT($_numeroT)
    {
        $this->_numeroT = $_numeroT;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTypeT()
    {
        return $this->_typeT;
    }

    /**
     * @param mixed $_typeT
     *
     * @return self
     */
    public function setTypeT($_typeT)
    {
        $this->_typeT = $_typeT;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdContactT()
    {
        return $this->_idContactT;
    }

    /**
     * @param mixed $_idContactT
     *
     * @return self
     */
    public function setIdContactT($_idContactT)
    {
        $this->_idContactT = $_idContactT;

        return $this;
    }
}

?>