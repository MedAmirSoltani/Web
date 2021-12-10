<?php
session_start();
require_once     '../Controller/utilisateurC.php';
require_once '../Model/utilisateur.php';

    $utilisateurC = new utilisateurC();
    $etudiantC = new etudiantC();
    //$profC = new profC();
    
    if (  isset($_POST['email']  ) && isset($_POST['password']  ) && isset($_POST['name']  ) && isset($_POST['first_name']  ) && isset($_POST['date_of_birth']  ) && isset($_POST['role']  )) 
    {
      $x = $utilisateurC->getutilisateurbyID($_SESSION['a']) ;
        echo $_POST['ID_utilisateur'] ;
        
      echo "<script> alert('hamadi3ala9el'); </script>";
        $utilisateur = new utilisateur($_POST['ID_utilisateur'], $_POST['email'], $_POST['password'], $_POST['name'], $_POST['first_name'], $_POST['date_of_birth'], $_POST['role'], $_FILES['profilpicture']["name"]);
        $etudiant = new etudiant( $_POST['ID_utilisateur'], $_POST['email'], $_POST['password'], $_POST['name'], $_POST['first_name'], $_POST['date_of_birth'], $_POST['role'], $_FILES['profilpicture']["name"], $_POST['classe']);
         $utilisateurC->modifierutilisateur($utilisateur);
          $etudiantC->modifieretudiant($etudiant);
           header('Location:profiluser.php');
    }
    
    else
    {
      $x = $utilisateurC->getutilisateurbyID($_SESSION['a']) ;
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
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                  <div class="menu-area">
                     <div class="limit-box">
                        <nav class="main-menu">
                           <ul class="menu-area-main">
                           <li > <a href="index.php">Home</a> </li>
                              <li> <a href="about.php">Forum</a> </li>
                              <li><a href="contact.php">matiere</a></li>
                              <li><a href="contact.php">classe</a></li>
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
                  <h2>update profil</h2>
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
               <form id="formulaire" action="" method="POST" onsubmit="return getselectedvalue();" enctype="multipart/form-data" >
                  <div class="row">
                     <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                     <img style="width:40%;height:200px;border-radius:50%;float:center;margin:0 10px 0 450px;  " onclick="pictureclick()" id="profildisplay" width=200  src="../Assets/uploads/<?php echo $x['profilpicture'];?>">
                     <br> <br> <br>
                     <input class="form-control" type="file" accept="image/*" name="profilpicture" onchange="displayImage(this)" id="profilpicture" style="width:40%;height:200px;border-radius:50%;float:left;margin:0 10px 0 -200px; display:none; "  > </td>
                     <img  onclick="pictureclick()" id="profildisplay" style="width:10%;margin:0 90px 0 0px; border-radius:10%; display:block;"/>                     
                     </div>
                     <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <input class="form-control" type="number" name="ID_utilisateur" value="<?php echo $x['ID_utilisateur'];?>" id="ID_utilisateur" id="ID_utilisateur" hidden >
                     </div>
                     <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <input class="form-control" type="email" name="email" id="email" value="<?php echo $x['email'];?>" placeholder="email">
                     </div>
                     <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <input class="form-control" type="password" name="password" value="<?php echo $x['password'];?>" id="password" placeholder="password">
                        <span class="eye" onclick="toggle()">
                                 <i aria-hidden="true" id="hide1"  class="fa fa-eye fa-2x fa-color" style="position:absolute; margin:-65px 0px 0 490px;" ></i>
                                 <i id="hide2" class="fa fa-eye-slash fa-2x fa-color" aria-hidden="true" style="position:absolute; margin:-65px 0px 0 490px;"></i>
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
                    </div>
                     <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                     <input class="form-control" type="text" name="name" value="<?php echo $x['name'];?>" id="name" placeholder="name">
                     </div>
                     <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                     <input class="form-control" type="text" name="first_name" value="<?php echo $x['first_name'];?>" id="first_name" placeholder="first_name">
                     </div>
                     <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                     <input class="form-control" type="date" name="date_of_birth" value="<?php echo $x['date_of_birth'];?>" id="date_of_birth" placeholder="date of birth">
                     </div>




                              
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12" >
                                    
                                    <input type="text" name="role" id="role" value="<?php echo $x['role'];?>"  placeholder="role" hidden></td>      
                                    </div> 
                                    <script>
                         var bleep=new Audio();
                         bleep.src="../Assets/music/amir.mp3";
                      </script>
                  </div>
            </div>
            <button type="submit" value="update" onmousedown="bleep.play()" class="send-btn">Update</button>
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
   <script src="../Assets/js/lol.js"></script>
   <!-- sidebar -->
   <script src="../Assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="../Assets/js/custom.js"></script>
</body>

</html>