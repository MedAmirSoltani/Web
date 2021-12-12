<?php
require_once "../Controller/BlogC.php";
require_once "../Controller/CommentC.php";
require_once "../Controller/ReplyC.php";


$CommentC = new CommentC();
$BlogC = new BlogC();
if (isset($_GET["affich"])) {
    $affich = $_GET["affich"];
} else {
    $affich = "";
}
if (isset($_POST["search"])) {
    $search = $_POST["search"];
} else {
    $search = "";
}
$Blogs = $BlogC->ShowBlogHome($affich, $search);

?>
<!DOCTYPE html>
<html lang="en">

<head>
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
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../assets/ASFO/css/stylesblog.css" rel="stylesheet" />
    <!--------Backendoffice add ------------------------------->
    <link rel="apple-touch-icon" href="../assets/ASBO/theme-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/ASBO/theme-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->

    <!-- END VENDOR CSS-->
    <!-- BEGIN CHAMELEON  CSS-->
    <link rel="stylesheet" type="text/css" href="../assets/ASBO/theme-assets/css/app-lite.css">
    <!-- END CHAMELEON  CSS-->
    <!-- BEGIN Page Level CSS-->


    <!---------------------END BACKOFFICE ------------------------------------>
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
                                                    <div class="dropdown-divider"></div><a class="dropdown-item" href=""><i class="ft-power"></i>Archive</a>
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

</head>

<body>

    <!-- Responsive navbar-->
    <!-- <nav class="navbar navbar-inverse navbar-toggleable-md">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#cloapediamenu"
            aria-controls="cloapediamenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="float-left">Menu</span>
            <span class="float-right"><i class="fa fa-bars"></i> <i class="fa fa-close"></i></span>
        </button>-->
    <div class="collapse navbar-collapse justify-content-md-center" id="cloapediamenu">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link color-aqua-hover" href="about.html">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link color-grey-hover" href="contact.html">Contact Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link color-grey-hover" href="contact.html">Login</a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
            </li>
        </ul>
    </div>
    </nav>
    <!-- Page content-->



    <div class="">
        <div class="row">
            <!-- Blog entries-->
            <div class="col-lg-8" style=margin:auto;>
                <!-- Nested row for non-featured blog posts-->
                <div class="row">

                    <div class="col-lg-6" style=margin:auto;>
                        <!-- Blog post-->
                        <?php

                        foreach ($Blogs as $blog) {

                        ?>
                            <div class="card mb-4">

                                <img class="card-img-top" src="../assets/ASFO/uploads/<?php echo $blog['Picture'] ?>" height="500" width="700" alt="..." />
                                <div class="card-body">
                                    <div class="small text-muted"><?php echo $blog['Date']; ?></div>
                                    <h2 class="card-title h4"><?php echo $blog['Title']; ?></h2>
                                    <p class="card-text"><?php echo $blog['Description']; ?></p>
                                    <a class="btn btn-primary" href="GeneralViewBlogPost.php?Idpost=<?php echo $blog['Idpost']; ?>#test" target="_blank">Read more →</a>
                                    <a class="btn btn-info btn-min-width mr-1 mb-1" href="Updateblogpost.php?Idpost=<?php echo $blog['Idpost']; ?>" target="_blank">Update<i class="ft-bookmark"></i></a><a class="btn btn-danger btn-min-width mr-1 mb-1" href="RemoveBlogPost.php?Idpost=<?php echo $blog['Idpost']; ?>">Remove<i class="ft-command"></i></a>



                                </div>

                            </div>
                        <?php } ?>


                        <!-- Pagination-->
                        <nav aria-label="Pagination">
                            <hr class="my-0" />
                            <ul class="pagination justify-content-center my-4">
                                <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
                                <li class="page-item active" aria-current="page"><a class="page-link" href="?page=1">1</a></li>
                                <li class="page-item"><a class="page-link" href="?page=2">2</a></li>
                                <li class="page-item"><a class="page-link" href="?page=3">3</a></li>
                                <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                                <li class="page-item"><a class="page-link" href="#!">15</a></li>

                            </ul>
                        </nav>
                    </div>
                    <!-- Side widgets-->
                    <div class="col-lg-4">
                        <!-- Search widget-->
                        <form action="" method="POST">
                            <div class="card mb-4" style=margin:auto;>
                                <div class="card-header">Search</div>
                                <div class="card-body">
                                    <div class="input-group">

                                        <input class="form-control" name="search" type="text" placeholder="Enter Title..." aria-label="Enter search term..." aria-describedby="button-search" />
                                        <input type="submit" class="btn btn-primary" id="button-search" Value="Search" />

                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- Categories widget-->
                        <div class="card mb-4">
                            <div class="card-header">Categories</div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul class="list-unstyled mb-0">
                                            <li><a href="#!">Web Design</a></li>
                                            <li><a href="#!">HTML</a></li>
                                            <li><a href="#!">Freebies</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <ul class="list-unstyled mb-0">
                                            <li><a href="#!">JavaScript</a></li>
                                            <li><a href="#!">CSS</a></li>
                                            <li><a href="#!">Tutorials</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Side widget-->
                        <!-- Categories widget-->
                        <div class="card mb-4">
                            <div class="card-header">Categories</div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul class="list-unstyled mb-0">
                                            <li><a href="?affich=AZ">A-Z</a></li>
                                            <li><a href="?affich=ZA">Z-A</a></li>
                                            <li><a href="GeneralViewBlogHome.php">Latest</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <ul class="list-unstyled mb-0">
                                            <li><a href="?affich=Oldest">Oldest</a></li>
                                            <li><a href="?affich=Active">Most Active</a></li>
                                            <li><a href="?affich=Nactive">Less Active</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Side widget-->
                    </div>
                </div>
            </div>

            <!-- Footer-->
            <footer class="py-5 bg-dark">
                <div class="container">
                    <p class="m-0 text-center text-white">Copyright &copy; Hogwarts 2021</p>
                </div>
            </footer>
            <!-- Bootstrap core JS-->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
            <!-- Core theme JS-->
            <script src="../assets/ASFO/js/scripts.js"></script>
            <script src="../assets/ASFO/js/scriptaddblog.js"></script>
</body>

</html>