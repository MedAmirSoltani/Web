<?php
session_start();
require '../Controller/Rec_noteC.php';
include_once     '../Controller/utilisateurC.php';
include_once '../Model/utilisateur.php';
$userC = new utilisateurC();
$x = $userC->getutilisateurbyID($_SESSION['a']);
$etudiantC = new etudiantC();
$etudiants = $etudiantC->afficheretudiant();
$rec_noteC = new Rec_noteC();
$rec_notes = $rec_noteC->afficherRec_note();
?>
<?php
require '../Controller/AbsenceC.php';
include_once     '../Controller/utilisateurC.php';
include_once '../Model/utilisateur.php';
$userC = new utilisateurC();
$x = $userC->getutilisateurbyID($_SESSION['a']);
$etudiantC = new etudiantC();
$etudiants = $etudiantC->afficheretudiant();
$absenceC = new AbsenceC();
$absences = $absenceC->afficherAbsence();
?>
<?php
require '../Controller/Rec_autreC.php';
include_once     '../Controller/utilisateurC.php';
include_once '../Model/utilisateur.php';
$userC = new utilisateurC();
$x = $userC->getutilisateurbyID($_SESSION['a']);
$etudiantC = new etudiantC();
$etudiants = $etudiantC->afficheretudiant();
$rec_autreC = new Rec_autreC();
$rec_autres = $rec_autreC->afficherRec_autre();
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
  <meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
  <meta name="author" content="ThemeSelect">
  <title>Tables - Chameleon Admin - Modern Bootstrap 4 WebApp & Dashboard HTML Template + UI Kit</title>
  <link rel="apple-touch-icon" href="../Assets/theme-assets/images/ico/apple-icon-120.png">
  <link rel="shortcut icon" type="image/x-icon" href="../Assets/theme-assets/images/ico/favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="../Assets/theme-assets/css/vendors.css">
  <!-- END VENDOR CSS-->
  <!-- BEGIN CHAMELEON  CSS-->
  <link rel="stylesheet" type="text/css" href="../Assets/theme-assets/css/app-lite.css">
  <!-- END CHAMELEON  CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="../Assets/theme-assets/css/core/menu/menu-types/vertical-menu.css">
  <link rel="stylesheet" type="text/css" href="../Assets/theme-assets/css/core/colors/palette-gradient.css">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <!-- END Custom CSS-->
</head>

<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="2-columns">

  <!-- fixed-top-->
  <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light">
    <div class="navbar-wrapper">
      <div class="navbar-container content">
        <div class="collapse navbar-collapse show" id="navbar-mobile">
          <ul class="nav navbar-nav mr-auto float-left">
            <li class="nav-item d-block d-md-none"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
            <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
            <li class="nav-item dropdown navbar-search"><a class="nav-link dropdown-toggle hide" data-toggle="dropdown" href="#"><i class="ficon ft-search"></i></a>
              <ul class="dropdown-menu">
                <li class="arrow_box">
                  <form>
                    <div class="input-group search-box">
                      <div class="position-relative has-icon-right full-width">
                        <input class="form-control" id="search" type="text" placeholder="Search here...">
                        <div class="form-control-position navbar-search-close"><i class="ft-x"> </i></div>
                      </div>
                    </div>
                  </form>
                </li>
              </ul>
            </li>
          </ul>

          <ul class="nav navbar-nav float-right">

            <?php if (empty($conn['profilpicture'])) {
              echo '<img src="../Assets/uploads/unknown.png" onclick="pictureclick()" id="profildisplay" style="width:100%; height:50px;border-radius:10%; display:block;"/>';
            }

            ?>
            <img <?php if (empty($conn['profilpicture'])) {
                    echo 'style="display:none;"';
                  } ?> id="profildisplay" style="width:25%; height:35px; float:left;margin:0 10px 0 250px; border-radius:50%; display:block;" src="../Assets/uploads/<?php echo $conn['profilpicture'] ?>">


          </ul>
          <ul class="nav navbar-nav float-right">


            <div class="dropdown-menu dropdown-menu-right">
              <div class="arrow_box_right"><a class="dropdown-item" href="#"><span class="avatar avatar-online"><img src="../Assets/theme-assets/images/portrait/small/avatar-s-19.png" alt="avatar"><span class="user-name text-bold-700 ml-1">John Doe</span></span></a>
                <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="ft-user"></i> Edit Profile</a><a class="dropdown-item" href="#"><i class="ft-mail"></i> My Inbox</a><a class="dropdown-item" href="#"><i class="ft-check-square"></i> Task</a><a class="dropdown-item" href="#"><i class="ft-message-square"></i> Chats</a>
                <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="ft-power"></i> Logout</a>
              </div>
            </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>


  <!-- ////////////////////////////////////////////////////////////////////////////-->

  <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="../Assets/theme-assets/images/backgrounds/02.jpg">
    <div class="navbar-header">
      <ul class="nav navbar-nav flex-row">
        <li class="nav-item mr-auto"><a class="navbar-brand" href="index.html"><img class="brand-logo" alt="Chameleon admin logo" src="../Assets/Images/logo.PNG" />
            <h3 class="brand-text">Hogwarts</h3>
          </a></li>
        </a></li>
        <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
      </ul>
    </div>
    <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class=" active"><a href="afficherutilisateur.php"><i class="ft-home"></i><span class="menu-title" data-i18n="">Users</span></a>
        </li>
        <li class=" nav-item"><a href="affichermatiere.php"><i class="ft-book"></i><span class="menu-title" data-i18n="">Subjects</span></a>
        </li>
        <li class="nav-item"><a href="afficherclub.php"><i class="ft-credit-card"></i><span class="menu-title" data-i18n="">Clubs</span></a>
        </li>
        <li onclick="affich()" class="nav-item"><a><i class="ft-credit-card"></i><span class="menu-title" data-i18n="">Forum<i class="la la-plus"></i></span></a>

        <li class=" nav-item" id="forum"><a href="AdminViewBlogHome.php"><i class="ft-credit-card"></i><span class="menu-title" data-i18n="">Blog</span></a>
        </li>
        <li class=" nav-item" id="forumar"><a href="AdminViewBlogHomeArchive.php"><i class="ft-credit-card"></i><span class="menu-title" data-i18n="">Blog Archive</span></a>
        </li>

        </li>

        <li class="nav-item"><a href="affichBlocksAd.php"><i class="ft-box"></i><span class="menu-title" data-i18n="">Bloc</span></a>
        </li>
        <li class=" nav-item"><a href="afficherLesReclamations.php"><i class="ft-bold"></i><span class="menu-title" data-i18n="">Reclamation</span></a>
        </li>
        <li class="nav-item"><a href="afficherRegistre_appel.php"><i class="ft-credit-card"></i><span class="menu-title" data-i18n="">Absence</span></a>
        </li>


      </ul>
    </div>
    <div class="navigation-background"></div>
  </div>

  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-wrapper-before"></div>
      <div class="content-header row">
        <div class="content-header-left col-md-4 col-12 mb-2">
          <h3 class="content-header-title">Reclamations</h3>
        </div>
        <div class="content-header-right col-md-8 col-12">
          <div class="breadcrumbs-top float-md-right">
            <div class="breadcrumb-wrapper mr-1">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="profiladmin.php">Home</a>
                </li>
                <li class="breadcrumb-item active">Reclamations
                </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <!-- Table Reclamation Note start -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Reclamation Note</h4>
              <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
              <div class="heading-elements">
                <ul class="list-inline mb-0">
                  <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                  <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                  <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                  <li><a data-action="close"><i class="ft-x"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="card-content collapse show">
              <form action='' method="POST">
                <div class="table-responsive">
                  <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col"><label for="Id_note">
                            <font color="White">Id note</font>
                          </label></th>
                        <th scope="col"><label for="Id_etudiant">
                            <font color="White">Nom Etudiant : </font>
                          </label></th>
                        <th scope="col"><label for="Description">
                            <font color="White">Description </font>
                          </label></th>
                        
                        <th scope="col"><label for="Description">
                            <font color="White">Description </font>
                          </label></th>
                          <th scope="col"><label for="Module">
                            <font color="White">Module </font>
                          </label></th>
                          <th scope="col"><label for="Id_note">
                            <font color="White"></font>
                          </label></th>
                          <th scope="col"><label for="Id_note">
                            <font color="White"></font>
                          </label></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      foreach ($rec_notes as $rec_note) {
                        $idu = $rec_note["Id_etudiant"];
                        $et = $etudiantC->getetudiantbyID($idu);
                      ?>
                        <tr>
                          <td><?php echo $rec_note['Id_note']; ?></td>
                          <td><?php echo $et["name"]; ?></td>
                          <td><?php echo $rec_note['Module']; ?></td>
                          <td><?php echo $rec_note['Description']; ?></td>
                          <td><a href="supprimerRec_note.php?Id_note=<?php echo $rec_note['Id_note']; ?>"><img src="../Assets/Images/sup.jpg" witdh='25px' height='25px'></a></td>
                          <td><a href="modifierRec_note.php?Id_note=<?php echo $rec_note['Id_note']; ?>">modifier</a></td>
                        </tr>

                      <?php
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Table Reclamation Note end -->

      <!-- Table Reclamation Absence start -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Reclamation Absence</h4>
              <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
              <div class="heading-elements">
                <ul class="list-inline mb-0">
                  <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                  <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                  <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                  <li><a data-action="close"><i class="ft-x"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="card-content collapse show">
              <form action='' method="POST">
                <div class="table-responsive">
                  <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col"><label for="Id_reclamation">
                            <font color="White">Id reclamation</font>
                          </label></th>
                        <th scope="col"><label for="Id_etudiant">
                            <font color="White">Nom Etudiant </font>
                          </label></th>
                        <th scope="col"><label for="Module">
                            <font color="White">Module </font>
                          </label></th>
                        <th scope="col"><label for="Date_absence">
                            <font color="White">Date d'absence </font>
                          </label></th>
                        <th scope="col"><label for="Heure_absence">
                            <font color="White">Heure d'absence </font>
                          </label></th>
                        <th scope="col"><label for="Description">
                            <font color="White">Description </font>
                          </label></th>
                          <th scope="col"><label for="Id_note">
                            <font color="White"></font>
                          </label></th>
                          <th scope="col"><label for="Id_note">
                            <font color="White"></font>
                          </label></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      foreach ($absences as $absence) {
                        $idu = $absence["Id_etudiant"];
                        $et = $etudiantC->getetudiantbyID($idu);
                      ?>
                        <tr>
                          <td><?php echo $absence['Id_absence']; ?></td>
                          <td><?php echo $et["name"]; ?></td>
                          <td><?php echo $absence['Module']; ?></td>
                          <td><?php echo $absence['Date_absence']; ?></td>
                          <td><?php echo $absence['Heure_absence']; ?></td>
                          <td><?php echo $absence['Description']; ?></td>
                          <td><a href="supprimerAbsence.php?Id_absence=<?php echo $absence['Id_absence']; ?>"><img src="../Assets/Images/sup.jpg" witdh='25px' height='25px'></a></td>
                          <td><a href="modifierAbsence.php?Id_absence=<?php echo $absence['Id_absence']; ?>">modifier</a></td>
                        </tr>

                      <?php
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Table Reclamation Absence end -->

      <!-- Table Reclamation Autre start -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Autre Reclamation</h4>
              <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
              <div class="heading-elements">
                <ul class="list-inline mb-0">
                  <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                  <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                  <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                  <li><a data-action="close"><i class="ft-x"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="card-content collapse show">
              <form action='' method="POST">
                <div class="table-responsive">
                  <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col"><label for="Id_autre">
                            <font color="White">Id autre</font>
                          </label></th>
                        <th scope="col"><label for="Id_etudiant">
                            <font color="White">Nom Etudiant</font>
                          </label></th>
                        <th scope="col"><label for="Description">
                            <font color="White">Description </font>
                          </label></th>
                          <th scope="col"><label for="Id_note">
                            <font color="White"></font>
                          </label></th>
                          <th scope="col"><label for="Id_note">
                            <font color="White"></font>
                          </label></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      foreach ($rec_autres as $rec_autre) {
                        $idu = $rec_autre["Id_etudiant"];
                        $et = $etudiantC->getetudiantbyID($idu);
                      ?>
                        <tr>
                          <td><?php echo $rec_autre['Id_autre']; ?></td>
                          <td><?php echo $et["name"]; ?></td>
                          <td><?php echo $rec_autre['Description']; ?></td>
                          <td><a href="supprimerRec_autre.php?Id_autre=<?php echo $rec_autre['Id_autre']; ?>"><img src="../Assets/Images/sup.jpg" witdh='25px' height='25px'></a></td>
                          <td><a href="modifierRec_autre.php?Id_autre=<?php echo $rec_autre['Id_autre']; ?>">modifier</a></td>
                        </tr>

                      <?php
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Table Reclamation Autre end -->
    </div>
  </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->


  <footer class="footer footer-static footer-light navbar-border navbar-shadow">
    <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">2018 &copy; Copyright <a class="text-bold-800 grey darken-2" href="https://themeselection.com" target="_blank">ThemeSelection</a></span>
      <ul class="list-inline float-md-right d-block d-md-inline-blockd-none d-lg-block mb-0">
        <li class="list-inline-item"><a class="my-1" href="https://themeselection.com/" target="_blank"> More themes</a></li>
        <li class="list-inline-item"><a class="my-1" href="https://themeselection.com/support" target="_blank"> Support</a></li>
        <li class="list-inline-item"><a class="my-1" href="https://themeselection.com/products/chameleon-admin-modern-bootstrap-webapp-dashboard-html-template-ui-kit/" target="_blank"> Purchase</a></li>
      </ul>
    </div>
  </footer>

  <!-- BEGIN VENDOR JS-->
  <script src="../Assets/theme-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN CHAMELEON  JS-->
  <script src="../Assets/theme-assets/js/core/app-menu-lite.js" type="text/javascript"></script>
  <script src="../Assets/theme-assets/js/core/app-lite.js" type="text/javascript"></script>
  <script defer src="../assets/ASFO/js/admin.js"></script>
  <!-- END CHAMELEON  JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <!-- END PAGE LEVEL JS-->
</body>

</html>