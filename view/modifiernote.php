<?php
session_start();
require_once     '../Controller/noteC.php';
require_once '../Model/note.php';
require_once     '../Controller/matiereC.php';
include_once     '../Controller/utilisateurC.php';
$noteC = new noteC();
$userC1 = new utilisateurC();
$conn = $userC1->getutilisateurbyID($_SESSION['a']);
if (isset($_POST['idnote'])  && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['notes']) && isset($_POST['idmatiere'])) {
  echo $_POST['idnote'];
  $note = new note($_POST['idnote'], $_POST['nom'], $_POST['prenom'], $_POST['notes'], $_POST['idmatiere']);
  $noteC->modifiernote($note);
  $id = $_POST['idmatiere'];
  header("Location:affichernote.php?idmatiere=$id");
} else {
  $matiereC = new matiereC();
  $resultats = $matiereC->affichermatiere();
  $a = $noteC->getnotebyID($_GET['idnote']);
}

?>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
  <meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
  <meta name="author" content="ThemeSelect">
  <title>Hogwarts</title>
  <link rel="apple-touch-icon" href="../Assets/theme-assets/images/ico/apple-icon-120.png">

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
        <li class="nav-item"><a href="afficherutilisateur.php"><i class="ft-home"></i><span class="menu-title" data-i18n="">Users</span></a>
        </li>
        <li class="active"><a href="affichermatiere.php"><i class="ft-book"></i><span class="menu-title" data-i18n="">Subjects</span></a>
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

        </div>
        <div class="content-header-right col-md-8 col-12">
          <div class="breadcrumbs-top float-md-right">
            <div class="breadcrumb-wrapper mr-1">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="profiladmin.php">Home</a>
                </li>

                </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="content-body">
        <!-- Basic Tables start -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">update</h4>
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
                <div class="card-body">

                  <div class="table-responsive">
                    <form action="" method="POST">
                      <table class="table" border="1" align="center">
                        <tr>
                          <td>
                            <label for="idnote">idnote:
                            </label>
                          </td>
                          <td><input type="number" name="idnote" id="idnotee" maxlength="20" value="<?php echo $a['idnote']; ?>" readonly></td>
                        </tr>
                        <tr>
                          <td>
                            <label for="nom">nom:
                            </label>
                          </td>
                          <td><input type="text" value="<?php echo $a['nom']; ?>" name="nom" id="nom" maxlength="20"></td>
                        </tr>

                        <td>
                          <label for="prenom">prenom:
                          </label>
                        </td>
                        <td><input type="text" value="<?php echo $a['prenom']; ?>" name="prenom" id="prenom" maxlength="20"></td>
                        </tr>

                        <td>
                          <label for="notes">note:
                          </label>
                        </td>
                        <td><input type="text" value="<?php echo $a['notes']; ?>" name="notes" id="notes" maxlength="20"></td>
                        </tr>

                        <tr>
                          <td>

                            <label for="idmatiere">idmatiere:
                            </label>
                          </td>
                          <td><select name="idmatiere" id="idmatiere">
                              <option value="">--Please choose an option--</option>
                              <?php foreach ($resultats as $value) {
                              ?>
                                <option value="<?php echo ($value["idmatiere"]) ?>"> <?php echo ($value["titre"]) ?></option>

                              <?php } ?>
                          </td>
                          </select>
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
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

</body>

</html>