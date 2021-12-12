<?php
session_start();

include_once     '../Controller/utilisateurC.php';
include_once '../Model/utilisateur.php';
include_once '../Assets/ASFO/utilis/Config.php';
include_once '../Controller/BlockC.php';

$userC = new utilisateurC();
$x = $userC->getutilisateurbyID($_SESSION['a']);



$blockC = new BlockC();
$listeBlockss = $blockC->afficherblocks();


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
                              <li> <a href="about.php">Forum</a> </li>
                              <li><a href="front3etudiant.php">Subject</a></li>
                              <li><a href="contact.php">classe</a></li>
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
                  <h2>Bloc</h2>
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
                  foreach ($listeBlockss as $block) {
                  ?>

                     <div class="card text-center" style=" width: 29%; margin: 10px 35px 10px;">
                        <div class="card-header bg-gradient-x-purple-red text-white">
                           <div class="row">
                              <div class="col">
                                 <td><img style="border-radius:70%; " width=210 src="https://bloc-digital.com/wp-content/uploads/2020/07/Enterprise-Centre-Bloc-Digital-and-UoD.jpg"></td>
                              </div>
                              <div class="col">
                                 <h2 style="  margin-top: 8%; text-align:center; font-size: 30px; color:white;"><?php echo $block['Nom']; ?></h2>
                                 <h2 style="  margin-top: 8%; text-align:center; font-size: 30px; color:white;">Classrooms :<?php echo $block['Nbrsalles']; ?></h2>
                                 <a href="affichSalles.php?idb=<?php echo $block['Id']; ?>" onmousedown="bleep.play()"><input style="cursor:pointer; width:70%; height:20%; background: #1b2f83;border: none; border-radius: 30px; color: white; margin-top: 10%;" type="button" value="Show classrooms" /> </a><br>
                                 <a href="SupprimerBlock.php?idb=<?php echo $block['Id']; ?>"><input style=" cursor:pointer; background: #FF0000;border: none; border-radius: 30px; color: white;margin-bottom: 0.8em;" type="button" value="delete" /></a>
                                 <a href="front8admin.php?idb=<?php echo $block['Id']; ?>"><input style=" cursor:pointer; background: #00ff00;border: none; border-radius: 30px; color: white;margin-bottom: 0.8em;" type="button" value="update" /></a>

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