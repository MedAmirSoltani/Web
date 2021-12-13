<?php
session_start();
    require_once '../Controller/Type_reclamationC.php';
    include_once     '../Controller/utilisateurC.php';
    include_once '../Model/utilisateur.php';
   $userC = new utilisateurC();
    $x = $userC->getutilisateurbyID($_SESSION['a']);
    $type_reclamationC = new type_reclamationC();

    $type_reclamations = $type_reclamationC->afficherType_reclamation();

    if(isset($_POST['type_reclamation']) && isset($_POST['search'])){
        $list1 = $type_reclamationC->afficherAbsences($_POST['type_reclamation'],$x["ID_utilisateur"]);
        $list2 = $type_reclamationC->afficherNotes($_POST['type_reclamation'],$x["ID_utilisateur"]);
        $list3 = $type_reclamationC->afficherAutres($_POST['type_reclamation'],$x["ID_utilisateur"]);
    }
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
</head>
<!-- body -->

<body class="main-layout contact-page">
   <!-- loader  -->
   
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
                        <div class="logo"> <a href="index.html"><img src="../Assets/Images/logo.png" alt="#"></a> </div>
                     </div>
                  </div>
               </div>
               <d <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                  <div class="menu-area">
                     <div class="limit-box">
                        <nav class="main-menu">
                           <ul class="menu-area-main">
                              <li> <a href="index.php">Home</a> </li>
                              <li> <a href="about.php">About us</a> </li>
                              <li class="active"><div class="card-body">
                                 <div class="btn-group mr-1 mb-1">
                <button type="button" class="btn btn-secondary btn-min-width dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Reclamation</button>
             <div class="dropdown-menu">
                    <a class="dropdown-item" href="ajouterType_reclamation.php">Faire une Reclamation</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="chercherReclamation.php">Consulter une Reclamation</a>
                </div>
               </div>
          </div></li>
          <li> <a href="cherhcerPresences.php">Absence</a> </li>
                              <li class="mean-last"> <a href="#"><img src="../Assets/Images/search_icon.png" alt="#" /></a> </li>
                              <li class="mean-last"> <a href="#"><img src="../Assets/Images/top-icon.png" alt="#" /></a> </li>
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
               <br>
                   <br>
                  <h2>RECLAMATION</h2>
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
            <form action='' method="POST">
               <div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h4 class="card-title">choisir une Type reclamation : </h4>
				<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
			</div>
			<div class="card-content collapse show">
				<div class="table-responsive">
					<table class="table">
						
						<tbody>
							<tr>
                            <div class="col-75">
                           
                <select name="type_reclamation" id="type_reclamation">
                <?php
                   foreach($type_reclamations as $type_reclamation) {
                       ?>
                       <option
                           value="<?= $type_reclamation['Id_reclamation'] ?>"
                           <?php if(isset($_POST['search']) && $type_reclamation['Id_reclamation'] == $_POST['type_reclamation']) { ?>
                               selected
                               <?php } ?>
                         >
                               <?= $type_reclamation['Type_reclamation'] ?>
                           </option>
                           <?php
                   }
                   ?>
                   </select>
                </div>
                  <section id="sizes-2">
                <div class="card-content collapse show">
                    <div class="card-body">
                        <!-- simple sizes -->
                        <div class="form-group">
                            <button type="submit" name="search" class="btn mr-1 mb-1 btn-success btn-lg" value="search">Envoyer</button>
                            <button type="reset" name="search" class="btn mr-1 mb-1 btn-danger btn-lg" value="Annuler">Annuler</button>
                        </div>
                       
                    </div>
                </div>
</section>
						</td>
									
							</tr>
							
						</tbody>
                        <?php if (isset($_POST['search'])){?>
  
                             <?php
                              foreach($list1 as $absence) {
                                  ?>
                                  <tr>
                                  <thead class="thead-dark">
							<tr>
								<th scope="col"><label for="Module"> <font color="white">Module</font>
								</label></th>
								<th scope="col"><label for="Date_absence"><font color="white">Date_absence </font></label></th>
                                <th scope="col"><label for="Heure_absence"><font color="white">Heure_absence </font></label></th>
                                <th scope="col"><label for="Description"><font color="white">Description </font></label></th>
							</tr>
						</thead>
  </tr>
                                  <tr>
    <td><?php echo $absence['Module'] ; ?></td>
    <td><?php echo $absence['Date_absence'] ; ?></td>
    <td><?php echo $absence['Heure_absence'] ; ?></td>
    <td><?php echo $absence['Description'] ; ?></td>
  </tr>
     
                              <?php
                              }
                              ?>
                              
                             <?php
                              foreach($list2 as $rec_note) {
                                  ?>
                                  <tr>
                                    <thead class="thead-dark">
							<tr>
                     <th scope="col"><label for="Id_etudiant"> <font color="white">Votre identifiant</font>
								</label></th>
								<th scope="col"><label for="Module"> <font color="white">Module</font>
								</label></th>
                                <th scope="col"><label for="Description"><font color="white">Description </font></label></th>
							</tr>
						</thead>
                                      </tr>
                                  <tr>
                                  <td><?php echo $rec_note['Id_etudiant'] ; ?></td>
                                  <td><?php echo $rec_note['Module'] ; ?></td>
                                  <td><?php echo $rec_note['Description'] ; ?></td>
                                </tr>
                              <?php
                              }
                              ?>
                           <?php
                              foreach($list3 as $rec_autre) {
                                  ?>
                                    <tr>
                                    <thead class="thead-dark">
							<tr>
                                <th scope="col"><label for="Description"><font color="white">Description </font></label></th>
							</tr>
						</thead>
                                     </tr>
                                  <tr>
                                  <td><?php echo $rec_autre['Description'] ; ?></td>
                                </tr>
                              <?php
                              }
                              ?>
                            <?php
                }
    ?>    
					
					</table>
				</div>
			</div>
		</div>
	</div>
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
            <p>Copyright 2019 All Right Reserved By <a href="https://html.design/">Free html Templates</a></p>
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
   <script type="text/javascript" src="../Assets/js/Date.js"></script>
   <script type="text/javascript" src="../Assets/js/radio.js"></script>
</body>

</html>