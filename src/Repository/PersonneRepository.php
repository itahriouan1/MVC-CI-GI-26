<?php

namespace App1\Repository;

use App1\Entity\Personne;
use Core\DB\Connexion;
use PDO;

class PersonneRepository {
    protected Connexion $connexion;

    public function __construct()
    {
        $this->connexion = new Connexion();
    }
    public function find(){
        $pdo = $this->connexion->getPdo();
        $stm = $pdo->prepare("select * from personne");
        $stm->execute();
        $personnes = $stm->fetchAll(PDO::FETCH_CLASS, "\\App1\\Entity\\Personne");
        return $personnes;
    }  
    public function findById(int $id): ?Personne
    {
        $connexion = $this->connexion;
        $pdo = $connexion->getPdo();
        $stm = $pdo->prepare("select * from personne where id=:id");
        $stm->bindValue("id",$id,PDO::PARAM_INT);
        $stm->execute();
        $personnes = $stm->fetchAll(PDO::FETCH_CLASS, "\\App1\\Entity\\Personne");
        return (empty($personnes))?null:$personnes[0];
    }  
    public function create(Personne $personne): void {
        $connexion = $this->connexion;
        $pdo = $connexion->getPdo();
        $stm = $pdo->prepare("insert into personne values(DEFAULT,:nom,:prenom,:email)");
        $stm->bindValue("nom",$personne->getNom(),PDO::PARAM_STR);
        $stm->bindValue("prenom",$personne->getPrenom(),PDO::PARAM_STR);
        $stm->bindValue("email",$personne->getEmail(),PDO::PARAM_STR);
        $stm->execute();
    }
    public function delete(Personne $personne): void {
        $connexion = $this->connexion;
        $pdo = $connexion->getPdo();
        $stm = $pdo->prepare("delete from personne where id=:id");
        $stm->bindValue("id",$personne->getId(),PDO::PARAM_INT);
        $stm->execute();
    }
    public function update(Personne $personne): void {
        $connexion = $this->connexion;
        $pdo = $connexion->getPdo();
        $stm = $pdo->prepare("update personne set nom=:nom, prenom=:prenom, email=:email where id=:id");
        $stm->bindValue("id",$personne->getId(),PDO::PARAM_INT);
        $stm->bindValue("nom",$personne->getNom(),PDO::PARAM_STR);
        $stm->bindValue("prenom",$personne->getPrenom(),PDO::PARAM_STR);
        $stm->bindValue("email",$personne->getEmail(),PDO::PARAM_STR);
        $stm->execute();
    }
    
}