<?php

namespace App1\Controller;

use App1\Entity\Personne;
use App1\Repository\PersonneRepository;

class PersonneController {
    protected PersonneRepository $personneRepository;

    public function __construct()
    {
        $this->personneRepository = new PersonneRepository();
    }
    public function Ajouter() {
        $personneRepository = $this->personneRepository;
        $personne = new Personne();
        $personne->setNom("ouazzani");
        $personne->setPrenom("mohammed");
        $personne->setEmail("ouazzani@umi.ac.ma");
        $personneRepository->create($personne);
    }
    public function Supprimer(){
        $personneRepository = $this->personneRepository;
        $personne = $personneRepository->findById(15);
        $personneRepository->delete($personne);
    }

    public function Modifier(){
        $personneRepository = $this->personneRepository;
        $personne = $personneRepository->findById(1);
        $personne->setNom("ITAHRIOUAN");
        $personneRepository->update($personne);
    }
    public function Afficher(){
        $personneRepository = $this->personneRepository;
        $personnes = $personneRepository->find();
        $html = "<table>";
        foreach($personnes as $personne){
        $html .= "<tr>";
        $html .= "<td>";
        $html .= $personne->getId();
        $html .= "</td>";
        $html .= "<td>";
        $html .= $personne->getNom();
        $html .= "</td>";
        $html .= "<td>";
        $html .= $personne->getPrenom();
        $html .= "</td>";
        $html .= "<td>";
        $html .= $personne->getEmail();
        $html .= "</td>";
        $html .= "</tr>";
        }
        $html .= "</table>";
        echo $html;

    }
}