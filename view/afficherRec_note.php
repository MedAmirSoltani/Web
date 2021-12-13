<?php
    require '../Controller/Rec_noteC.php';

    $rec_noteC = new Rec_noteC();
    $rec_notes = $rec_noteC->afficherRec_note();
?>
<!DOCTYPE html>
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
               <h3>RECLAMATION Note</h3>    
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
				<h4 class="card-title">Voici tous les Reclamations</h4>
				<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
			</div>
			<div class="card-content collapse show">
				<div class="table-responsive">
					<table class="table">
						<thead class="thead-dark">
							<tr>
								<th scope="col"><label for="Id_note"> <font color="black">Id note</font>
								</label></th>
								<th scope="col"><label for="Module"><font color="black">Module </font></label></th>
                        <th scope="col"><label for="Description"><font color="black">Description </font></label></th>
							</tr>
						</thead>
						<tbody>
                  <?php 
                foreach ($rec_notes as $rec_note) {
        ?>
							<tr>
                     <td><?php echo $rec_note['Id_note'] ; ?></td>
                     <td><?php echo $rec_note['Module'] ; ?></td>
                     <td><?php echo $rec_note['Description'] ; ?></td>
                     <td><a href="supprimerRec_note.php?Id_note=<?php echo $rec_note['Id_note'] ; ?>"><img src="../Assets/Images/sup.jpg" witdh='25px' height='25px'></a></td>
                  <section id="sizes-2">
                <div class="card-content collapse show">
                    <div class="card-body">
                        <!-- simple sizes -->
                        <div class="form-group">
                        <td><a href="modifierRec_note.php?Id_note=<?php echo $rec_note['Id_note'] ; ?>">modifier</a></td>
      
                        </div>
                       
                    </div>
                </div>
</section>
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
</body>
</html>