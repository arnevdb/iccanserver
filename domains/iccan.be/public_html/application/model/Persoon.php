<?php

class Persoon extends Identifiable
{
    private $_naam;
    private $_email;
    private $_passwoord;
    private $_type;
    private $_voornaam;
    private $_geboortedatum;
    private $_geslacht;
    private $_gebruikersnaam;

    function __construct()
    {
    }

    public function setGeboortedatum($geboortedatum)
    {
        $this->_geboortedatum = $geboortedatum;
    }
    public function getGeboortedatum()
    {
        return $this->_geboortedatum;
    }
    public function setGebruikersnaam($gebruikersnaam)
    {
        $this->_gebruikersnaam = $gebruikersnaam;
    }
    public function getGebruikersnaam()
    {
        return $this->_gebruikersnaam;
    }
        public function setGeslacht($geslacht)
        {
            $this->_geslacht = $geslacht;
        }
    public function getGeslacht()
    {
        return $this->_geslacht;
    }
    public function setVoornaam($voornaam)
    {
        $this->_voornaam = $voornaam;
    }
    public function getVoornaam()
    {
        return $this->_voornaam;
    }
    public function setType($isadmin)
    {
        $this->_type = $isadmin;
    }

    public function getType()
    {
        return $this->_type;
    }
    public function getEmail()
    {
        return $this->_email;
    }

    public function setEmail($email)
    {
        $this->_email = $email;
    }

    public function getPasswoord()
    {
        return $this->_passwoord;
    }

    public function setPasswoord($password)
    {
        $this->_passwoord = $password;
    }

    public function setHashedPassword($password)
    {
        $this->_passwoord = $this->_hashPassword($password);
    }

    private function _hashPassword($password)
    {
        return sha1($password);
    }

    public function getNaam()
    {
        return $this->_naam;
    }

    public function checkPassword($password)
    {
        return ($this->_passwoord == $this->_hashPassword($password));
    }

    public function setNaam($naam)
    {
        $this->_naam = $naam;
    }

    public function __toString()
    {
        return $this->getNaam() . ' met als email ' . $this->getEmail();
    }

    public function toArray()
    {
        $fields['email'] = $this->_email;
        $fields['voornaam'] = $this->_voornaam;
        $fields['naam'] = $this->_naam;
        $fields['passwoord'] = $this->_passwoord;
        $fields['geboortedatum'] = $this->_geboortedatum;
        $fields['geslacht'] = $this->_geslacht;
        $fields['gebruikersnaam'] = $this->_gebruikersnaam;
        $fields['type'] = $this->_type;
        return $fields;
    }
    static function cmp_obj($a,$b){
        if($a->getPoints() ==$b->getPoints()){
            return 0;
        }
        return ($a->getPoints() < $b->getPoints()) ? +1 : -1;
    }
}