<?php
class TagMapper extends Mapper
{
    public function __construct()
    {
        parent::__construct('tag', 'Tag');
    }

    public function getAll()
    {
        $query = "
            SELECT *
            FROM tag
            ORDER BY naam
        ";

        return $this->_db->queryAll($query, $this->_type);
    }
    public function getByName($tagName){
        $query = "
            Select *
            From tag
            where naam = ?
            ";

        return $this->_db->queryOne($query, $this->_type, array($tagName));
    }

    public function getTags($vraagid){
        $query = "
SELECT *
FROM  tag
WHERE id
IN (
SELECT tagid
FROM tagvmanager
WHERE vraagid = ?
)";

        return $this->_db->queryAll($query,$this->_type,$vraagid);
    }

}

