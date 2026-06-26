<?php

namespace App1\Repository;

use Core\DB\Connexion;
use PDO;

class PersonneRepository {
    public function find(){
        $connexion = new Connexion();
        $pdo = $connexion->getPdo();
        $stm = $pdo->prepare("select * from personne");
        $stm->execute();
        $personnes = $stm->fetchAll(PDO::FETCH_CLASS, "\\App1\\Entity\\Personne");
        return $personnes;
    }    
}