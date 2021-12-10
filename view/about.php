<?php
session_start();
include_once     '../Controller/utilisateurC.php';
    include_once '../Model/utilisateur.php' ;
   
    $userC=new utilisateurC();
    
    if(isset($_POST["email"]) && isset($_POST["password"])  )
    {
      
      if(!empty($_POST["email"]) && !empty($_POST["password"]))
      {

         $message=$userC->connexionUser($_POST["email"],$_POST["password"]);
         if($message!='email or password uncorrect')
         { 
           // src="uploads/<?php echo $utilisateur['profilpicture'] ;
            $resultat=$userC->getutilisateurbyemail($_POST["email"]);
            $lol=$resultat["profilpicture"];
            $_SESSION['a']=$resultat["ID_utilisateur"];
            $x=$userC->getutilisateurbyID($_SESSION['a']);
            if($x['admin_bool']==0)
            {
            if (strcmp($x['role'], "Etudiant") != 0) {
               $resultat=$userC->getprofbyemail($_POST["email"]);
               $_SESSION['c']=$resultat["specialite"];
               header('Location:profilprof.php');
           }
           else{
            $resultat=$userC->getetudiantbyemail($_POST["email"]);
            $_SESSION['c']=$resultat["classe"];
            header('Location:profiluser.php');
           }
         }
         else
         header('Location:afficherutilisateur.php');
           
         
         }
         else{
            $message='email or password uncorrect';
         }
      }
      else{
      $message="";
      $message="missing information"; 
      }
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
   <title>memorial books</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
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

<body class="main-layout">
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
                              <li> <a href="index.php">Home</a> </li>
                              <li class="active"> <a href="about.php">About us</a> </li>
                              <li><a href="contact.php">Contact us</a></li>
                              <li class="mean-last"> <a href="#"><img src="../Assets/Images/search_icon.png" alt="#" /></a> </li>
                              
                              <li class="dropdown dropdown-user nav-item"><a  href="#" data-toggle="dropdown">
                                <span class="avatar avatar-online"><img src="../Assets/Images/top-icon.png" alt="avatar"><i></i></span></a>
                            <div class="dropdown-menu dropdown-menu-right">
                            <form action="" method="POST" onsubmit="return verifcnx();">
                                    <div class="dropdown-divider"></div>
                                    <div class="field">
                                    
                                 <input class="form-control" type="text" name="email" id="email" placeholder="email" >
                              </div>
                              <div class="field">
                              <input class="form-control" type="password" name="password" id="password" placeholder="password">
                              </div>
                              <a class="dropdown-item" style="font-size: 13px;" href="#"><i class="ft-user"></i> forget password</a>
                              <a class="dropdown-item" style="font-size: 15px;" href="#"><i class="ft-user"></i> new?</a>
                               <div id="lol"> </div>
                              <script>
                                     function verifcnx(){
                                       var email = document.getElementById("email").value;
                                       var password = document.getElementById("password").value;
                                     if (password ==false || email==false) 
                                     {
                                       document.getElementById("lol").innerHTML = ' <p style="color: red; font-size: 20px; font-family: sans-serif; margin:90px 50px 0 250px;" id="erreur1">write your email/password</p>';
                                       document.getElementById("erreur").style.display = "none";
                                       return false;
                                       preventdefault();
                                      }
                                     }
                                    </script>
                              <div class="dropdown-divider"></div>
                             
                              <a style="text-align:center;" class="dropdown-item" href="#"> <input type="submit" style="text-transform: uppercase;color:#b32137;" class="dropdown-item" value="login"></a>
                              </form>    
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
      </div>
      <!-- end header inner -->
   </header>
   <!-- end header -->
   <!-- about -->
   <div class="about-bg">
      <div class="container">
         <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
               <div class="abouttitle">
                  <h2>About Us</h2>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="about">
      <div class="container">
         <div class="row">
            <div class="col-md-10 offset-md-1">
               <div class="aboutheading">
                  <span>Hogwarts is a university made by dispersed wizards : a group of 6 engineers their main goal is
                     changing the world with their new teaching strategies.</span>
               </div>
            </div>
         </div>
         <div class="row border">
            <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
               <div class="about-box">
                  <h1> Hogwarts is a private high school ,founded in 2021, on the initiative of academics experienced in
                     teaching ,who wanted to take up the challenge of creating a private school dedicated to the
                     training of operational engineers.</h1>
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
                     <li> <a href="#"><img src="../Assets/icon/linkedin.png"></a></li>
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
            <p>Copyright 2021 All Right Reserved By <a href="https://html.design/">Free html Templates</a></p>
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
</body>

</html>