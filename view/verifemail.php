<?php

require_once '../Assets/Utils/config.php';
    session_start();
    require_once     '../Controller/utilisateurC.php';
    require_once '../Model/utilisateur.php';
    $utilisateurC = new utilisateurC();
    $utilisateur1C = new utilisateurC();
    $etudiantC = new etudiantC();
    $profC = new profC();
    if (isset($_POST['code'])){
        $code=$_POST['code'];
        if($code== $_SESSION['code'])
        {
        if( strcmp($_SESSION['role1'], "Etudiant") == 0)
        {
         $utilisateur = new utilisateur($_SESSION['ID_utilisateur1'], $_SESSION['email1'], $_SESSION['password1'], $_SESSION['name1'], $_SESSION['first_name1'], $_SESSION['date_of_birth1'], $_SESSION['role1'],$_SESSION["profilpicture1"]["name"]);
         $etudiant = new etudiant( $_SESSION['ID_utilisateur1'], $_SESSION['email1'], $_SESSION['password1'], $_SESSION['name1'], $_SESSION['first_name1'], $_SESSION['date_of_birth1'], $_SESSION['role1'],$_SESSION["profilpicture1"]["name"],$_SESSION['classe1'] ); 
         $utilisateurC->ajouterutilisateur($utilisateur);
         $etudiantC->ajouteretudiant($etudiant);
         $target_dir = "../Assets/uploads/";
         $target_file = $target_dir . basename($_SESSION["profilpicture1"]["name"]);
         if (move_uploaded_file($_SESSION["profilpicture1"]["tmp_name"], $target_file)) {
             
         }
         
        }
        else{
         $utilisateur1 = new utilisateur($_SESSION['ID_utilisateur1'], $_SESSION['email1'], $_SESSION['password1'], $_SESSION['name1'], $_SESSION['first_name1'], $_SESSION['date_of_birth1'], $_SESSION['role1'],$_SESSION["profilpicture1"]["name"]);  
         $utilisateur1C->ajouterutilisateur($utilisateur1);
         $prof = new prof( $_SESSION['ID_utilisateur1'], $_SESSION['email1'], $_SESSION['password1'], $_SESSION['name1'], $_SESSION['first_name1'], $_SESSION['date_of_birth1'], $_SESSION['role1'],$_SESSION["profilpicture1"]["name"], $_SESSION['specialite1'] );
         $profC->ajouterprof($prof);
         $target_dir = "../Assets/uploads/";
         $target_file = $target_dir . basename($_FILES["profilpicture"]["name"]);
         if (move_uploaded_file($_FILES["profilpicture"]["tmp_name"], $target_file)) {
            
         }
        }
        header("Location: login.php");
        }
        else{
         header("Location: verifemail.php");
        }
       
    } 

?>
<!DOCTYPE html>
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
   <link rel="icon" href="../Assets/Images/fevicon.png" type="image/png" />
   <!-- Bootstrap core CSS -->
   <link href="../Assets/CSS/bootstrap.css" rel="stylesheet">
   <!-- FontAwesome Icons core CSS -->
   <link href="../Assets/CSS/font-awesome.min.css" rel="stylesheet">
   <!-- Custom animate styles for this template -->
   <link href="../Assets/CSS/animate.css" rel="stylesheet">
   <!-- Custom styles for this template -->
   <link href="../Assets/CSS/style.css" rel="stylesheet">
   <!-- Responsive styles for this template -->
   <link href="../Assets/CSS/responsive.css" rel="stylesheet">
   <!-- Colors for this template -->
   <link href="../Assets/CSS/colors.css" rel="stylesheet">
   <!-- light box gallery -->
   <link href="../Assets/CSS/ekko-lightbox.css" rel="stylesheet">
   <!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
   <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
   <![endif]-->
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
                        <a href="index.php"><img src="../Assets/Images/logo.png" alt="#" /></a>
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
                                    <a class="nav-link" href="index.php">Home</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link color-aqua-hover" href="about.php">About</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link color-grey-hover" href="contact.php">Contact Us</a>
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
               <h3>Code de verification</h3> 
                
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
                              
                           <p style="text-align: center;">Write the code that was sent to your email here</p> 
                                  <fieldset>
             <form action="" method="POST" >
             <div class="field">
                                 
                                 <input type="int" name="code" id="code" placeholder="Enter the code">
                              </div>
                              <button type="submit" style="margin:40px 50px 0 300px;">send</button>
                                    
                                     
                                     
                                    
                                    
                                        
                                       </form>
                                    </div>
                                 </div>


                                  </div></fieldset>   
                           
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
                  <a href="index.php"><img class="img-responsive" src="../Assets/Images/logo.png" alt="#" /></a>
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
                       <li><a href="contact.php">Contact search</a></li>
                       
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
      <script src="../Assets/js/jquery.min.js"></script>
      <script src="../Assets/js/tether.min.js"></script>
      <script src="../Assets/js/bootstrap.min.js"></script>
      <script src="../Assets/js/parallax.js"></script>
      <script src="../Assets/js/animate.js"></script>
      <script src="../Assets/js/ekko-lightbox.js"></script>
      <script src="../Assets/js/custom.js"></script>
   </body>
</html>