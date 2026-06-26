<?php

namespace App1\Entity;

class Personne {
    protected int $id;
    protected string $nom;
    protected string $prenom;
    protected string $email;

    /**
     * Get the value of id
     */ 
    public function getId() :int 
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */ 
    public function setId(int $id) :void
    {
        $this->id = $id;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     */ 
    public function setNom(string $nom) :void
    {
        $this->nom = $nom;

    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom() :string
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     */ 
    public function setPrenom(string $prenom) :void
    {
        $this->prenom = $prenom;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail() :string
    {
        return $this->email;
    }

    /**
     * Set the value of email
     */ 
    public function setEmail(string $email) :void
    {
        $this->email = $email;
    }
}