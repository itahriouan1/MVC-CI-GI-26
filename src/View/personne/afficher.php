<?php
/**
 * @var array $personnes
 */
 $html = "<table border=1>";
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
        $html .= "<td>";
        $html .= "<a href=''>supprimer</a>";
        $html .= "</td>";
        $html .= "<td>";
        $html .= "<a href=''>modifier</a>";
        $html .= "</td>";
        $html .= "</tr>";
        }
        $html .= "</table>";
        $html .= "<td>";
        $html .= "<a href=''>Nouvelle personne</a>";
        $html .= "</td>";
        echo $html;