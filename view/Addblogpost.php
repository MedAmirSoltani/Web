<?php
session_start();
require_once "../Controller/BlogC.php";
require_once "../Model/Blog.php";
include_once     '../Controller/utilisateurC.php';
include_once '../Model/utilisateur.php';
$userC = new utilisateurC();
$x = $userC->getutilisateurbyID($_SESSION['a']);

$BlogC = new BlogC();


if (isset($_POST['Title']) && isset($_FILES["Picture"]) && isset($_POST['Date']) && isset($_POST['Description'])) {



  $Blog = new post($_POST['Title'], $_FILES["Picture"]["name"], $_POST['Date'], $_POST['Description']);


  $BlogC->AddBlog($Blog, $x['ID_utilisateur']);

  $target_dir = "../assets/ASFO/uploads/";
  $target_file = $target_dir . basename($_FILES["Picture"]["name"]);
  if (move_uploaded_file($_FILES["Picture"]["tmp_name"], $target_file)) {
    echo "KHIDMET YA RJEL";
  }


  header('Location:GeneralViewBlogHome.php');
}


?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Interactive Form</title>
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
  <link href='https://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="../assets/ASFO/css/style.css">



</head>

<body>
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
                    <li><a href="contact.php">classe</a></li>
                    <li><a href="afficherutilisateur.php">Admin Pannel</a></li>
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
  <form action="" method="POST" enctype="multipart/form-data" onsubmit="return CheckAddBlog();">
    <input id="Title" name="Title" type="text" placeholder="Title post" autofocus />

    <label for="Title">
      <span class="label-text">Post Title</span>
      <span class="nav-dot"></span>
    </label>

    <input id="Picture" type="file" name="Picture" />
    <label for="Picture">
      <span class="label-text">Picture</span>
      <span class="nav-dot"></span>
    </label>

    <input id="date" type="date" name="Date" readonly />
    <label for="Date">
      <span class="label-text">Date</span>
      <span class="nav-dot"></span>
    </label>

    <input id="Description" type="text" name="Description" />
    <label for="Description">
      <span class="label-text">Description</span>
      <span class="nav-dot"></span>
    </label>
    <button type="submit">Add Post</button>
    <p class="tip">Press TAB</p>
    <!--<div class="signup-button">kif kif mba3ed</div>-->
  </form>



</body>
<script src="../assets/ASFO/js/AddBlog1.js"></script>

</html>