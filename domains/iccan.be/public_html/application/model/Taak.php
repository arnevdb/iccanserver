<?php

class Taak extends Identifiable
{

    private $_volgnummer;
    private $_naam;
    private $_type;
    private $_omschrijving;
    private $_belangrijkheid;
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

    public function getVolgnummer () {
        return $this->_volgnummer;
    }

    public function setVolgnummer ($id) {
        $this->_volgnummer = $id;
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

    public function getBelangrijkheid () {
        return $this->_belangrijkheid;
    }

    public function setBelangrijkheid ($answers) {
        $this->_belangrijkheid = $answers;
    }

    public function toArray()
    {
        $fields['volgnummer'] = $this->_volgnummer;
        $fields['naam'] = $this->_naam;
        $fields['type'] = $this->_type;
        $fields['omschrijving'] = $this->_omschrijving;
        $fields['belangrijkheid'] = $this->_belangrijkheid;
        return $fields;
    }
    public function __toString()
    {
        return '' . $this->getNaam();
    }

}
