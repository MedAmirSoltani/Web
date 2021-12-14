<?php
session_start();

require_once '../Controller/Registre_appelC.php';
require_once '../Model/Registre_appel.php';
include_once     '../Controller/utilisateurC.php';
include_once '../Model/utilisateur.php';
$userC = new utilisateurC();
$x = $userC->getutilisateurbyID($_SESSION['a']);
$etudiantC = new etudiantC();
$etudiants = $etudiantC->afficheretudiant();



if (isset($_POST['Etudiant']) && isset($_POST['Module']) && isset($_POST['Date']) && isset($_POST['Heure']) && isset($_POST['Etat'])) {
   $registre_appel = new Registre_appel($_POST['Etudiant'], $_POST['Module'], $_POST['Date'], $_POST['Heure'], $_POST['Etat']);
   $et = $etudiantC->getetudiantbyName($_POST["Etudiant"]);
   $registre_appelC = new Registre_appelC();
   $registre_appelC->ajouterRegistre_appel($registre_appel, $et["ID"]);
   header('Location:afficherRegistre_appel.php');
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
                        <div class="logo"> <a href="index.html"><img src="../Assets/Images/logo.png" alt="#"></a> </div>
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
                                    </div>
                                 </div>

                              </li>
                              <li><a href="front3admin.php">Subject</a></li>
                              <li><a href="affichBlocks.php">classe</a></li>
                              <li><a href="club.php">club</a></li>
                              <li class="dropdown dropdown-user nav-item"> <a href="#" data-toggle="dropdown">Reclamation</a>
                                 <div class="dropdown-menu dropdown-menu-right">
                                    <div class="arrow_box_right">
                                       <div class="dropdown-divider"></div>
                                       <a class="dropdown-item" href="ajouterType_reclamation.php"><i class="ft-user"></i>Faire une Reclamation</a>
                                       <a class="dropdown-item" href="chercherReclamation.php"><i class="ft-user"></i>Consulter une Reclamation</a>
                                    </div>
                                 </div>

                              </li>
                              <li> <a href="cherhcerPresences.php">Absence</a> </li>
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
                  <br>
                  <br>
                  <h2>RECLAMATION</h2>
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
               <form action='' method="POST">
                  <div class="row">
                     <div class="col-12">
                        <div class="card">
                           <div class="card-header">
                              <h4 class="card-title">choisir une reclamation</h4>
                              <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                           </div>
                           <div class="card-content collapse show">
                              <div class="table-responsive">
                                 <table class="table">
                                 <thead class="thead-dark">
                              <tr>
                                <th scope="col"><label for="IdRegistre">
                                    <font color="white">Id Registre:</font>
                                  </label></th>
                                <th scope="col"><label for="Module">
                                    <font color="white">Module:</font>
                                  </label></th>
                                <th scope="col"><label for="Etudiant">
                                    <font color="white">Etudiant:</font>
                                  </label></th>
                                <th scope="col"><label for="Date">
                                    <font color="white">Date d'Absence:</font>
                                  </label></th>
                                <th scope="col"><label for="Heure">
                                    <font color="white">Heure d'Absence:</font>
                                  </label></th>
                                <th scope="col"><label for="Etat">
                                    <font color="white">Etat:</font>
                                  </label></th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td><input type="text" name="IdRegistre" id="IdRegistre" maxlength="20"></td>
                                <td><select type="text" name="Module" id="Module">
                                    <option value="">--Veuillez choisir--</option>
                                    <option value="Projet Technologies web">Projet Technologies web</option>
                                    <option value="Mathematique">Mathematique</option>
                                    <option value="Base de Donnees">Base de Donnees</option>
                                  </select></td>

                                <td><select type="text" name="Etudiant" id="Etudiant">
                                    <option value="">--Veuillez choisir--</option>
                                    <?php foreach ($etudiants as $etudiant) { ?>
                                      <option value="<?php echo $etudiant["name"]; ?>"><?php echo $etudiant["name"]; ?></option>
                                    <?php } ?>
                                  </select></td>

                                <td><input type="date" name="Date" id="userdate" onchange="TDate()" required min="2021-09-13" max="2022-06-06"></td>
                                <td><input type="time" id="Heure" name="Heure" min="09:00" max="18:00" required></td>
                                <td><select type="text" name="Etat" id="Etat">
                                    <option value="">--Veuillez choisir--</option>
                                    <option value="present">present</option>
                                    <option value="absent">absent</option>
                                  </select></td>
                              </tr>
                            </tbody>

                                 </table>
                                 <section id="sizes-2">
                                    <div class="card-content collapse show">
                                       <div class="card-body">
                                          <!-- simple sizes -->
                                          <div class="form-group">
                                             <button type="submit" name="command" name="command" class="btn mr-1 mb-1 btn-success btn-lg" value="Envoyer">Envoyer</button>
                                             <button type="reset" name="command" class="btn mr-1 mb-1 btn-danger btn-lg" value="Annuler">Annuler</button>
                                          </div>

                                       </div>
                                    </div>
                                 </section>

                              </div>
                           </div>
                        </div>
                     </div>
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
   <!-- sidebar -->
   <script src="../Assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="../Assets/js/custom.js"></script>
   <script type="text/javascript" src="../Assets/js/Date.js"></script>
   <script type="text/javascript" src="../Assets/js/radio.js"></script>
</body>

</html>