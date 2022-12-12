<?php

abstract class Model
{
    private $host = "localhost";
    private $db_name = "webtoon";
    private $username = "root";
    private $password = "";

    protected $_connexion;

    public $table;
    public $id;

    public function getConnection()
    {
        $this->_connexion = null;

        try {

            $this->_connexion = new PDO('mysql:host='. $this->host . ';dbname='. $this->db_name, $this->username, $this->password);
            $this->_connexion->exec('set names utf8');

        } catch(PDOException $exception) {
            echo 'Erreur : '. $exception->getMessage();
        }
    }
}