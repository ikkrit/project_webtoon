<?php

class Home extends Model
{
    public function __construct()
    {
        $this->table = "webtoon";
        $this->getConnection();
    }
}