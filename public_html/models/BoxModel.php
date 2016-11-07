<?php
/**
 * Model to control the box view
 *
 */

class BoxModel
{
    private $id;
    private $name;
    private $casinoId;
    private $serial;
    private $macAddress;
    private $promotions = array();

    public function __construct($values)
    {
        $this->createBoxWithValuesSet($values);
    }

    private function createBoxWithValuesSet($fieldArray){
        $this->setId($fieldArray['id']);
        $this->setName($fieldArray['name']);
        $this->setCasinoId($fieldArray['casino_id']);
        $this->setSerial($fieldArray['serial']);
        $this->setMacAddress($fieldArray['mac_address']);
    }

    /**
     * @param mixed $conn
     */
    public function setConn($conn)
    {
        $this->conn = $conn;
    }
    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    /**
     * @param mixed $casinoId
     */
    public function setCasinoId($casinoId)
    {
        $this->casinoId = $casinoId;
    }
    /**
     * @param mixed $serial
     */
    public function setSerial($serial)
    {
        $this->serial = $serial;
    }
    /**
     * @param mixed $macAddress
     */
    public function setMacAddress($macAddress)
    {
        $this->macAddress = $macAddress;
    }
    /**
     * @return PDO|string
     */
    public function getConn()
    {
        return $this->conn;
    }
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * @return mixed
     */
    public function getCasinoId()
    {
        return $this->casinoId;
    }
    /**
     * @return mixed
     */
    public function getSerial()
    {
        return $this->serial;
    }
    /**
     * @return mixed
     */
    public function getMacAddress()
    {
        return $this->macAddress;
    }
    /**
     * @return mixed
     */
    public function getPromotions()
    {
        return $this->promotions;
    }
    /**
     * @param mixed $promotions
     */
    public function setPromotions($promotions)
    {
        $this->promotions = $promotions;
    }
}