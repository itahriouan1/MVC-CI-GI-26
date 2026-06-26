<?php

use App1\Repository\PersonneRepository;
use Core\DB\Connexion;

require "vendor/autoload.php";

try{
$personneRepository = new PersonneRepository();
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

// var_dump($data);
}
catch(PDOException $e){
    echo $e->getMessage();
}
