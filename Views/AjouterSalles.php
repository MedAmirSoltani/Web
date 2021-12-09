<?php
include_once '../config.php';
    include_once '../Controller/BlockC.php';
    
    $blockC=new BlockC();
    $listeBlockss=$blockC->afficherblocks(); 

    
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
                                            <a class="nav-link" href="index.html">Home</a>
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
                                    
                       <script>
         function check(){
         
                 var nomR=document.frm.nom.value;
                     var letters = /^[A-Za-z]+$/;
             if (!(nomR.match(letters) && nomR.charAt(0).match(/^[A-Z]+$/))){
                 document.getElementById("msg").innerHTML="Entrez uniquement une Nom Majuscule ";
                 return false;
             }else{
                 return true;
             }
         }
      </script>
                                    <div class="table-responsive">
                                                     
 <form name="frm"  method="post" action="ajoutersal.php" enctype="multipart/form-data" onsubmit="return check()">
        <center><legend><h2>Ajouter Salles</h2></legend></center>
        <table id="example1" class="table table-striped">
        
          <tr>
      <tr>
            <th>Nom</th>
            <th><input type="text" name="nom" value=""/><span id="msg" style="color:red"></span></th>
            <th><input type="hidden" name="id" value=""/></th>
          </tr>

         <tr>
            <th>Nombre de projecteurs</th>
            <th><input type="number" name="nbrprj" value=""/></th>
          </tr>
   
          </tr>
          <tr>
            <th> Nombre de tables</th>
            <th><input type="number" name="nbrtables" value="" min="0" max="35"  required placeholder="" /></th>
          </tr>
          <tr>
          <th> Nombre de chaise</th>
          <th><input type="number" name="nbrchais" value="" required/></th>
        </tr>
         <tr>
                                        
          <th> id_block</th>
          <th>      <select name="id_blc" >
  
                    <?php
foreach($listeBlockss as $caa){
?>
       <option value="<?php echo $caa['Id'] ?>"><?php echo $caa['Nom'] ?></option>
         <?php } ?>
         </select></th>
        </tr>
        
        
         
        </table>
        <br>
        <center>
        <td><button type="submit" name="Ajouter" value="Ajouter" class="btn btn-danger">Ajouter</button></td>
      </center>
      </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Bordered table end -->
 <!-- Bordered table start -->
 <div class="row">
                
                    </div>
                    <!-- Bordered table end -->


                    <div class="row">
                        <div class="col-md-12">
                            <div class="full center">
                        
                              
                             
 
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

                                       