<?php
class post
{
  public $Idpost;
  private $Title;
  private $Picture;
  private $Date;
  private $Description;
  
  
  



function __construct($idpo,$title, $picture,$date, $description){
    $this->Idpost=$idpo;
    $this->Title=$title;
    $this->Picture=$picture;
    $this->Date=$date;
    $this->Description=$description;
    
    
    
}

function setIdpost(string $Idpost){
  $this->Idpost=$Idpost;
}
    function setDate(string $Date){
  $this->Date=$Date;
}
    function setDescription(string $Description){
  $this->Description=$Description;
}
    function setPicture(string $Picture){
  $this->Picture=$Picture;
}
    function setTitle(string $Title){
  $this->Title=$Title;
}
   

    function getIdpost(){
  return $this->Idpost;
}
    function getDate(){
  return $this->Date;
}
    function getDescription(){
  return $this->Description;
}
    function getPicture(){
  return $this->Picture;
}
    function getTitle(){
  return $this->Title;
}
   











}
?>