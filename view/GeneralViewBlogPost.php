<?php


require_once "../Controller/BlogC.php";
require_once "../Controller/CommentC.php";
require_once "../Controller/ReplyC.php";
require_once "../Model/Comment.php";
require_once "../Model/Reply.php";
include_once     '../Controller/utilisateurC.php';
include_once '../Model/utilisateur.php';


session_start();

unset($_SESSION['idp']);

if (!isset($_SESSION['idp']) && isset($_GET["Idpost"])) {
    $_SESSION['idp'] = $_GET["Idpost"];
}

$userC = new utilisateurC();
$x = $userC->getutilisateurbyID($_SESSION['a']);


$BlogC = new BlogC();
$CommentC = new CommentC();
$ReplyC = new ReplyC();



$test = $BlogC->GetPostbyID($_SESSION['idp']);
if (isset($_POST["Nvote"])) {
    $BlogC->AddNvotes($_POST["Nvote"], $_SESSION['idp']);
}

if (isset($_POST['Comment_text']) && isset($_POST['Date_Comment'])) {


    $Comment = new Comment($_SESSION['idp'], $_POST['Comment_text'], $_POST['Date_Comment']);
    $CommentC->AddComment($Comment, $_SESSION['idp'], $x['ID_utilisateur']);
    $nombre = $CommentC->NumberComment($_SESSION['idp']);
    $BlogC->AddNcomments($nombre, $_SESSION['idp']);
}
if (isset($_POST['Reply_text']) && isset($_POST['Date_reply'])) {


    $Reply = new Reply($_POST["Idcomment"], $_POST['Reply_text'], $_POST['Date_reply']);
    $ReplyC->AddReply($Reply, $x['ID_utilisateur']);
}
$comments = $CommentC->ShowComment($_SESSION['idp']);




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
    <!-- site icon -->
    <link rel="icon" href="images/fevicon.png" type="image/png" />
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

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Blog Post - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../assets/ASFO/css/stylesblogpost.css" rel="stylesheet" />
    <script src="../assets/ASFO/js/AddComment.js"></script>
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

<body onload="NowDate()">
    <!-- Responsive navbar-->
    <nav class="navbar navbar-inverse navbar-toggleable-md">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#cloapediamenu" aria-controls="cloapediamenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="float-left"> <a href="GeneralViewBlogHome.php">Menu</a> </span>
            <span class="float-right"><i class="fa fa-bars"></i> <i class="fa fa-close"></i></span>
        </button>
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
    <div id="buttons" style="position : absolute; left :200 px;">
        <form action="" method="post">
            <button type="submit" id="upvote"></button>
            <br>
            <input value="<?php echo $test["Nvotes"]; ?>" name="Nvote" id="nbvote" hidden>
            <br>
            <button type="submit" id="downvote"></button>
        </form>
    </div>
    <script defer src="../assets/ASFO/js/seh.js"></script>
    <div class="container mt-5">

        <div class="row">
            <div class="col-lg-8">
                <!-- Post content-->
                <article>
                    <!-- Post header-->
                    <header class="mb-4">
                        <!-- Post title-->

                        <h1 class="fw-bolder mb-1"><?php echo $test["Title"]; ?></h1>
                        <!-- Post meta content-->
                        <div class="text-muted fst-italic mb-2">Posted on <?php echo $test["Date"]; ?></div>
                        <!-- Post categories-->
                        <a class="badge bg-secondary text-decoration-none link-light" href="#!">Web Design</a>
                        <a class="badge bg-secondary text-decoration-none link-light" href="#!">Freebies</a>

                    </header>
                    <!-- Preview image figure-->

                    <figure class="mb-4"><img class="img-fluid rounded" src="../assets/ASFO/uploads/<?php echo $test['Picture']; ?>" height="350" width="700" alt="..." /></figure>
                    <!-- Post content-->
                    <section class="mb-5">

                        <h2 class="fw-bolder mb-4 mt-5"><?php echo $test['Description']; ?></h2>
                        <p class="fs-5 mb-4"><?php echo $test['Description']; ?></p>
                        <p class="fs-5 mb-4"><?php echo $test['Description']; ?></p>
                    </section>
                </article>
                <!-- Comments section-->
                <section class="mb-5">
                    <div class="card bg-light">
                        <div class="card-body" id="test">
                            <!-- Comment form-->
                            <form action="" method="POST" class="mb-4" onsubmit="prevent()">
                                <textarea name="Comment_text" id="Comment" class="form-control" rows="3" placeholder="Join the discussion and leave a comment!"></textarea>
                                <input type="date" name="Date_Comment" id="Date" class="text-input" hidden>
                                <input type="submit" value="Comment" class="btn btn-info btn-min-width mr-1 mb-1">

                            </form>
                            <?php foreach ($comments as $comment) {
                                $commenter = $userC->getutilisateurbyID($comment["ID_utilisateur"]);
                                $replys = $ReplyC->ShowReply($comment["Idcomment"]); ?>
                                <!-- Comment with nested comments-->
                                <div class="d-flex mb-4">
                                    <!-- Parent comment-->
                                    <div class="flex-shrink-0"><img class="rounded-circle" style="width:50; height:50px;" src="../Assets/uploads/<?php echo $commenter['profilpicture'] ?>" alt="..." /></div>
                                    <div class="ms-3">
                                        <div class="fw-bold"><?php echo $commenter["name"]; ?></div>
                                        <?php echo $comment["Comment_text"] ?>
                                        <br>
                                        <?php if ($x["ID_utilisateur"] == $comment["ID_utilisateur"]) { ?>

                                            <a class="btn btn-info btn-min-width mr-1 mb-1" href="UpdateBlogComment.php?Idpost=<?php echo $comment['Idpost']; ?>&Idcomment=<?php echo $comment['Idcomment']; ?>" target="_blank">Update<i class="ft-bookmark"></i></a>
                                        <?php  }
                                        if (($x["admin_bool"]) == 1 || $x["ID_utilisateur"] == $comment["ID_utilisateur"]) { ?>
                                            <a class="btn btn-danger btn-min-width mr-1 mb-1" href="RemoveBlogComment.php?Idcomment=<?php echo $comment['Idcomment']; ?>">Remove<i class="ft-command"></i></a>
                                        <?php } ?>
                                        <!-- Child comment 1-->
                                        <?php foreach ($replys as $reply) {
                                            $replyer = $userC->getutilisateurbyID($reply["ID_utilisateur"]);
                                        ?>
                                            <div class="d-flex mt-4">
                                                <div class="flex-shrink-0"><img class="rounded-circle" style="width:50; height:50px;" src="../Assets/uploads/<?php echo $replyer['profilpicture'] ?>" alt="..." /></div>
                                                <div class="ms-3">
                                                    <div class="fw-bold"><?php echo $replyer["name"]; ?></div>
                                                    <?php echo  $reply["Reply_text"] ?>
                                                    <br>
                                                    <a class="btn btn-danger btn-min-width mr-1 mb-1" href="RemoveBlogReply.php?Idreply=<?php echo $reply['Idreply']; ?>">Delete<i class="ft-command"></i></a>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        <!-- Child comment 2-->

                                        <div class="d-flex mt-4">
                                            <div class="flex-shrink-0"><img class="rounded-circle" style="width:50; height:50px;" src="../Assets/uploads/<?php echo $x['profilpicture'] ?>" alt="..." /></div>
                                            <div class="ms-3">
                                                <div class="fw-bold"><?php echo $x["name"]; ?></div>



                                                <form action="" method="POST" class="mb-4" onsubmit="Verify()">
                                                    <input type="text" name="Reply_text" id="Comment" class="form-control" rows="3" placeholder="Join the discussion and leave a reply!" />
                                                    <input type="text" name="Idcomment" id="idcomment" value="<?php echo $comment["Idcomment"]; ?>" class="text-input" hidden>
                                                    <input type="date" name="Date_reply" id="Date" class="text-input" hidden>
                                                    <input type="submit" value="Reply" class="btn btn-dark btn-min-width mr-1">


                                                </form>



                                            </div>
                                        </div>

                                    </div>
                                </div>
                            <?php } ?>
                </section>

            </div>
            <!-- Side widgets-->
            <div class="col-lg-4">
                <!-- Search widget-->
                <div class="card mb-4">
                    <div class="card-header">Search</div>
                    <div class="card-body">
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                            <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                        </div>
                    </div>
                </div>
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
                <div class="card mb-4">
                    <div class="card-header">Side Widget</div>
                    <div class="card-body">You can put anything you want inside of these side widgets. They are easy to
                        use, and feature the Bootstrap 5 card component!</div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="../assets/ASFO/js/scriptblogpost.js"></script>
    <script src="../assets/ASFO/js/AddComment.js"></script>

</body>

</html>