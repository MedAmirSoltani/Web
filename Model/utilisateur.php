<?php
    class utilisateur
    {
        private $ID_utilisateur;
        private $email;
		private $password;
		private $name;
        private $first_name;
		private $date_of_birth;
        private $role;
		private $profilpicture;

        function __construct($ID_utilisateur,$email,$password,$name,$first_name,$date_of_birth,$role,$profilpicture){
            $this->ID_utilisateur=$ID_utilisateur;
            $this->email=$email;
			$this->password=$password;
            $this->name=$name;
            $this->first_name=$first_name;
            $this->date_of_birth=$date_of_birth;
            $this->role=$role;
			$this->profilpicture=$profilpicture;
        }

        function setID_utilisateur(string $ID_utilisateur){
			$this->ID_utilisateur=$ID_utilisateur;
		}
        function setemail(string $email){
			$this->email=$email;
		}
		function setpassword(string $password){
			$this->password=$password;
		}
        function setname(string $name){
			$this->name=$name;
		}
		function setfirst_name(string $first_name){
			$this->first_name=$first_name;
		}
        function setdate_of_birth(string $date_of_birth){
			$this->date_of_birth=$date_of_birth;
		}
		function setrole(string $role){
			$this->role=$role;
		}
        
		function setprofilpicture(string $profilpicture){
			$this->profilpicture=$profilpicture;
		}
        function getID_utilisateur(){
			return $this->ID_utilisateur;
		}
        function getemail(){
			return $this->email;
		}
		function getpassword(){
			return $this->password;
		}
        function getname(){
			return $this->name;
		}
		function getfirst_name(){
			return $this->first_name;
		}
        function getdate_of_birth(){
			return $this->date_of_birth;
		}
		function getrole(){
			return $this->role;
		}
		
		function getprofilpicture(){
			return $this->profilpicture;
		}

        
    }


	class etudiant extends utilisateur {
		private $ID;
		private $email;
		private $password;
		private $name;
		private $first_name;
		private $date_of_birth;
		private $role;
		private $profilpicture;
		private $classe;
	
		function __construct($ID,$email,$password,$name,$first_name,$date_of_birth,$role,$profilpicture,$classe){
			$this->ID=$ID;
			$this->email=$email;
			$this->password=$password;
			$this->name=$name;
			$this->first_name=$first_name;
			$this->date_of_birth=$date_of_birth;
			$this->role=$role;
			$this->profilpicture=$profilpicture;
			$this->classe=$classe;
		}
	
		function setID(string $ID){
			$this->ID=$ID;
		}
		function setemail(string $email){
			$this->email=$email;
		}
		function setpassword(string $password){
			$this->password=$password;
		}
		function setname(string $name){
			$this->name=$name;
		}
		function setfirst_name(string $first_name){
			$this->first_name=$first_name;
		}
		function setdate_of_birth(string $date_of_birth){
			$this->date_of_birth=$date_of_birth;
		}
		function setrole(string $role){
			$this->role=$role;
		}
		function setprofilpicture(string $profilpicture){
			$this->profilpicture=$profilpicture;
		}
		
		function setclasse(string $classe){
			$this->classe=$classe;
		}
	
		function getID(){
			return $this->ID;
		}
		function getemail(){
			return $this->email;
		}
		function getpassword(){
			return $this->password;
		}
		function getname(){
			return $this->name;
		}
		function getfirst_name(){
			return $this->first_name;
		}
		function getdate_of_birth(){
			return $this->date_of_birth;
		}
		function getrole(){
			return $this->role;
		}
		function getprofilpicture(){
			return $this->profilpicture;
		}
		
		function getclasse(){
			return $this->classe;
		}
	  
	
		
	}






	
    class prof extends utilisateur
    {
        private $ID_prof;
        private $email;
		private $password;
		private $name;
        private $first_name;
		private $date_of_birth;
        private $role;
		private $profilpicture;
        private $idmatiere;
        function __construct($ID_prof,$email,$password,$name,$first_name,$date_of_birth,$role,$profilpicture,$idmatiere){
            $this->ID_prof=$ID_prof;
            $this->email=$email;
			$this->password=$password;
            $this->name=$name;
            $this->first_name=$first_name;
            $this->date_of_birth=$date_of_birth;
            $this->role=$role;
			$this->profilpicture=$profilpicture;
            $this->idmatiere=$idmatiere;
        }

        function setID_prof(string $ID_prof){
			$this->ID_prof=$ID_prof;
		}
        function setemail(string $email){
			$this->email=$email;
		}
		function setpassword(string $password){
			$this->password=$password;
		}
        function setname(string $name){
			$this->name=$name;
		}
		function setfirst_name(string $first_name){
			$this->first_name=$first_name;
		}
        function setdate_of_birth(string $date_of_birth){
			$this->date_of_birth=$date_of_birth;
		}
		function setrole(string $role){
			$this->role=$role;
		}
		function setprofilpicture(string $profilpicture){
			$this->profilpicture=$profilpicture;
		}
		
        function setidmatiere(string $idmatiere){
			$this->idmatiere=$idmatiere;
		}

        function getID_prof(){
			return $this->ID_prof;
		}
        function getemail(){
			return $this->email;
		}
		function getpassword(){
			return $this->password;
		}
        function getname(){
			return $this->name;
		}
		function getfirst_name(){
			return $this->first_name;
		}
        function getdate_of_birth(){
			return $this->date_of_birth;
		}
		function getrole(){
			return $this->role;
		}
		function getprofilpicture(){
			return $this->profilpicture;
		}
		
        function getidmatiere(){
			return $this->idmatiere;
		}
      

        
    }

?>