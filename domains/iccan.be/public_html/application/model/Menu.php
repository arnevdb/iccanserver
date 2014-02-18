<?php

class Menu
{
    private $_link;
    private $_description;

    public function __construct($link, $category)
    {
        $this->setLink($link);
        $this->setDescription($category);
    }

    public function setDescription($category)
    {
        $this->_description = $category;
    }

    public function getDescription()
    {
        return $this->_description;
    }

    public function setLink($link)
    {
        $this->_link = $link;
    }

    public function getLink()
    {
        return $this->_link;
    }
}