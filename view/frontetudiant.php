<?php
session_start();
require '../Controller/matiereC.php';

$matiereC = new matiereC();
$matiere = $matiereC->affichermatiere();
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
   <title>hogwarts</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" href="../Assets/CSS/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" href="../Assets/CSS/style3.css">
   <link rel="stylesheet" href="../Assets/CSS/amir.css">
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
                              <li class="dropdown dropdown-user nav-item"> <a href="#" data-toggle="dropdown">Forum</a>




                                 <div class="dropdown-menu dropdown-menu-right">
                                    <div class="arrow_box_right">

                                       <div class="dropdown-divider"></div>
                                       <a class="dropdown-item" href="Addblogpost.php"><i class="ft-user"></i>Add Post</a>
                                       <a class="dropdown-item" href="GeneralViewBlogHome.php"><i class="ft-user"></i>Blog Home</a>
                                       <div class="dropdown-divider"></div><a class="dropdown-item" href="GeneralViewBlogHomeArchive.php"><i class="ft-power"></i>Archive</a>
                                    </div>
                                 </div>

                              </li>
                              <li><a href="front3admin.php">Subject</a></li>
                              <li><a href="affichBlocks.php">class</a></li>
                              <li class="dropdown dropdown-user nav-item"> <a href="#" data-toggle="dropdown">Reclamation</a>




                                 <div class="dropdown-menu dropdown-menu-right">
                                    <div class="arrow_box_right">

                                       <div class="dropdown-divider"></div>
                                       <a class="dropdown-item" href="afficherRec_noteAD.php"><i class="ft-user"></i>Reclamation Note</a>
                                       <a class="dropdown-item" href="afficherRec_AbsenceAD.php"><i class="ft-user"></i>Reclamation Absence</a>
                                       <div class="dropdown-divider"></div><a class="dropdown-item" href="afficherRec_autreAD.php"><i class="ft-power"></i>Autre Reclamation</a>
                                    </div>
                                 </div>

                              </li>
                              <li><a href="afficherRegistre_appelAD.php">Absence</a></li>
                              <li><a href="afficherutilisateur.php">Panel</a></li>
                              <li><a href="front3etudiant.php">Subject</a></li>
                              <li><a href="club.php">club</a></li>
                              <li class="mean-last"> <a href="profiluser.php"><img src="../Assets/Images/top-icon.png" alt="profiluser.php" /></a> </li>
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
                  <h2>SUBJECTs</h2>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Contact -->
   <div class="Contact">

      <div class="row">
         <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <form>
               <div class="row">








                  <?php
                  $i = 0;

                  foreach ($matiere as $matiere) {

                     $i++;
                  ?>

                     <div class="card text-center" style=" width: 29%; margin: 10px 35px 10px;">
                        <div class="card-header bg-gradient-x-purple-red text-white">
                           <div class="row">
                              <div class="col">
                                 <img src="../Assets/Images/amir.PNG">
                              </div>
                              <div class="col">
                                 <h2 style="text-align:center; font-size: 60px; color:white;"><?php echo $matiere['titre']; ?></h2>
                                 <a href="front2etudiant.php?idmatiere=<?php echo $matiere['idmatiere']; ?>  " onmousedown="bleep.play()"><input style="background: #1b2f83;border: none; border-radius: 30px; color: white; margin-bottom: 0.5em;" type="button" value="courses" /> </a><br>

                                 <h4 style="color:white;"><strong> coef:</strong> <?php echo   $matiere['coff']; ?> </h4>
                                 <h4 style="margin-top: -10px; color:white;"><strong> hours:</strong> <?php echo $matiere['hour']; ?> </h4>
                              </div>
                           </div>
                        </div>
                     </div>






                     <br> <br>


                  <?php
                  }

                  ?>
                  </table>

               </div>
            </form>
         </div>

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
                     <h3>contact us</h3>
                  </div>
                  <input class="Newsletter" placeholder="Enter your email" type="Enter your email">
                  <button class="Subscribe">Send</button>
               </div>
            </div>
         </div>
      </div>
      <div class="copyright">
         <div class="container">
            <p>Copyright 2022 All Right Reserved By Hogwarts university</p>
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