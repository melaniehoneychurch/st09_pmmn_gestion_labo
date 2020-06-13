<?php
namespace App\Entity;

class ProductSearch {


    /**
     * @var string|null
     */
    private $frenchName;

    /**
     * Undocumented variable
     *
     * @var string|null
     */
    private $casNumber;

    /**
     * Undocumented variable
     *
     * @var string|null
     */
    private $storage;

    /**
     * Undocumented variable
     *
     * @var string|null
     */
    private $trashCan;

    /**
     * Undocumented variable
     *
     * @var string|null
     */
    private $alphabet;

    /**
     * Undocumented variable
     *
     * @var string|null
     */
    private $date;

    
    
    

    /**
     * Get the value of frenchName
     *
     * @return  string|null
     */ 
    public function getFrenchName()
    {
        return $this->frenchName;
    }

    /**
     * Set the value of frenchName
     *
     * @param  string|null  $frenchName
     *
     * @return  self
     */ 
    public function setFrenchName($frenchName)
    {
        $this->frenchName = $frenchName;

        return $this;
    }

    /**
     * Get undocumented variable
     *
     * @return  string|null
     */ 
    public function getCasNumber()
    {
        return $this->casNumber;
    }


    /**
     * Set undocumented variable
     *
     * @param  string|null  $casNumber  Undocumented variable
     *
     * @return  self
     */ 
    public function setCasNumber($casNumber)
    {
        $this->casNumber = $casNumber;

        return $this;
    }

    /**
     * Get undocumented variable
     *
     * @return  string|null
     */ 
    public function getStorage()
    {
        return $this->storage;
    }

    /**
     * Set undocumented variable
     *
     * @param  string|null  $storage  Undocumented variable
     *
     * @return  self
     */ 
    public function setStorage($storage)
    {
        $this->storage = $storage;

        return $this;
    }

    /**
     * Get undocumented variable
     *
     * @return  string|null
     */ 
    public function getTrashCan()
    {
        return $this->trashCan;
    }

    /**
     * Set undocumented variable
     *
     * @param  string|null  $trashCan  Undocumented variable
     *
     * @return  self
     */ 
    public function setTrashCan($trashCan)
    {
        $this->trashCan = $trashCan;

        return $this;
    }

    /**
     * Get undocumented variable
     *
     * @return  string|null
     */ 
    public function getAlphabet()
    {
        return $this->alphabet;
    }

    /**
     * Set undocumented variable
     *
     * @param  string|null  $alphabet  Undocumented variable
     *
     * @return  self
     */ 
    public function setAlphabet($alphabet)
    {
        $this->alphabet = $alphabet;

        return $this;
    }

    /**
     * Get undocumented variable
     *
     * @return  string|null
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set undocumented variable
     *
     * @param  string|null  $date  Undocumented variable
     *
     * @return  self
     */ 
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }
}