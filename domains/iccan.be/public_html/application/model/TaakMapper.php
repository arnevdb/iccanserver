<?php
class TaakMapper extends Mapper
{
    public function __construct()
    {
        parent::__construct('taak', 'Taak');
    }

    public function getAll()
    {
        $query = "
            SELECT *
            FROM taak
            ORDER BY id
        ";

        return $this->_db->queryAll($query, $this->_type);
    }
    public function getByvolgnummer($volgnummer){
        $query = "
            Select *
            From vraag
            where volgnummer = ?
            ";

        return $this->_db->queryOne($query, $this->_type, array($volgnummer));
    }

}