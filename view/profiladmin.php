<?php
session_start();
include_once     '../Controller/utilisateurC.php';
include_once '../Model/utilisateur.php';
$userC = new utilisateurC();
$x = $userC->getutilisateurbyID($_SESSION['a']);
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
   <!--jquerry-->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   <!-- background css -->
   <link rel="stylesheet" href="../Assets/CSS/background.css">
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
                              <?php if (($x["role"]) != "Prof") { ?>
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
                              <?php } ?>
                              <li><a href="afficherRegistre_appelAD.php">Absence</a></li>
                              
                              <li><a href="afficherutilisateur.php">Panel</a></li>
                              <li class="mean-last"> <a id="login" href="#"><img src="../Assets/Images/top-icon.png" alt="#" /></a> </li>
                              <div class="arrow-up">

                                 <div class="login-form">
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
   <form action="updateprofiladmin.php" enctype="multipart/form-data">
      <section class="slider_section">
         <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img src="../Assets/Images/fond.png" alt="First slide">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <h1 class="titre">Your Profil</h1>
                        <br><br>
                        <?php if (empty($x['profilpicture'])) {
                           echo '<img src="../Assets/uploads/unknown.png" onclick="pictureclick()" id="profildisplay" style="width:20%; height:290px;float:left;margin:0 10px 0 -200px; border-radius:10%; display:block;"/>';
                        }

                        ?>
                        <img onclick="pictureclick()" <?php if (empty($x['profilpicture'])) {
                                                         echo 'style="display:none;"';
                                                      } ?> id="profildisplay" style="width:20%; height:290px; float:left;margin:190 10px 0 0px; border-radius:50%; display:block;" src="../Assets/uploads/<?php echo $x['profilpicture'] ?>">
                        <input type="file" accept="image/*" name="profilpicture" onchange="displayImage(this)" id="profilpicture" style="width:20%;float:left;margin:190 10px 0 0px; display:none; " />
                        <br>
                        <span class="left" style="float:left;margin:280px 10px 0 -170px; ">
                           <p style="color:white;font-family: inherit;font-size: 35px;"><?php echo $x['name'] ?></p>
                        </span>
                        <button class="send-btn" style="margin:350px 580px 0 -300px;" name="update">update profile</button>
                        <div style="margin:-400px 10px 0 800px;color:white;">
                           <h2 style="color:white;"> <strong>Job:</strong> <?php echo $x['role'] ?> </h2>
                        </div>
                        <br>
                        <br>
                        <div style="margin:0px 10px 0 850px; ">
                           <h2 style="color:white;"><strong>ID: </strong> <?php echo $x['ID_utilisateur'] ?> </h2>
                        </div>
                        <a href="deconnexion.php"> <input type="button" value="Deconnexion" style="margin:150px 10px 0 450px; width: 185px;background: #f06008;border: none;color: #fff;height: 65px;font-size: 18px;font-weight: 300;border-radius: 100px;line-height: 72px;text-transform: uppercase;" id="deconnexion" /> </a>
                     </div>
                  </div>
               </div>


            </div>
      </section>
   </form>
   <!-- Javascript files-->
   <script src="../Assets/js/jquery.min.js"></script>
   <script src="../Assets/js/popper.min.js"></script>
   <script src="../Assets/js/bootstrap.bundle.min.js"></script>
   <script src="../Assets/js/jquery-3.0.0.min.js"></script>
   <script src="../Assets/js/plugin.js"></script>
   <script src="../Assets/js/click.js"></script>
   <!-- sidebar -->
   <script src="../Assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="../Assets/js/custom.js"></script>

</body>

</html>