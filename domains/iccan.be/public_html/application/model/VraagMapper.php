<?php
class VraagMapper extends Mapper
{
    public function __construct()
    {
        parent::__construct('vraag', 'Vraag');
    }

    public function getAll()
    {
        $query = "
            SELECT *
            FROM vraag
            ORDER BY volgnummer
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