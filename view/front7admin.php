<?php

    require_once     '../Controller/courC.php';
    require_once '../Model/cour.php' ;
    require_once     '../Controller/matiereC.php';
    $courC = new courC();
    

    if (isset($_POST['idcour'] ) && isset($_POST['ncour']  ) && isset($_POST['file']  )&& isset($_POST['idmatiere']  )) 
    {
        echo $_POST['idcour'] ;
            $cour = new cour($_POST['idcour'] , $_POST['ncour'], $_POST['file'], $_POST['idmatiere'] );
            $courC->modifiercour($cour);
            $id=$_POST['idmatiere'];
            header("Location:front2admin.php?idmatiere=$id");
    }else
    {
      $matiereC = new matiereC();
      $resultats = $matiereC -> affichermatiere();
        $a = $courC->getcourbyID($_GET['idcour']) ;
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
               <d <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
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
      <div class="container">
         <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                  
                  <form action="" method="POST"><div class="row">
							<table class="table" border="1" align="center">
								<tr>
									<td>
										<label for="idcour">idcour:
										</label>
									</td>
									<td><input type="number" name="idcour" id="idcour" maxlength="20" value="<?php echo $a['idcour'];?>"  readonly></td>
								</tr>
								<tr>
									<td>
										<label for="ncour">cour:
										</label>
									</td>
									<td><input type="text" value="<?php echo $a['ncour'];?>" name="ncour" id="ncour" maxlength="20"></td>
								</tr>

                <tr>
									<td>
										<label for="file">file:
										</label>
									</td>
									<td><input type="file" value="<?php echo $a['file'];?>" name="file" id="file" maxlength="20"></td>
								</tr>
                <tr>
									<td>
                <label for="idmatiere">idmatiere:
                </label>
          
              
              <td><select name="idmatiere" id="idmatiere" required>
                  <option value="">--Please choose an option--</option>
                    <?php foreach ($resultats as $value) {
                      ?>
    <option value="<?php echo($value["idmatiere"])?>"> <?php echo($value["titre"])?></option>

  <?php }?>
</td>
</select>

</tr>		<tr>
									<td>
										<input type="submit" value="Modifier"> 
									</td>
									<td>
										<input type="reset" value="Annuler" >
									</td>
								</tr>
							</table> </div>
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