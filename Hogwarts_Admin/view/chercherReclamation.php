<?php
    require_once '../Controller/Type_reclamationC.php';

    $type_reclamationC = new type_reclamationC();

    $type_reclamations = $type_reclamationC->afficherType_reclamation();

    if(isset($_POST['type_reclamation']) && isset($_POST['search'])){
        $list1 = $type_reclamationC->afficherAbsences($_POST['type_reclamation']);
        $list2 = $type_reclamationC->afficherNotes($_POST['type_reclamation']);
        $list3 = $type_reclamationC->afficherAutres($_POST['type_reclamation']);
    }
    ?>

<!DOCTYPE html>
<html lang="en">
   <head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Tables - Chameleon Admin - Modern Bootstrap 4 WebApp & Dashboard HTML Template + UI Kit</title>
    <link rel="apple-touch-icon" href="theme-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="theme-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="theme-assets/css/vendors.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN CHAMELEON  CSS-->
    <link rel="stylesheet" type="text/css" href="theme-assets/css/app-lite.css">
    <!-- END CHAMELEON  CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="theme-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/core/colors/palette-gradient.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <!-- END Custom CSS-->
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
   <link href="../Assets/CSS/bootstrap.css" rel="stylesheet">
   <!-- FontAwesome Icons core CSS -->
   <link href="../Assets/CSS/font-awesome.min.css" rel="stylesheet">
   <!-- Custom animate styles for this template -->
   <link href="../Assets/CSS/animate.css" rel="stylesheet">
   <!-- Custom styles for this template -->
   <link href="style.css" rel="stylesheet">
   <!-- Responsive styles for this template -->
   <link href="../Assets/CSS/responsive.css" rel="stylesheet">
   <!-- Colors for this template -->
   <link href="../Assets/CSS/colors.css" rel="stylesheet">
   <!-- light box gallery -->
   <link href="../Assets/CSS/ekko-lightbox.css" rel="stylesheet">
   <!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
   <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
   <![endif]-->
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
                        <a href="index.html"><img src="../Assets/Images/logo.png" alt="#" /></a>
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
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                

                     <div class="row">
                        <div class="col-md-12">
                           <div class="full center">
                           </div>
                        </div>
                     </div>
                  
               </div>
            </div>
         </div>
        <div class="container-fluid">
          <div class="row">
             <div class="full">
               <h3>RECLAMATION</h3>    
             </div>
          </div>
        </div>
      </section>
      <!-- end section -->
    
     <!-- type reclamation section -->
    
      <section class="layout_padding section about_dottat">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                 
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
								<th scope="col"><label for="Module"> <font color="white">Module</font>
								</label></th>
                                <th scope="col"><label for="Description"><font color="white">Description </font></label></th>
							</tr>
						</thead>
                                      </tr>
                                  <tr>
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
      </section>
      <!-- end type reclamation section -->
  
     <!-- footer -->
     <footer class="footer layout_padding">
      <div class="container">
         <div class="row">

            <div class="col-md-4 col-sm-12">
               <a href="index.html"><img class="img-responsive" src="../Assets/Images/logo.png" alt="#" /></a>
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
   <script src="../Assets/js/jquery.min.js"></script>
   <script src="../Assets/js/tether.min.js"></script>
   <script src="../Assets/js/bootstrap.min.js"></script>
   <script src="../Assets/js/parallax.js"></script>
   <script src="../Assets/js/animate.js"></script>
   <script src="../Assets/js/ekko-lightbox.js"></script>
   <script src="../Assets/js/custom.js"></script>
   <script type="text/javascript" src="../Assets/js/Date.js"></script>
</body>
</html>