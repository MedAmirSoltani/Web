<?php
class post
{
  private $Title;
  private $Picture;
  private $Date;
  private $Description;
  
  
  



function __construct($title, $picture,$date, $description){
    
    $this->Title=$title;
    $this->Picture=$picture;
    $this->Date=$date;
    $this->Description=$description;
    
    
    
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