<?php

class Salles
{
    private $id = null;
    private $nom = null;
    private $nbrprj = null;
    private $nmbrtabl = null;
    private $nbrchais = null;
    private $id_blc = null;
    function __construct($id, $nom, $nbrprj, $nmbrtabl, $nbrchais, $id_blc)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->nbrprj = $nbrprj;
        $this->nmbrtabl = $nmbrtabl;
        $this->nbrchais = $nbrchais;
        $this->id_blc = $id_blc;
    }
    function getid()
    {
        return $this->id;
    }
    function getnom()
    {
        return $this->nom;
    }
    function getNbrprj()
    {
        return $this->nbrprj;
    }
    function getnbrtables()
    {
        return $this->nmbrtabl;
    }
    function getnbrchais()
    {
        return $this->nbrchais;
    }
    function getidblc()
    {
        return $this->id_blc;
    }
}
