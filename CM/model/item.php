<?php

class item 
{
    private $_ID;
    private $_name;
    private $_price;
    private $_description;
    private $_image;
    
    public function getID()
    {
        return $this->_ID;
    }

    public function setID($ID)
    {
        $this->_ID = $ID;
    }
    
    public function getName()
    {
        return $this->_name;
    }

    public function setName($name)
    {
        if (!filter_var($username, FILTER_VALIDATE_REGEXP, array('options' =>  array('regexp' => "/^[a-zA-Z]{5,50}$/"))))
            return false;

        $this->_name = $name;

        return true;
    }
    
    public function getPrice()
    {
        return $this->_price;
    }

    public function setPrice($price)
    {
        $this->_price= $price;

        return true;
    }
        
    public function getDescription()
    {
        return $this->_description;
    }

    public function setDescription($description)
    {
        if (!filter_var($description, FILTER_VALIDATE_REGEXP, array('options' =>  array('regexp' => "/^[a-zA-Z]{5,50}$/"))))
            return false;

        $this->_description = $description;

        return true;
    }
    
    public function getImage()
    {
        return $this->_image;
    }

    public function setImage($image)
    {
        $this->_image = $image;
    }
}

?>