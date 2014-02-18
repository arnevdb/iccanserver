<?php

class Taak extends Identifiable
{


    private $_naam;
    private $_type;
    private $__bestand;
    private $_moeilijkheid;
    private $_omschrijving;
    private $_doel;


    public function setDoel($doel)
    {
        $this->_doel = $doel;
    }

    public function getDoel()
    {
        return $this->_doel;
    }
    private $_tags;


    public function setTags($tags)
    {
        if(is_array($tags)){
            $this->_tags = $tags;
        }else{
            $this->_tags = explode("/",$tags);
        }
    }


    public function getTags()
    {
        $tagstring=$this->_tags[0];
        for($i=1;$i<count($this->_tags);$i++){
            $tag = $this->_tags[$i];
            $tagstring.="/".$tag;
        }
        return $tagstring;
    }

    public function __construct()
    {
        parent::__construct();
    }

    public function getBestand () {
        return $this->__bestand;
    }

    public function setBestand ($id) {
        $this->__bestand = $id;
    }

    public function getNaam () {
        return $this->_naam;
    }

    public function setNaam ($text) {
        $this->_naam = $text;
    }

    public function getType () {
        return $this->_type;
    }

    public function setType ($type) {
        $this->_type = $type;
    }

    public function getOmschrijving () {
        return $this->_omschrijving;
    }

    public function setOmschrijving ($points) {
        $this->_omschrijving = $points;
    }

    public function getMoeilijkheid () {
        return $this->_moeilijkheid;
    }

    public function setMoeilijkheid ($answers) {
        $this->_moeilijkheid = $answers;
    }

    public function toArray()
    {
        $fields['bestand'] = $this->__bestand;
        $fields['naam'] = $this->_naam;
        $fields['type'] = $this->_type;
        $fields['omschrijving'] = $this->_omschrijving;
        $fields['moeilijkheid'] = $this->_moeilijkheid;
        $fields['doel'] = $this->_doel;
        return $fields;
    }
    public function __toString()
    {
        return '' . $this->getNaam();
    }

}
