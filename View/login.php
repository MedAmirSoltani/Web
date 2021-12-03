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
<style>
   .fa-color
   {
color:black;
   }
   #hide1{
display:none;
   }
</style>
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
   <link rel="icon" href="images/fevicon.png" type="image/png" />
   <!-- Bootstrap core CSS -->
   <link href="css/bootstrap.css" rel="stylesheet">
   <!-- FontAwesome Icons core CSS -->
   <link href="css/font-awesome.min.css" rel="stylesheet">
   <!-- Custom animate styles for this template -->
   <link href="css/animate.css" rel="stylesheet">
   <!-- Custom styles for this template -->
   <link href="style.css" rel="stylesheet">
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
               <h3>login</h3>    
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
                              

                                  <fieldset>
             <form action="" method="POST" onsubmit="return verifcnx();">
                                     <div class="field">
                                 
                                        <input type="text" name="email" id="email" placeholder="email">
                                     </div>
                                     
                                     <div class="field">
                                     <input type="password" name="password" id="password" placeholder="password"></td>
                              <span class="eye" onclick="toggle()">
                                 <i aria-hidden="true" id="hide1"  class="fa fa-eye fa-2x fa-color" style="position:absolute; margin:-45px 0px 0 690px;" ></i>
                                 <i id="hide2" class="fa fa-eye-slash fa-2x fa-color" aria-hidden="true" style=" margin:-45px 0px 0 690px;"></i>
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
                                     <?php
                                     if(isset($_POST["login"]))
                                     {
                                     if (strcmp($message, 'email or password uncorrect') == 0 )
                                     {
                                       
                                        echo '<p style="color: red; font-size: 20px; font-family: sans-serif; margin:90px 50px 0 250px;" id="erreur" > email or password uncorrect </p>';
                                      
                                     }
                                    }
                                     ?>
                                     <div class="field center">
                                       
                                       <input type="submit" onmousedown="bleep.play()" name="login" style="background: #f06008;font-size: 18px;font-family: sans-serif;font-weight: 300;color: #fff;width: 185px;text-transform: uppercase;" value="login">  
                                    </form>

                               
                                       <div class="row">
                                       <div class="col-md-8 offset-md-2">
                                                     
                                    <form action="signin.php">
                                       <div class="field center">
                                       <script>
                         var bleep=new Audio();
                         bleep.src="ab.mp3";
                      </script>
                                         <button onmousedown="bleep.play()"> sign in</button>
                                         
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
   </body>
</html>