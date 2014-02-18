<?php

class PersoonMapper extends Mapper
{
    public function __construct()
    {
        parent::__construct('persoon', 'persoon');
    }

    public function getPlayerForUsername($username)
    {
        $query = "
            SELECT *
            FROM persoon
            WHERE gebruikersnaam = ?
        ";

        return $this->_db->queryOne($query, $this->_type, array($username));
    }


    public function getAll()
    {
        $query = "
            SELECT *
            FROM persoon
            ORDER BY naam
        ";

        return $this->_db->queryAll($query, $this->_type);
    }



}