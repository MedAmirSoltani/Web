<?php
require_once "../Controller/BlogC.php";
session_start();

$BlogC = new BlogC();
if (isset($_POST["search"])) {
    //$_SESSION['search']=$_POST["search"];
    $lists = $BlogC->ShowBlogHomeByTitle($_POST["search"]);
} else {
    $Blogs = $BlogC->ShowBlogHome();
}

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
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
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
    <link rel="stylesheet" type="text/css" href="../assets/ASBO/theme-assets/css/vendors.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN CHAMELEON  CSS-->
    <link rel="stylesheet" type="text/css" href="../assets/ASBO/theme-assets/css/app-lite.css">
    <!-- END CHAMELEON  CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="../assets/ASBO/theme-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../assets/ASBO/theme-assets/css/core/colors/palette-gradient.css">
    <!---------------------END BACKOFFICE ------------------------------------>

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



    <div class="container">
        <div class="row">
            <!-- Blog entries-->
            <div class="col-lg-8">
                <!-- Nested row for non-featured blog posts-->
                <div class="row">

                    <div class="col-lg-6">
                        <!-- Blog post-->
                        <?php
                        if (isset($Blogs)) {
                            foreach ($Blogs as $blog) {

                        ?>
                                <div class="card mb-4">

                                    <<img class="card-img-top" src="../assets/ASFO/uploads/<?php echo $blog['Picture'] ?>" height="500" width="1200" alt="..." />
                                    <div class="card-body">
                                        <div class="small text-muted"><?php echo $blog['Date']; ?></div>
                                        <h2 class="card-title h4"><?php echo $blog['Title'] ?></h2>
                                        <p class="card-text"><?php echo $blog['Description']; ?></p>
                                        <a class="btn btn-primary" href="GeneralViewBlogPost.php?Idpost=<?php echo $blog['Idpost']; ?>" target="_blank">Read more →</a>
                                        <a class="btn btn-info btn-min-width mr-1 mb-1" href="Updateblogpost.php?Idpost=<?php echo $blog['Idpost']; ?>" target="_blank">Update<i class="ft-bookmark"></i></a><a class="btn btn-danger btn-min-width mr-1 mb-1" href="RemoveBlogPost.php?Idpost=<?php echo $blog['Idpost']; ?>">Remove<i class="ft-command"></i></a>



                                    </div>

                                </div>
                            <?php }
                        } else {
                            foreach ($lists as $list) {
                            ?>
                                <div class="card mb-4">

                                    <<img class="card-img-top" src="../assets/ASFO/uploads/<?php echo $list['Picture'] ?>" height="500" width="1200" alt="..." />
                                    <div class="card-body">
                                        <div class="small text-muted"><?php echo $list['Date']; ?></div>
                                        <h2 class="card-title h4"><?php echo $list['Title'] ?></h2>
                                        <p class="card-text"><?php echo $list['Description']; ?></p>
                                        <a class="btn btn-primary" href="GeneralViewBlogPost.php?Idpost=<?php echo $list['Idpost']; ?>" target="_blank">Read more →</a>
                                        <a class="btn btn-info btn-min-width mr-1 mb-1" href="Updateblogpost.php?Idpost=<?php echo $list['Idpost']; ?>" target="_blank">Update<i class="ft-bookmark"></i></a><a class="btn btn-danger btn-min-width mr-1 mb-1" href="RemoveBlogPost.php?Idpost=<?php echo $blog['Idpost']; ?>">Remove<i class="ft-command"></i></a>



                                    </div>

                                </div>

                        <?php }
                        } ?>

                        <!-- Pagination-->
                        <nav aria-label="Pagination">
                            <hr class="my-0" />
                            <ul class="pagination justify-content-center my-4">
                                <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
                                <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                                <li class="page-item"><a class="page-link" href="#!">2</a></li>
                                <li class="page-item"><a class="page-link" href="#!">3</a></li>
                                <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                                <li class="page-item"><a class="page-link" href="#!">15</a></li>
                                <li class="page-item"><a class="page-link" href="#!">Older</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- Side widgets-->
                    <div class="col-lg-4">
                        <!-- Search widget-->
                        <form action="" method="POST">
                            <div class="card mb-4">
                                <div class="card-header">Search</div>
                                <div class="card-body">
                                    <div class="input-group">

                                        <input class="form-control" name="search" type="text" placeholder="Enter Title..." aria-label="Enter search term..." aria-describedby="button-search" />
                                        <input type="submit" class="btn btn-primary" id="button-search" Value="Search" />

                                    </div>
                                </div>
                            </div>
                        </form>
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