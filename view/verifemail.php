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
        header("Location: index.php");
        }
        else{
         header("Location: verifemail.php");
        }
       
    } 

?>
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

<body class="main-layout contact-page">
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
               <d <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                  <div class="menu-area">
                     <div class="limit-box">
                        <nav class="main-menu">
                           <ul class="menu-area-main">
                              <li> <a href="index.php">Home</a> </li>
                              <li> <a href="about.php">About us</a> </li>
                              <li><a href="contact.php">Contact us</a></li>
                              <li class="mean-last"> <a href="#"><img src="../Assets/Images/search_icon.png" alt="#" /></a> </li>
                              <li class="mean-last"> <a href="#"><img src="../Assets/Images/top-icon.png" alt="#" /></a> </li>
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
   <div class="about-bg">
      <div class="container">
         <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
               <div class="abouttitle">
                  <h2>Code de verification</h2>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Contact -->
   <div class="Contact">
      <div class="container">
         <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <p style="text-align: center;font-size: 21px; color:#878585;">Write the code that was sent to your email here</p>   
            <br><br><br> 
            <form id="formulaire" action="" method="POST" >
                  <div  class="row">
                     
                                    
                                  
                                                <input  class="form-control" style="text-align:center; width:30%; margin:0 0px 0 400px;" type="int" name="code" id="code" placeholder="enter the code"/>
                                   
                                 <br><br><br>
                                  
                                 
                                
                                    <script>
                         var bleep=new Audio();
                         bleep.src="ab.mp3";
                      </script>



                  </div>
               
            </div>
            <button type="submit" onmousedown="bleep.play()" class="send-btn">Send</button>
        </form> 
        </div>
      </div>
   </div>
   <!-- end Contact -->
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
            <p>Copyright 2019 All Right Reserved By <a href="https://html.design/">Free html Templates</a></p>
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
   <script src="../Assets/js/click.js"></script>
   <script src="../Assets/js/verifier.js"></script>
   <!-- sidebar -->
   <script src="../Assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="../Assets/js/custom.js"></script>
</body>

</html>