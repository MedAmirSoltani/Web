<?php
session_start();
require_once '../Controller/matiereC.php';
include_once     '../Controller/utilisateurC.php';
include_once '../Model/utilisateur.php';

$userC = new utilisateurC();
$userC1 = new utilisateurC();

$matiere = new matiereC();
if (isset($_POST["reset-request-submit"])) {
   header('Location:reset-password.php');
}
if (empty($_SESSION['a'])) {
   if (isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["login"])) {

      if (!empty($_POST["email"]) && !empty($_POST["password"])) {

         $message = $userC->connexionUser($_POST["email"], $_POST["password"]);
         if ($message != 'email or password uncorrect') {
            // src="uploads/<?php echo $utilisateur['profilpicture'] ;
            $resultat = $userC->getutilisateurbyemail($_POST["email"]);
            $lol = $resultat["profilpicture"];
            $_SESSION['a'] = $resultat["ID_utilisateur"];
            $x = $userC->getutilisateurbyID($_SESSION['a']);
            if ($x['admin_bool'] == 0) {
               if (strcmp($x['role'], "Etudiant") != 0) {
                  $resultat = $userC->getprofbyemail($_POST["email"]);

                  $r = $matiere->getmatierebyID($resultat['idmatiere']);
                  $_SESSION['mat'] = $r;
                  $_SESSION['c'] = $r["titre"];
                  header('Location:profilprof.php');
               } else {
                  $resultat = $userC->getetudiantbyemail($_POST["email"]);
                  $_SESSION['c'] = $resultat["classe"];
                  header('Location:profiluser.php');
               }
            } else
               header('Location:profiladmin.php');
         } else {
            $message = 'email or password uncorrect';
         }
      } else {
         $message = "";
         $message = "missing information";
      }
   }
} else {
   $conn = $userC1->getutilisateurbyID($_SESSION['a']);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Hogwarts</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!--jquerry-->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   <!-- login css -->
   <link rel="stylesheet" href="../Assets/CSS/login.css">
   <!-- bootstrap css -->
   <link rel="stylesheet" href="../Assets/CSS/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" href="../Assets/CSS/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="../Assets/CSS/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="../Assets/Images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="../Assets/CSS/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout home_page">
   <!-- loader  -->
   <div class="loader_bg">
      <div class="loader"><img src="../Assets/Images/loading.gif" alt="#" /></div>
   </div>
   <!-- end loader -->
   <!-- header -->
   <header>
      <!-- header inner -->
      <div class="header">
         <div class="container">
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                  <div class="full">
                     <div class="center-desk">
                        <div class="logo"> <a href="index.php"><img src="../Assets/Images/logo.png" alt="#"></a> </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                  <div class="menu-area">
                     <div class="limit-box">
                        <nav class="main-menu">
                           <ul class="menu-area-main">
                              <li class="active"> <a href="index.php">Home</a> </li>
                              <li> <a href="about.php">About us</a> </li>
                              <li><a href="contact.php">Contact us</a></li>

                              <li class="dropdown dropdown-user nav-item"><a href="#" data-toggle="dropdown">

                                    <?php if (!empty($conn['name'])) : ?>
                                       <span class="avatar avatar-online"><img src="../Assets/Images/top-icon.png" alt="avatar"><i></i></span></a>
                                 <div class="dropdown-menu dropdown-menu-right">
                                    <div class="arrow_box_right">
                                       <a class="dropdown-item">
                                          <span class="avatar avatar-online">
                                             <?php if (empty($conn['profilpicture'])) {
                                                echo '<img src="../Assets/uploads/unknown.png" onclick="pictureclick()" id="profildisplay" style="width:25%; height:35px;float:left;margin:0 10px 0 0px; border-radius:10%; display:block;"/>';
                                             }

                                             ?>
                                             <img <?php if (empty($conn['profilpicture'])) {
                                                      echo 'style="display:none;"';
                                                   } ?> id="profildisplay" style="width:25%; height:35px; float:left;margin:190 10px 0 0px; border-radius:50%; display:block;" src="../Assets/uploads/<?php echo $conn['profilpicture'] ?>">
                                             <span class="user-name text-bold-700 ml-1"><?php echo $conn['name'] ?></span>
                                          </span>
                                       </a>
                                       <div class="dropdown-divider"></div>
                                       <?php if (strcmp($conn['role'], "Prof") == 0) { ?>
                                          <a class="dropdown-item" href="updateprofilprof.php"><i class="ft-user"></i> Edit Profile</a>
                                          <a class="dropdown-item" href="profilprof.php"><i class="ft-mail"></i> My Profil</a>
                                          <a class="dropdown-item" href="front3admin.php"><i class="ft-check-square"></i> Subjects</a>
                                        
                                       <?php } else if (strcmp($conn['role'], "Etudiant") == 0) { ?>
                                          <a class="dropdown-item" href="updateprofil.php"><i class="ft-user"></i> Edit Profile</a>
                                          <a class="dropdown-item" href="profiluser.php"><i class="ft-mail"></i> My Profil</a>
                                          <a class="dropdown-item" href="club.php"><i class="ft-mail"></i> Clubs</a>
                                          <a class="dropdown-item" href="front3admin.php"><i class="ft-check-square"></i> Subjects</a>
                                          

                                       <?php } else { ?>
                                          <a class="dropdown-item" href="updateprofiladmin.php"><i class="ft-user"></i> Edit Profile</a>
                                          <a class="dropdown-item" href="profiladmin.php"><i class="ft-mail"></i> My Profil</a>
                                          <a class="dropdown-item" href="front3admin.php"><i class="ft-check-square"></i> Subjects</a>
                                          

                                       <?php } ?>





                                       <div class="dropdown-divider"></div><a class="dropdown-item" href="deconnexion.php"><i class="ft-power"></i> Logout</a>
                                    </div>
                                 </div>
                              </li>
                           <?php else : ?>
                              <!-- HTML here -->
                              <span class="avatar avatar-online"><img src="../Assets/Images/top-icon.png" alt="avatar"><i></i></span></a>
                              <div class="dropdown-menu dropdown-menu-right">
                                 <form action="" method="POST" onsubmit="return verifcnx();">
                                    <div class="dropdown-divider"></div>
                                    <div class="field">

                                       <input class="form-control" type="text" name="email" id="email" placeholder="email">
                                    </div>
                                    <div class="field">
                                       <input class="form-control" type="password" name="password" id="password" placeholder="password">
                                    </div>

                                    <a style="text-align:center;" class="dropdown-item" href="reset-password.php"> <input type="submit" name="reset-request-submit" style="text-transform: uppercase;color:#b32137;" class="dropdown-item" value="forgot password"></a>
                                    <a style="text-align:center;" class="dropdown-item" style="font-size: 15px;" href="signin.php"><i class="ft-user"></i> new?</a>
                                    <div id="lol"> </div>
                                    <script>
                                       function verifcnx() {
                                          var email = document.getElementById("email").value;
                                          var password = document.getElementById("password").value;
                                          if (password == false || email == false) {
                                             document.getElementById("lol").innerHTML = ' <p style="color: red; font-size: 20px; font-family: sans-serif; margin:90px 50px 0 250px;" id="erreur1">write your email/password</p>';
                                             document.getElementById("erreur").style.display = "none";
                                             return false;
                                             preventdefault();
                                          }
                                       }
                                    </script>
                                    <div class="dropdown-divider"></div>

                                    <a style="text-align:center;" class="dropdown-item" href="#"> <input type="submit" name="login" style="text-transform: uppercase;color:#b32137;" class="dropdown-item" value="login"></a>
                                 </form>
                              <?php endif; ?>
                              </div>
                     </div>
                     </ul>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>

      <!-- end header inner -->
   </header>
   <!-- end header -->
   <section class="slider_section">
      <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
         <div class="carousel-inner">
            <div class="carousel-item active">
               <img class="first-slide" src="../Assets/Images/banner.png" alt="First slide">
               <div class="container">
                  <div class="carousel-caption relative">
                     <h1>The Best University<br>That Every Students<br>Need to Learn in!</h1>
                     <p>Hogwarts is a university made by dispersed wizards: <br>a group of 6 engineers their main goal
                        is changing<br>the world with their new teaching strategies.</p>
                     <div class="button_section"> <a class="main_bt" href="#">Read More</a> </div>
                     <ul class="locat_icon">
                        <li> <a href="https://www.facebook.com/Hogwarts-105786591947374"><img src="icon/facebook.png"></a></li>
                        <li> <a href="#"><img src="../Assets/icon/Twitter.png"></a></li>
                        <li> <a href="#"><img src="../Assets/icon/instagram.png"></a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <img class="second-slide" src="../Assets/Images/banner2.png" alt="Second slide">
               <div class="container">
                  <div class="carousel-caption relative">
                     <h1>The Best University<br>That Every Students<br>Need to Learn in!</h1>
                     <p>Hogwarts is a university made by dispersed wizards: <br>a group of 6 engineers their main goal
                        is changing<br>the world with their new teaching strategies.</p>
                     <div class="button_section"> <a class="main_bt" href="#">Read More</a> </div>
                     <ul class="locat_icon">
                        <li> <a href="https://www.facebook.com/Hogwarts-105786591947374"><img src="../Assets/icon/facebook.png"></a></li>
                        <li> <a href="#"><img src="../Assets/icon/Twitter.png"></a></li>
                        <li> <a href="#"><img src="../Assets/icon/instagram.png"></a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <img class="third-slide" src="../Assets/Images/banner3.png" alt="Third slide">
               <div class="container">
                  <div class="carousel-caption relative">
                     <div class="carousel-caption relative">
                        <h1>The Best University<br>That Every Students<br>Need to Learn in!</h1>
                        <p>Hogwarts is a university made by dispersed wizards: <br>a group of 6 engineers their main
                           goal
                           is changing<br>the world with their new teaching strategies.</p>
                        <div class="button_section"> <a class="main_bt" href="#">Read More</a> </div>
                        <ul class="locat_icon">
                           <li> <a href="https://www.facebook.com/Hogwarts-105786591947374"><img src="../Assets/icon/facebook.png"></a></li>
                           <li> <a href="#"><img src="../Assets/icon/Twitter.png"></a></li>
                           <li> <a href="#"><img src="../Assets/icon/linkedin.png"></a></li>
                           <li> <a href="#"><img src="../Assets/icon/instagram.png"></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="sr-only">Next</span>
            </a>
         </div>
   </section>
   <!-- about -->
   <div class="about">
      <div class="container">
         <div class="row">
            <div class="col-md-10 offset-md-1">
               <div class="aboutheading">
                  <h2>About <strong class="black">Us</strong></h2>
                  <span>Hogwarts is a university made by dispersed wizards : a group of 6 engineers their main goal is changing the world with their new teaching strategies.</span>
               </div>
            </div>
         </div>
         <div class="row border">
            <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
               <div class="about-box">
                  <h1> Hogwarts is a private high school ,founded in 2021, on the initiative of academics experienced in
                     teaching
                     ,who wanted to take up the challenge of creating a private school dedicated to the training of
                     operational engineers.</h1>
                  <a href="#">Read More</a>
               </div>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
               <div class="about-box">
                  <figure><img src="../Assets/Images/about.png" alt="img" /></figure>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- end about -->



   <!-- footer -->
   <footer>
      <div class="footer">
         <div class="container">
            <div class="row pdn-top-30">
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="Follow">
                     <h3>Follow Us</h3>
                  </div>
                  <ul class="location_icon">
                     <li> <a href="#"><img src="../Assets/icon/facebook.png"></a></li>
                     <li> <a href="#"><img src="../Assets/icon/Twitter.png"></a></li>
                     <li> <a href="#"><img src="../Assets/icon/instagram.png"></a></li>
                  </ul>
               </div>
               <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                  <div class="Follow">
                     <h3>Newsletter</h3>
                  </div>
                  <input class="Newsletter" placeholder="Enter your email" type="Enter your email">
                  <button class="Subscribe">Subscribe</button>
               </div>
            </div>
         </div>
      </div>
      <div class="copyright">
         <div class="container">
            <p>Copyright 2021 All Right Reserved By <a href="https://html.design/">Hogwarts</a></p>
         </div>
      </div>
   </footer>
   <!-- end footer -->
   <!-- Javascript files-->
   <script src="../Assets/js/jquery.min.js"></script>
   <script src="../Assets/js/popper.min.js"></script>
   <script src="../Assets/js/bootstrap.bundle.min.js"></script>
   <script src="../Assets/js/jquery-3.0.0.min.js"></script>
   <script src="../Assets/js/plugin.js"></script>
   <!-- sidebar -->
   <script src="../Assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="../Assets/js/custom.js"></script>
   <script type="text/javascript">
      $(document).ready(function() {
         var arrow = $(".arrow-up");
         var form = $(".login-form");
         var status = false;
         $("#login").click(function(event) {

            event.preventDefault();
            if (status == false) {

               arrow.fadeIn();
               form.fadeIn();
               status = true;
            } else {

               arrow.fadeOut();
               form.fadeOut();
               status = false;
            }
         })
      })
   </script>
</body>

</html>