<?php

require_once     '../Controller/utilisateurC.php';
require_once '../Model/utilisateur.php';
$utilisateurC = new utilisateurC();
$etudiantC = new etudiantC();
if (isset($_POST['ID_utilisateur'] ) && isset($_POST['email'] ) && isset($_POST['password'] ) && isset($_POST['name'] ) && isset($_POST['first_name'] ) && isset($_POST['date_of_birth'] ) && isset($_POST['role'] ) && $_FILES["profilpicture"]["name"] && isset($_POST['classe'] ) )
    {
      $utilisateur = new utilisateur($_POST['ID_utilisateur'], $_POST['email'], $_POST['password'], $_POST['name'], $_POST['first_name'], $_POST['date_of_birth'], $_POST['role'],$_FILES["profilpicture"]["name"]);
      $etudiant = new etudiant( $_POST['ID_utilisateur'], $_POST['email'], $_POST['password'], $_POST['name'], $_POST['first_name'], $_POST['date_of_birth'], $_POST['role'], $_FILES["profilpicture"]["name"] ,$_POST['classe'] ); 
      $utilisateurC->ajouterutilisateur($utilisateur);
      $etudiantC->ajouteretudiant($etudiant);
      $target_dir = "uploads/";
      $target_file = $target_dir . basename($_FILES["profilpicture"]["name"]);
      if (move_uploaded_file($_FILES["profilpicture"]["tmp_name"], $target_file)) {
          
      }
    }

    else if (isset($_POST['ID_utilisateur'] ) && isset($_POST['email'] ) && isset($_POST['password'] ) && isset($_POST['name'] ) && isset($_POST['first_name'] ) && isset($_POST['date_of_birth'] ) && isset($_POST['role'] ) && $_FILES["profilpicture"]["name"] && isset($_POST['specialite'] )) 
    {
      $utilisateur1 = new utilisateur($_POST['ID_utilisateur'], $_POST['email'], $_POST['password'], $_POST['name'], $_POST['first_name'], $_POST['date_of_birth'], $_POST['role'], $_FILES["profilpicture"]["name"] );
      $utilisateur1C = new utilisateurC();
      $utilisateur1C->ajouterutilisateur($utilisateur1);
      $prof = new prof( $_POST['ID_utilisateur'], $_POST['email'], $_POST['password'], $_POST['name'], $_POST['first_name'], $_POST['date_of_birth'], $_POST['role'], $_FILES["profilpicture"]["name"], $_POST['specialite'] );
      $profC = new profC();
      $profC->ajouterprof($prof);
      $target_dir = "uploads/";
      $target_file = $target_dir . basename($_FILES["profilpicture"]["name"]);
      if (move_uploaded_file($_FILES["profilpicture"]["tmp_name"], $target_file)) {
         
      }
     // header('Location:afficherutilisateur.php');
    }
?>
<style>
   .fa-color
   {
color:black;
   }
   #hide1{
display:none;
   }
</style>
<html lang="en">
<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Site Metas -->
<title>Hogwarts</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<!-- site icon -->
<link rel="icon" href="images/fevicon.png" type="image/png" />
<!-- Bootstrap core CSS -->
<link href="css/bootstrap.css" rel="stylesheet">
<!-- FontAwesome Icons core CSS -->
<link href="css/font-awesome.min.css" rel="stylesheet">
<!-- Custom animate styles for this template -->
<link href="css/animate.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="style.css" rel="stylesheet">
<!-- teestttttttt -->
<link href="test.css" rel="stylesheet">
<!-- Responsive styles for this template -->
<link href="css/responsive.css" rel="stylesheet">
<!-- Colors for this template -->
<link href="css/colors.css" rel="stylesheet">
<!-- light box gallery -->
<link href="css/ekko-lightbox.css" rel="stylesheet">
<!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
   <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
   <![endif]-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
</head>

<body id="inner_page">
   <!-- header -->
   <header class="header">

      <div class="header_top_section">
         <div class="container">
            <div class="row">
               <div class="col-lg-3">
                  <div class="full">
                     <div class="logo">
                        <a href="index.html"><img src="images/logo.png" alt="#" /></a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-9 site_information">
                  <div class="full">
                     <div class="main_menu">
                        <nav class="navbar navbar-inverse navbar-toggleable-md">
                           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#cloapediamenu" aria-controls="cloapediamenu" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="float-left">Menu</span>
                              <span class="float-right"><i class="fa fa-bars"></i> <i class="fa fa-close"></i></span>
                           </button>
                           <div class="collapse navbar-collapse justify-content-md-center" id="cloapediamenu">
                              <ul class="navbar-nav">
                                 <li class="nav-item active">
                                    <a class="nav-link" href="index.html">Home</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link color-aqua-hover" href="about.php">About</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link color-grey-hover" href="contact1.php">Contact Us</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link color-grey-hover" href="login.php">Login</a>
                                 </li>
                              </ul>
                              <ul class="navbar-nav">
                                 <li class="nav-item">
                                 </li>
                              </ul>
                           </div>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

   </header>
   <!-- end header -->

   <!-- section -->
   <section class="main_full inner_page">
      <div class="container-fluid">
         <div class="row">
            <div class="full">
               <h3>sign in</h3>
            </div>
         </div>
      </div>
   </section>
   <!-- end section -->

   <!-- section -->
   <section class="layout_padding section">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="contact_section margin_top_30">
                  <div class="row">
                     <div class="col-md-8 offset-md-2">
                        <div class="form_cont">
                           <form id="formulaire" action="" method="POST" onsubmit="return getselectedvalue();" enctype="multipart/form-data">
                              <table class="table" border="1" align="center">


                             
                        <label for="profilpicture">
                        </label>
                    <input type="file" accept="image/*" name="profilpicture" onchange="displayImage(this)" id="profilpicture" style="width:50%;float:left;margin:0 10px 0 -200px; display:none; "  > </td>
                                                 <img src="uploads/unknown.png" onclick="pictureclick()" id="profildisplay" style="width:20%;margin:0 90px 0 300px; border-radius:10%; display:block;"/> </td>
                    
                                 <label for="ID_utilisateur">
                                 </label>
                                 <input type="number" name="ID_utilisateur" id="ID_utilisateur" hidden > </td>
                                 <label for="email">
                                 </label>
                                 <input  type="email" name="email" id="email" placeholder="email"></td>

                                 <label for="password">
                                 </label>
                                 <input type="password" name="password" id="password" placeholder="password"></td>
                              <span class="eye" onclick="toggle()">
                                 <i aria-hidden="true" id="hide1"  class="fa fa-eye fa-2x fa-color" style="position:absolute; margin:-45px 0px 0 690px;" ></i>
                                 <i id="hide2" class="fa fa-eye-slash fa-2x fa-color" aria-hidden="true" style="position:absolute; margin:-45px 0px 0 690px;"></i>
                                 </span>
                                <script>
                                   function toggle(){
                                    var x=document.getElementById("password");
                                    var y=document.getElementById("hide1");
                                    var z =document.getElementById("hide2");
if(x.type==='password')
{
x.type="text";
y.style.display="block";
z.style.display="none";
}
else{
   x.type="password";
y.style.display="none";
z.style.display="block";
}
                                   }
                                </script>
                                 <label for="name">
                                 </label>
                                 <input type="text" name="name" id="name" placeholder="name" >

                                 <label for="first_name">
                                 </label>
                                 <input type="text" name="first_name" id="first_name" placeholder="first name"></td>

                                 <label for="date_of_birth">
                                 </label>
                                 <input type="date" name="date_of_birth" id="date_of_birth" placeholder="date of birth"></td>


                                 <table>
                                    <label class="test" for="role">
                                    </label>
                                    <select name="role" id="role" onchange="xx();">
                                    <option value="----">----</option>
                                       <option value="Etudiant">Etudiant</option>
                                       <option value="Prof">Prof</option>
                                      
                                    </select>
                                    
                                    
                                 </table>
                                 <label for="classe">
                                 </label>
                                 <input type="text" name="classe" id="classe" placeholder="classe" hidden></td>

                                 <label for="specialite">
                                 </label>
                                 <input type="text" name="specialite" id="specialite" placeholder="specialite" hidden></td>

                                    <div id="badelha"></div>
                                 

                                 <button type="submit" value="Envoyer" send>sign in</button>


                                 <button type="reset" value="Annuler">reset</button>

                              </table>

                              
                           </form>
                           
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- end section -->

   <!-- footer -->
   <footer class="footer layout_padding">
      <div class="container">
         <div class="row">

            <div class="col-md-4 col-sm-12">
               <a href="index.html"><img class="img-responsive" src="images/logo.png" alt="#" /></a>
               <div class="footer_link_heading">
                  <div class="footer_menu margin_top_30">
                     <ul>
                        <li><a href="tel:98238240">(+216)98238240</a></li>
                        <li><a href="#">Hogwarts@gmail.com</a></li>
                        <li><a href="#">22 rue taher ben achour afh</a></li>
                     </ul>
                  </div>
               </div>
            </div>

            <div class="col-md-8">
               <div class="row">
                  <div class="col-md-4 col-sm-12">
                     <div class="footer_link_heading">
                        <h3>FEATURED COURSES</h3>
                     </div>
                     <div class="footer_menu">
                        <ul>
                           <li>AI courses</li>
                           <li>Data Science</li>
                           <li>Web Development</li>
                           <li>Gamix</li>
                        </ul>
                     </div>
                  </div>

                  <div class="col-md-4 col-sm-12">
                     <div class="footer_link_heading">
                        <h3>CATEGORIES</h3>
                     </div>
                     <div class="footer_menu">
                        <ul>
                           <li>Arts & Design</li>
                           <li>Business</li>
                           <li>Computer </li>
                           <li>Data entery</li>
                        </ul>
                     </div>
                  </div>

                  <div class="col-md-4 col-sm-12">
                     <div class="footer_link_heading">
                        <h3>USEFUL LINKS</h3>
                     </div>
                     <div class="footer_menu">
                        <ul>
                           <li><a href="about.php">FAQs</a></li>
                           <li><a href="contact1.php">Contact search</a></li>

                        </ul>
                     </div>
                  </div>
               </div>
            </div>

         </div>
      </div>
   </footer>
   <div class="cpy">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <p>Copyright 2021. All Rights Reserved. HogWarts University</a></p>
            </div>
         </div>
      </div>
   </div>
   <!-- end footer -->
   <!-- Core JavaScript
         ================================================== -->
   <script src="js/jquery.min.js"></script>
   <script src="js/tether.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/parallax.js"></script>
   <script src="js/animate.js"></script>
   <script src="js/ekko-lightbox.js"></script>
   <script src="js/custom.js"></script>
   <script src="js/lol.js"></script>
   <script src="js/click.js"></script>
   <script src="bootstrap-show-password.min.js"></script>
</body>

</html>