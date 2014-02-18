<?php

class Tagvmanager extends Identifiable
{
    private $_tagid = '';
    private $_vraagid='';

    public function __construct()
    {
        parent::__construct();
    }

    public function getTagid()
    {
        return $this->_tagid;
    }

    public function setTagid($naam)
    {
        $this->_tagid = $naam;
    }
    public function getVraagid()
    {
        return $this->_vraagid;
    }
    public function setVraagid($omschrijving)
    {
        $this->_vraagid = $omschrijving;
    }

    public function __toString()
    {
        return 'een tag ' . $this->getTagid();
    }

    public function toArray()
    {
        $fields['tagid'] = $this->_tagid;
        $fields['vraagid'] = $this->_vraagid;
        return $fields;
    }
}