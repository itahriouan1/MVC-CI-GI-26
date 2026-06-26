<?php

namespace Core\DB;

use PDO;
use PDOException;

class Connexion {
    protected PDO $pdo;

    public function __construct()
    {
        try{
        $content = file_get_contents(__DIR__."\\..\\..\\Config\\DB.json");
        $config = json_decode($content);
        $pdo = new PDO("mysql:host=".$config->host.";dbname=".$config->dbname,
        $config->username,$config->password);
        $this->pdo = $pdo;
        }
        catch(PDOException $e){
        echo $e->getMessage();
}
    }
    

    /**
     * Get the value of pdo
     */ 
    public function getPdo() : PDO
    {
        return $this->pdo;
    }


}