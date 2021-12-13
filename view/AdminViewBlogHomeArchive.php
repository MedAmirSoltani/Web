<?php
session_start();
require_once "../Controller/BlogC.php";
require_once "../Controller/CommentC.php";
require_once "../Controller/ReplyC.php";
include_once     '../Controller/utilisateurC.php';
include_once '../Model/utilisateur.php';
$userC = new utilisateurC();
$conn = $userC->getutilisateurbyID($_SESSION['a']);
$affich = "Admin";
if (isset($_POST["search"])) {
    $search = $_POST["search"];
} else {
    $search = "";
}
$BlogC = new BlogC();
$CommentC = new CommentC();
$ReplyC = new ReplyC();
$Blogs = $BlogC->ShowBlogArchiveHome($affich, $search);
$comments = $CommentC->ShowCommentsArchive();
$replys = $ReplyC->ShowReplysArchive();


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
    <title>Hogwarts Archive Blog</title>
    
    
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="../assets/ASBO/theme-assets/css/vendors.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN CHAMELEON  CSS-->
    <link rel="stylesheet" type="text/css" href="../assets/ASBO/theme-assets/css/app-lite.css">
    <!-- END CHAMELEON  CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="../assets/ASBO/theme-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../assets/ASBO/theme-assets/css/core/colors/palette-gradient.css">
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


    <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="../assets/ASBO/theme-assets/images/backgrounds/02.jpg">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="index.html"><img class="brand-logo" alt="Chameleon admin logo" src="../Assets/Images/logo.PNG" />
                        <h3 class="brand-text">Hogwarts</h3>
                    </a></li>
                <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
            </ul>
        </div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="nav-item"><a href="afficherutilisateur.php"><i class="ft-home"></i><span class="menu-title" data-i18n="">Users</span></a>
                </li>
                <li class=" nav-item"><a href="affichermatiere.php"><i class="ft-book"></i><span class="menu-title" data-i18n="">Subjects</span></a>
                </li>
                <li class="nav-item"><a href="afficherclub.php"><i class="ft-credit-card"></i><span class="menu-title" data-i18n="">Clubs</span></a>
                </li>

                <li onclick="affich()" class="active"><a><i class="ft-credit-card"></i><span class="menu-title" data-i18n="">Forum<i class="la la-plus"></i></span></a>

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
                    <h3 class="content-header-title">Tables</h3>
                </div>
                <div class="content-header-right col-md-8 col-12">
                    <div class="breadcrumbs-top float-md-right">
                        <div class="breadcrumb-wrapper mr-1">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Blog
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
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
            <div class="content-body">
                <!-- Table BLOG POST -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <div class="card-content collapse show">
                                <div class="card-body">
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="thead-dark">

                                            <tr>
                                                <th scope="col">User</th>
                                                <th scope="col">IdPost</th>
                                                <th scope="col">Title</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Description</th>
                                                <th scope="col">View</th>
                                                <th scope="col">Restore</th>
                                                <th scope="col">Comments</th>
                                                <th scope="col">DELETE</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if(!$Blogs){echo " THERE IS NO POSTS IN ARCHIVE";}
                                            else {
                                            foreach ($Blogs as $blog) {
                                                $x = $userC->getutilisateurbyID($blog['ID_utilisateur']);
                                                
                                            ?>
                                                <tr>
                                                    <td><?php echo $x['name']; ?></td>
                                                    <td><?php echo $blog['Idpostar']; ?></td>
                                                    <td><?php echo $blog['Title']; ?></td>
                                                    <td><?php echo $blog['Date']; ?></td>
                                                    <td><?php echo $blog['Description']; ?></td>
                                                    <td><a class="btn btn-primary btn-min-width mr-1 mb-1" href="GeneralViewBlogHomeArchive.php" target="_blank">SHOW<i class="ft-link-2"></i></a></td>
                                                    <td><a class="btn btn-info btn-min-width mr-1 mb-1" href="RestorePost.php?Idpost=<?php echo $blog['Idpostar']; ?>" target="_blank">Restore<i class="ft-bookmark"></i></a></td>

                                                    <td><a class="btn btn-danger btn-min-width mr-1 mb-1" href="GeneralViewBlogPostArchive.php?Idpostar=<?php echo $blog['Idpostar']; ?>" target="_blank">SHOWPOST<i class="ft-command"></i></a></td>
                                                    <td><a class="btn btn-danger btn-min-width mr-1 mb-1" href="RemoveBlogPostArchive.php?Idpostar=<?php echo $blog['Idpostar']; ?>">Remove<i class="ft-command"></i></a></td>


                                                </tr>
                                            <?php
                                            }}
                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Table BLOG POST END -->
                <!-- Table BLOG COMMENT start -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <div class="card-content collapse show">
                                <div class="card-body">
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="thead-dark">

                                            <tr>
                                                <th scope="col">User</th>
                                                <th scope="col">IdPost</th>
                                                <th scope="col">IdComment</th>
                                                <th scope="col">Comment</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">View</th>
                                                <th scope="col">Modify</th>
                                                <th scope="col">DELETE</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($comments as $comment) {
                                                $x = $userC->getutilisateurbyID($comment['ID_utilisateur']);
                                            ?>
                                                <tr>
                                                    <td><?php echo $x['name']; ?></td>
                                                    <td><?php echo $comment['Idpostar']; ?></td>
                                                    <td><?php echo $comment['Idcommantar']; ?></td>
                                                    <td><?php echo $comment['Comment_text']; ?></td>
                                                    <td><?php echo $comment['Date_Comment']; ?></td>

                                                    <td><a class="btn btn-primary btn-min-width mr-1 mb-1" href="GeneralViewBlogPostArchive.php?Idpost=<?php echo $comment['Idpostar']; ?>" target="_blank">SHOWPOST<i class="ft-link-2"></i></a></td>

                                                    <td><a class="btn btn-danger btn-min-width mr-1 mb-1" href="RemoveBlogCommentArchive.php?Idcomment=<?php echo $comment['Idcommantar']; ?>">Remove<i class="ft-command"></i></a></td>


                                                </tr>
                                            <?php
                                            }
                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Table head options end -->
                <!-- Table BLOG COMMENT start -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <div class="card-content collapse show">
                                <div class="card-body">
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="thead-dark">

                                            <tr>
                                                <th scope="col">User</th>
                                                <th scope="col">Idreply</th>
                                                <th scope="col">IdComment</th>
                                                <th scope="col">Reply</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">View</th>
                                                <th scope="col">Modify</th>
                                                <th scope="col">DELETE</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($replys as $reply) {
                                                $idc = $CommentC->GetCommentArchivebyID($reply["idcommentar"]);
                                                $x = $userC->getutilisateurbyID($reply['ID_utilisateur']);
                                            ?>

                                                <tr>

                                                    <td><?php echo $reply['Idreply']; ?></td>
                                                    <td><?php echo $reply['Idreply']; ?></td>
                                                    <td><?php echo $reply['idcommentar']; ?></td>
                                                    <td><?php echo $reply['Reply_text']; ?></td>
                                                    <td><?php echo $reply['Date_reply']; ?></td>

                                                    <td><a class="btn btn-primary btn-min-width mr-1 mb-1" href="GeneralViewBlogPostArchive.php?Idpost=<?php echo $idc['Idpostar']; ?>" target="_blank">SHOWPOST<i class="ft-link-2"></i></a></td>
                                                    <td><a class="btn btn-danger btn-min-width mr-1 mb-1" href="RemoveBlogReplyArchive.php?Idreply=<?php echo $reply['Idreply']; ?>">Remove<i class="ft-command"></i></a></td>


                                                </tr>
                                            <?php
                                            }
                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Table head options end -->


            </div>
        </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
        <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">2018 &copy; Copyright <a class="text-bold-800 grey darken-2" href="https://themeselection.com" target="_blank">ThemeSelection</a></span>
            <ul class="list-inline float-md-right d-block d-md-inline-blockd-none d-lg-block mb-0">
                <li class="list-inline-item"><a class="my-1" href="https://themeselection.com/" target="_blank"> More
                        themes</a></li>
                <li class="list-inline-item"><a class="my-1" href="https://themeselection.com/support" target="_blank">
                        Support</a></li>
                <li class="list-inline-item"><a class="my-1" href="https://themeselection.com/products/chameleon-admin-modern-bootstrap-webapp-dashboard-html-template-ui-kit/" target="_blank"> Purchase</a></li>
            </ul>
        </div>
    </footer>

    <!-- BEGIN VENDOR JS-->
    <script src="../assets/ASBO/theme-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CHAMELEON  JS-->
    <script src="../assets/ASBO/theme-assets/js/core/app-menu-lite.js" type="text/javascript"></script>
    <script src="../assets/ASBO/theme-assets/js/core/app-lite.js" type="text/javascript"></script>
    <!-- END CHAMELEON  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
    <script defer src="../assets/ASFO/js/admin.js"></script>

</body>

</html>