<?php

class Block{
    private $id=null;
    private $nom=null;
    private $nbrsalles=null;
    private $typesalles=null;
   
    function __construct($id, $nom, $nbrsalles, $typesalles){
        $this->id=$id;
        $this->nom=$nom;
        $this->nbrsalles=$nbrsalles;
        $this->typesalles=$typesalles;
    }
    function getId(){
        return $this->id;
    }
    function getNom(){
        return $this->nom;
    }
    function getNbrsalles(){
        return $this->nbrsalles;
    }
    function getTypesalles(){
        return $this->typesalles;
    }
    function setNom(string $nom){
        $this->nom=$nom;
    }
    function setNbrsalles(string $nbrsalles){
        $this->nbrsalles=$nbrsalles;
    }
    function setTypesalles(string $typesalles){
        $this->typesalles=$typesalles;
    }
    
    
}






























?>