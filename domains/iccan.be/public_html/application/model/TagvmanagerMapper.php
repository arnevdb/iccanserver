<?php
class TagvmanagerMapper extends Mapper
{
    public function __construct()
    {
        parent::__construct('tagvmanager', 'Tagvmanager');
    }

    public function getAll()
    {
        $query = "
            SELECT *
            FROM tagvmanager
            ORDER BY id
        ";

        return $this->_db->queryAll($query, $this->_type);
    }


}

