<?php

class Salles{
    private $id=null;
    private $nom=null;
    private $nbrSalles=null;
    private $typeSalles=null;
   
    function __construct($id, $nom, $nbrSalles, $typeSalles){
        $this->id=$id;
        $this->nom=$nom;
        $this->nbrSalles=$nbrSalles;
        $this->typeSalles=$typeSalles;
    }
    function getId(){
        return $this->id;
    }
    function getNom(){
        return $this->nom;
    }
    function getNbrSalles(){
        return $this->nbrSalles;
    }
    function getTypeSalles(){
        return $this->typeSalles;
    }
    function setNom(string $nom){
        $this->nom=$nom;
    }
    function setNbrSalles(string $nbrSalles){
        $this->nbrSalles=$nbrSalles;
    }
    function setTypeSalles(string $typeSalles){
        $this->typeSalles=$typesalles;
    }
    
    
}






























?>