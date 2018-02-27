<?php

class Db
{
    public $database_name;
    private $connection;
    private $settings = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", PDO::ATTR_EMULATE_PREPARES => false, );

    function __construct($host, $user, $password, $database = "")
    {
        if (!isset($this->connection)) {
            $this->database_name = $database;
            $this->connection = new PDO(
                "mysql:host=$host;dbname=$database", $user, $password, $this->settings
            );
        }

    }

    function queryAll($sql, $parametres = array())
    {
        $return = $this->connection->prepare($sql);
        $return->setFetchMode(PDO::FETCH_ASSOC);
        $return->execute($parametres);
        return $return->fetchAll();

    }

    function querysingle($sql, $parametres = array())
    {

        $return = self::queryOne($sql, $parametres);
        return $return[0];
    }

    function queryOne($sql, $parametres = array())
    {
        $return = $this->connection->prepare($sql);
        $return->setFetchMode(PDO::FETCH_ASSOC);
        $return->execute($parametres);
        return $return->fetch();
    }

    function query($sql, $parametres = array())
    {
        $return = $this->connection->prepare($sql);
        $return->execute($parametres);
        return $return->rowCount();
    }

    public function getLastId()
    {
        return $this->connection->lastInsertId();
    }

}