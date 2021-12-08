<?php

    require_once '../Controller/AbsenceC.php';
    require_once '../Model/Absence.php' ;



    if (isset($_POST['Id_absence'] ) &&isset($_POST['Module'] ) && isset($_POST['Date_absence'] )
        && isset($_POST['Heure_absence'] ) && isset($_POST['Description'] )&& isset($_POST['type_reclamation'])) 
    {
            $absence = new Absence($_POST['Id_absence'] ,$_POST['Module'] ,$_POST['Date_absence'],
                    $_POST['Heure_absence'],$_POST['Description'],$_POST['type_reclamation']);
            $absenceC = new AbsenceC();
            $absenceC->ajouterAbsence($absence);
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
    <link rel="apple-touch-icon" href="../Assets/theme-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../Assets/theme-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="../Assets/theme-assets/css/vendors.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN CHAMELEON  CSS-->
    <link rel="stylesheet" type="text/css" href="../Assets/theme-assets/css/app-lite.css">
    <!-- END CHAMELEON  CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="../Assets/theme-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../Assets/theme-assets/css/core/colors/palette-gradient.css">
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
   <link rel="icon" href="../Assets/Images/fevicon.png" type="image/png" />
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
                        <a href="Front.php"><img src="../Assets/Images/logo.png" alt="#" /></a>
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
                                    <a class="nav-link" href="Front.php">Accueil</a>
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



        <section class="layout_padding section about_dottat">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                 
               <form action='' method="POST">
               <div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h4 class="card-title">choisir une reclamation</h4>
				<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
			</div>
			<div class="card-content collapse show">
				<div class="table-responsive">
					<table class="table">
						<thead class="thead-dark">
							<tr>
								<th scope="col"><label for="Id_absence"> <font color="white">Id absence:</font>
								</label></th>
								<th scope="col"><label for="type_reclamation"><font color="white">id type_reclamation:</font></label></th>
                                <th scope="col"><label for="Module"><font color="white">Module:</font></label></th>
                                <th scope="col"><label for="Date_absence"><font color="white">Date d'Absence:</font></label></th>
                                <th scope="col"><label for="Heure_absence"><font color="white">Heure d'Absence:</font></label></th>
                                <th scope="col"><label for="Description"><font color="white">Description:</font></label></th>
							</tr>
						</thead>
						<tbody>
							<tr>
                            <td><input type="text" name="Id_absence" id="Id_absence" maxlength="20"></td>
                            <td><input type="text" name="type_reclamation" id="type_reclamation" maxlength="20"></td>
                            <td><select type="text" name="Module" id="Module">
                            <option value="">--Veuillez choisir--</option>
                            <option value="Projet Technologies web">Projet Technologies web</option>
                            <option value="Mathematique">Mathematique</option>
                            <option value="Base de Donnees">Base de Donnees</option></select></td>
									
                    <td><input type="date" name="Date_absence" id="userdate" onchange="TDate()" required 
                    min="2021-09-13"  max="2022-06-06"></td>
                    <td><input type="time" id="Heure_absence" name="Heure_absence"
       min="09:00" max="18:00" required></td>
       <td>
                    <textarea name="Description" id="Description" cols="30" rows="5"></textarea>
                    </td>
                    </tr>	
						</tbody>
                        <tr>
                  <section id="sizes-2">
                <div class="card-content collapse show">
                    <div class="card-body">
                        <!-- simple sizes -->
                        <div class="form-group">
                            <button type="submit" name="command"name="command" class="btn mr-1 mb-1 btn-success btn-lg" value="Envoyer">Envoyer</button>
                            <button type="reset" name="command" class="btn mr-1 mb-1 btn-danger btn-lg" value="Annuler">Annuler</button>
                        </div>
                       
                    </div>
                </div>
</section>
						
</tr>
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
               <a href="Front.php"><img class="img-responsive" src="../Assets/Images/logo.png" alt="#" /></a>
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