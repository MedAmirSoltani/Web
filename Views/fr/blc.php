<?php
  include_once '../../config.php';
   include_once '../../Controller/BlockC.php';
    $blockC=new BlockC();
   $listeBlockss=$blockC->afficherblocks(); 
   $sallec=new BlockC();
$salles=$sallec->afficherSalles();
    
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
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" href="css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
   <!-- loader  -->
   <div class="loader_bg">
      <div class="loader"><img src="images/loading.gif" alt="#" /></div>
   </div>
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
                        <div class="logo"> <a href="index.html"><img src="images/logo.png" alt="#"></a> </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                  <div class="menu-area">
                     <div class="limit-box">
                        <nav class="main-menu">
                           <ul class="menu-area-main">
                              <li> <a href="index.html">Home</a> </li>
                              <li class="active"> <a href="about.html">About us</a> </li>
                              <li><a href="contact.html">Contact us</a></li>
                              <li class="mean-last"> <a href="#"><img src="images/search_icon.png" alt="#" /></a> </li>
                              <li class="mean-last"> <a href="#"><img src="images/top-icon.png" alt="#" /></a> </li>
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
   <!-- about -->
   <div class="about-bg">
      <div class="container">
         <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
               <div class="abouttitle">
                  <h2>About Us</h2>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="about">
      <div class="container">
         <div class="row">
            <div class="col-md-10 offset-md-1">
               <div class="aboutheading">
                  <span>  
                
                                  <h2>Les Blocks</h2>
                                    <?php
                                        foreach($listeBlockss as $block){ ?> 
                    
                                   <p> <h3> Nom : <?php echo $block['Nom']; ?> </h3></p>
                                   <p> Nombre de salles:    <?php echo $block['Nbrsalles']; ?></p>
                                  <p>   Types de salle:   <?php echo $block['Typesalles']; ?></p>
 <?php }

                                             ?> 
                  </span>
               </div>
            </div>
         </div>
         <div class="row border">
            <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
               <div class="about-box">
                  <p>      <h2>Les Salles</h2>
                       <?php
                                        foreach($salles as $res){
                                             ?>
                                              <p> <h3>id salle ;<?php echo $res['Id']; ?></h3></p>
                                             <p><h3>nom<?php echo $res['nom']; ?> </h3></p>
                                        <p> <h3>Nombre de projecteurs<?php echo $res['Nbrprojecteurs']; ?> </h3></p>
                                        <p><h3>nombre de tables <?php echo $res['Nbrtables']; ?> </h3></p>
                                        <p><h3>NOmbre de chaisse <?php echo $res['Nbrchaises']; ?> </h3></p>
                                                 <p><?php echo $res['id_block']; ?></p>

<?php } ?>


                   </p>
                  
               </div>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
               <div class="about-box">
                  <figure><img src="images/about.png" alt="img" /></figure>
               </div>
            </div>
         </div>
      </div>
   </div>
   </div>
   <!-- end about -->
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
                     <li> <a href="#"><img src="icon/facebook.png"></a></li>
                     <li> <a href="#"><img src="icon/Twitter.png"></a></li>
                     <li> <a href="#"><img src="icon/linkedin.png"></a></li>
                     <li> <a href="#"><img src="icon/instagram.png"></a></li>
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
            <p>Copyright 2021 All Right Reserved By <a href="https://html.design/">Free html Templates</a></p>
         </div>
      </div>
   </footer>
   <!-- end footer -->
   <!-- Javascript files-->
   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min.js"></script>
   <script src="js/plugin.js"></script>
   <!-- sidebar -->
   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="js/custom.js"></script>
</body>

</html>