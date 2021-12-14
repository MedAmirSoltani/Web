<?php

require_once     '../Controller/matiereC.php';
require_once '../Model/matiere.php';
$matiereC = new matiereC();


if (isset($_POST['idmatiere']) && isset($_POST['titre']) && isset($_POST['hour']) && isset($_POST['coff'])) {
   echo $_POST['idmatiere'];
   $matiere = new matiere($_POST['idmatiere'], $_POST['titre'], $_POST['hour'], $_POST['coff']);
   $matiereC->modifiermatiere($matiere);
   header('Location:frontadmin.php');
} else {
   $a = $matiereC->getmatierebyID($_GET['idmatiere']);
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
   <title>hogwarts</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" href="../Assets/CSS/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" href="../Assets/CSS/style3.css">
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
                              < <li class="mean-last"> <a href="profiluser.php"><img src="../Assets/Images/top-icon.png" alt="profiluser.php" /></a> </li>
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
                  <h2>COURSES</h2>
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


               <form action="" method="POST" onsubmit="return verif();">
                  <div class="row">
                     <table class="table" border="1" align="center">
                        <tr>
                           <td>
                              <label for="idmatiere">idmatiere:
                              </label>
                           </td>
                           <td><input type="number" name="idmatiere" id="idmatiere" maxlength="20" value="<?php echo $a['idmatiere']; ?>" readonly></td>
                        </tr>
                        <tr>
                           <td>
                              <label for="titre">titre:
                              </label>
                           </td>
                           <td><input type="text" value="<?php echo $a['titre']; ?>" name="titre" id="titre" maxlength="20"></td>
                        </tr>
                        <tr>
                           <td>
                              <label for="coff">coff:
                              </label>
                           </td>
                           <td><input type="number" value="<?php echo $a['coff']; ?>" name="coff" id="coff" max="10"></td>
                        </tr>
                        <tr>
                           <td>
                              <label for="hour">hour:
                              </label>
                           </td>
                           <td><input type="number" value="<?php echo $a['hour']; ?>" name="hour" id="hour" max="200"></td>
                        </tr>

                        <tr>
                           <td>
                              <input type="submit" value="Modifier">
                           </td>
                           <td>
                              <input type="reset" value="Annuler">
                           </td>
                        </tr>
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