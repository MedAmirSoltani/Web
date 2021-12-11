<?php
    require '../Controller/courC.php';

    $courC = new courC();
   $cour = $courC->getcourbymatiere($_GET['idmatiere']);//nafficher les cours eli appartient lel matiere hadhika
   if (isset($_POST['search']) ) {
    $list = $courC->afficherbyname($_POST['search']);
  }
?>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>hogwarts</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" href="../Assets/CSS/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" href="../Assets/CSS/style3.css">
      <link rel="stylesheet" href="../Assets/CSS/amir.css">
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
</head>
<!-- body -->

<body class="main-layout contact-page">
   <!-- loader  -->
   <div class="loader_bg">
      <div class="loader"><img src="../Assets/Images/loading.gif" alt="#" /></div>
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
                              <li> <a href="#">FORUM</a> </li>
                              <li ><a href="#">Class</a></li>
                              <li class="mean-last"> <a href="#"><img src="../Assets/Images/search_icon.png" alt="#" /></a> </li>
                              <li class="mean-last"> <a href="profiluser.php"><img src="../Assets/Images/top-icon.png" alt="profiluser.php" /></a> </li>
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
   <div class="about-bg">
      <div class="container">
         <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
               <div class="abouttitle">
                  <h2>COURSES</h2>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Contact -->
   
   <div class="Contact">

         <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
 

            <a href="frontetudiant.php"> <img src="../Assets/Images/return.PNG" style="height:10%; width:2%;  " alt=""> </a>
  
               <form>
            
               <div class="row">
      
									<?php 
             
											foreach ($cour as $key) {
                                
									?>
							
							
							  <tr>
                       <div  class="card text-center"style=" width: 29%; margin: 10px 35px 10px;">
<div class="card-header bg-gradient-x-purple-red text-white">
<div class="row">
<div class="col">
<img src="../Assets/Images/amir.PNG">
</div>
<div class="col">
<h2 style="text-align:center; font-size: 60px; color:white;"><?php echo $key['ncour'] ; ?></h2>  
<h4 style="color:white;"><strong> cour :</strong>  <?php echo   $key['ncour'] ; ?>  </h4> 
                     <a href="<?php echo $key['file'] ; ?> "onmousedown="bleep.play()"><input style="background: #1b2f83;border: none; border-radius: 30px; color: white; margin-bottom: 0.5em;" type="button"  value="courses" /> </a><br>
</div>
</div>
</div>
</div>  
							
							
									<?php
											}
                                 
									?>
						</table>
                  </div>
               </form>
            </div>
        
         </div>
      </div>
   </div>
   <!-- end Contact -->
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
                     <li> <a href="#"><img src="../Assets/icon/facebook.png"></a></li>
                     <li> <a href="#"><img src="../Assets/icon/Twitter.png"></a></li>
                     <li> <a href="#"><img src="../Assets/icon/linkedin.png"></a></li>
                     <li> <a href="#"><img src="../Assets/icon/instagram.png"></a></li>
                  </ul>
               </div>
               <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                  <div class="Follow">
                     <h3>contact us</h3>
                  </div>
                  <input class="Newsletter" placeholder="Enter your email" type="Enter your email">
                  <button class="Subscribe">send</button>
               </div>
            </div>
         </div>
      </div>
      <div class="copyright">
         <div class="container">
         <p>Copyright 2022 All Right Reserved By Hogwarts university</p>
         </div>
      </div>
   </footer>
   <!-- end footer -->
   <!-- Javascript files-->
   <script src="../Assets/js/jquery.min.js"></script>
   <script src="../Assets/js/popper.min.js"></script>
   <script src="../Assets/js/bootstrap.bundle.min.js"></script>
   <script src="../Assets/js/jquery-3.0.0.min.js"></script>
   <script src="../Assets/js/plugin.js"></script>
   <!-- sidebar -->
   <script src="../Assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="../Assets/js/custom.js"></script>
</body>

</html>