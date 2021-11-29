
<?php
session_start();

include_once     '../Controller/utilisateurC.php';
    include_once '../Model/utilisateur.php' ;
    $userC=new utilisateurC();
$x=$userC->getutilisateurbyID($_SESSION['a']);
    
?>
<!DOCTYPE html>
<html lang="en">
<script> window.history.forward(); </script>
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
                                    <a class="nav-link color-aqua-hover" href="about.php">Emploi</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link color-grey-hover" href="contact1.php">Matière</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link color-grey-hover" href="login.php">Forum</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link color-grey-hover" href="profiluser.php">Profil</a>
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
    
    <form action="updateprofil.php" enctype="multipart/form-data">
     <section class="layout_padding section">
         <div class="container">
           <div class="row">
               <div class="col-md-12">
                  <div class="contact_section margin_top_30">
                     <div class="row">
                        <div class="col-md-8 offset-md-2">
                           <div class="form_cont">
                            <section class="layout_padding section">
                                <div id="test" class="container-fluid">
                                   <div class="row">
                                      <div class="col-lg-12 text_align_center">
                                      </div>
                                      <div class="col-md-12 testimonial">
                                         <div class="full text_align_center">
                                            <div class="full margin_top_30 text_align_center">
                                                <h2 >Your Profil </h2>
                                                <br>
                                                <br>
                                                <br>
<br>
<br><br>
                                                 </div>
                                                 <?php if (empty($x['profilpicture']))
                                                  {
                                                    echo '<img src="uploads/unknown.png" onclick="pictureclick()" id="profildisplay" style="width:60%;float:left;margin:0 10px 0 -200px; border-radius:10%; display:block;"/>';
                                                    
                                                   }
                                                
                                                 ?>
                                                 <img onclick="pictureclick()" <?php if (empty($x['profilpicture'])){ echo 'style="display:none;"'; } ?>  id="profildisplay" style="width:58%; height:370px; float:left;margin:0 10px 0 -200px; border-radius:50%; display:block;" src="uploads/<?php echo $x['profilpicture'] ?>"> 
                                                 <input type="file" accept="image/*" name="profilpicture" onchange="displayImage(this)" id="profilpicture" style="width:0%;float:left;margin:0 10px 0 -200px; display:none; "   />
                                                 <br>
                                                 <span class="left"  style="float:left;margin:400px 10px 0 -260px; "> <p style="color:#dc1a20;font-size: 35px;" ><?php echo $x['name']?></p></span> 
                                                 <button style= "background:#dc1a20; margin:500px 580px 0 -320px;" name="update">update profile</button>
                                                                
      <div style="margin:-500px 10px 0 200px; ">   <p > <strong>Job:</strong> <?php echo $x['role']?>  </p> </div>
      <div style="margin:0px 10px 0 -160px; ">  <h3>Classe:  </h3>  <p><?php echo $_SESSION['c']?>  </p> </div>
      <div>  <h3>ID:  </h3>  <p ><?php echo $x['ID_utilisateur']?> </p> </div>   
                                                                          
    
                                           
                                         </div>
                                         
                                      </div>
                                      
                                      <a href="login.php"> <input type="button" color:#192d82; value="Deconnexion" style= "margin:200px 10px 0 390px; width: 185px;background: #f06008;border: none;color: #fff;height: 65px;font-size: 18px;font-weight: 300;border-radius: 100px;line-height: 72px;text-transform: uppercase;" id="deconnexion"/>   </a>
                                     
    </script>
                                   </div>
                               </div>
                             </section>
                             
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         </form>
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
      <script src="js/click.js"></script>
   </body>
</html>
