<?php
include_once '../Assets/ASFO/utilis/Config.php';
include_once '../Controller/BlockC.php';

$blockC = new BlockC();
$listeBlockss = $blockC->afficherblocks();
$sallec = new BlockC();
$salles = $sallec->afficherSalles();

?>
<html lang="en">
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
<link rel="icon" href="../images/fevicon.png" type="image/png" />
<!-- Bootstrap core CSS -->
<link href="../css/bootstrap.css" rel="stylesheet">
<!-- FontAwesome Icons core CSS -->
<link href="../css/font-awesome.min.css" rel="stylesheet">
<!-- Custom animate styles for this template -->
<link href="../css/animate.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="../style.css" rel="stylesheet">
<!-- Responsive styles for this template -->
<link href="../css/responsive.css" rel="stylesheet">
<!-- Colors for this template -->
<link href="../css/colors.css" rel="stylesheet">
<!-- light box gallery -->
<link href="../css/ekko-lightbox.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1">



</head>

<body id="inner_page">
    <!-- header -->
    <header class="header">

        <div class="header_top_section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="full">
                            <div class="logo">
                                <a href="index.html"><img src="../images/logo.png" alt="#" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 site_information">
                        <div class="full">
                            <div class="main_menu">
                                <nav class="navbar navbar-inverse navbar-toggleable-md">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#cloapediamenu" aria-controls="cloapediamenu" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="float-left">Menu</span>
                                        <span class="float-right"><i class="fa fa-bars"></i> <i class="fa fa-close"></i></span>
                                    </button>
                                    <div class="collapse navbar-collapse justify-content-md-center" id="cloapediamenu">
                                        <ul class="navbar-nav">
                                            <li class="nav-item active">
                                                <a class="nav-link" href="http://localhost/rima/Views/ListeBlocks.php">Home</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link color-aqua-hover" href="about.html">About</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link color-grey-hover" href="contact1.html">Contact Us</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link color-grey-hover" href="contact.html">Login</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link color-grey-hover" href="info.html">info</a>
                                            </li>
                                        </ul>
                                        <ul class="navbar-nav">
                                            <li class="nav-item">
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <!-- end header -->

    <!-- section -->
    <section class="main_full inner_page">
        <div class="container-fluid">
            <div class="row">
                <div class="full">
                    <h3>About us</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- about section -->
    <section class="layout_padding section about_dottat">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="about_img margin_top_30  text_align_center">
                        <img src="../images/ab_img.png" alt="#" />


                        <!-- Bordered table start -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Blocks</h4>

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

                                        <div class="table-responsive">
                                            <table class="table table-bordered mb-0">
                                                <thead>
                                                    <tr>
                                                        <td>Id Block</td>
                                                        <td>Nom Du Block</td>
                                                        <td>Nombre des salles</td>
                                                        <td>Type des Salles</td>
                                                        <td>Modifier</td>
                                                        <td>Supprimer</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    foreach ($listeBlockss as $block) {
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $block['Id']; ?></td>
                                                            <td><?php echo $block['Nom']; ?></td>
                                                            <td><?php echo $block['Nbrsalles']; ?></td>
                                                            <td><?php echo $block['Typesalles']; ?></td>
                                                            <td>
                                                                <form method="POST" action="ModifierBlock.php">
                                                                    <input type="submit" name="Modifier" value="Modifier">
                                                                    <input type="hidden" value=<?PHP echo $block['Id']; ?> name="id">
                                                                </form>
                                                            </td>
                                                            <td>
                                                                <a href="SupprimerBlock.php?Id=<?php echo $block['Id']; ?>"><button>Supprimer</button></a>
                                                            </td>
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
                        <!-- Bordered table end -->
                        <!-- Bordered table start -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Salles</h4>
                                        <dl>


                                            <a href="trinom.php">
                                                <li data-filter=".gra">Trie les Nom</li>
                                            </a>
                                            <li>
                                                <form method="GET" action="rech.php">
                                                    <input type="text" name="nom" value="">

                                                    <button type="submit" name="Ajouter" class="btn btn-light">Search Sallles</button>
                                                </form>
                                            </li>

                                        </dl>

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

                                        <div class="table-responsive">
                                            <table class="table table-bordered mb-0">
                                                <thead>
                                                    <tr>
                                                        <td>Id </td>
                                                        <td>Nom de Salles</td>
                                                        <td>Nombre des projecteurs</td>
                                                        <td>nombre de tables</td>
                                                        <td>nombre dechaises</td>
                                                        <td>Id block</td>

                                                        <td>Modifier</td>
                                                        <td>Supprimer</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    foreach ($salles as $res) {
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $res['Id']; ?></td>
                                                            <td><?php echo $res['nom']; ?></td>
                                                            <td><?php echo $res['Nbrprojecteurs']; ?></td>
                                                            <td><?php echo $res['Nbrtables']; ?></td>
                                                            <td><?php echo $res['Nbrchaises']; ?></td>
                                                            <td><?php echo $res['id_block']; ?></td>
                                                            <td>
                                                                <form method="GET" action="ModifierSales.php">
                                                                    <input type="submit" name="Modifier" value="Modifier">
                                                                    <input type="hidden" value=<?PHP echo $res['Id']; ?> name="id">
                                                                </form>
                                                            </td>
                                                            <td>
                                                                <form method="POST" action="SupprimerSalles.php">
                                                                    <input type="submit" name="Supprimer" value="Supprimer">
                                                                    <input type="hidden" value=<?PHP echo $res['Id']; ?> name="id">
                                                                </form>
                                                            </td>
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
                        <!-- Bordered table end -->


                        <div class="row">
                            <div class="col-md-12">
                                <div class="full center">


                                    <a class="blue_bt" href=" AjouterSalles.php">Ajouter Salle</a>
                                    <a class=" blue_bt" href="AjouterBlock.php">Ajouter Block</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end about section -->

    <!-- section -->

    <!-- end section -->

    <!-- footer -->
    <footer class="footer layout_padding">
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-12">
                    <a href="index.html"><img class="img-responsive" src="../images/logo.png" alt="#" /></a>
                    <div class="footer_link_heading">
                        <div class="footer_menu margin_top_30">
                            <ul>
                                <li><a href="tel:98238240">(+216)98238240</a></li>
                                <li><a href="#">Hogwarts@gmail.com</a></li>
                                <li><a href="#">22 rue taher ben achour afh</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <div class="footer_link_heading">
                                <h3>FEATURED COURSES</h3>
                            </div>
                            <div class="footer_menu">
                                <ul>
                                    <li>AI courses</li>
                                    <li>Data Science</li>
                                    <li>Web Development</li>
                                    <li>Gamix</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-12">
                            <div class="footer_link_heading">
                                <h3>CATEGORIES</h3>
                            </div>
                            <div class="footer_menu">
                                <ul>
                                    <li>Arts & Design</li>
                                    <li>Business</li>
                                    <li>Computer </li>
                                    <li>Data entery</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-12">
                            <div class="footer_link_heading">
                                <h3>USEFUL LINKS</h3>
                            </div>
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="about.html">FAQs</a></li>
                                    <li><a href="contact1.html">Contact search</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <div class="cpy">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>Copyright 2021. All Rights Reserved. HogWarts University</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- end footer -->
    <!-- Core JavaScript
   ================================================== -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/tether.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/parallax.js"></script>
    <script src="../js/animate.js"></script>
    <script src="../js/ekko-lightbox.js"></script>
    <script src="../js/custom.js"></script>
</body>

</html>