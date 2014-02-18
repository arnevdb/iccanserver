<?php

class Tag extends Identifiable
{
    private $_naam = '';
    private $_omschrijving='';

    public function __construct()
    {
        parent::__construct();
    }

    public function getNaam()
    {
        return $this->_naam;
    }

    public function setNaam($naam)
    {
        $this->_naam = $naam;
    }
    public function getOmschrijving()
    {
        return $this->_omschrijving;
    }
    public function setOmschrijving($omschrijving)
    {
        $this->_omschrijving = $omschrijving;
    }

    public function __toString()
    {
        return 'een tag ' . $this->getNaam();
    }

    public function toArray()
    {
        $fields['naam'] = $this->_naam;
        $fields['omschrijving'] = $this->_omschrijving;
        return $fields;
    }
}