<?php

class Homes extends Model
{
    public function __construct()
    {
        $this->table = "webtoon";
        $this->getConnection();
    }

    public function findBySlug(string $slug)
    {
        $sql = "SELECT * FROM ". $this->table ." WHERE slug=" .$slug;
        $query = $this->_connexion->prepare($sql);
        $query->execute();

        return $query->fetch();
    }
}