<?php
    require '../Controller/matiereC.php';
    require '../Controller/archivematiereC.php';

    $matiereC = new matiereC();
    $archiveC = new archiveC();
    $matiere = $matiereC->affichermatiere();
    $archive = $archiveC->afficherarchivematiere();
?>

<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Hogwarts</title>
    <link rel="apple-touch-icon" href="../Assets/theme-assets/images/ico/apple-icon-120.png">

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
  </head>
  <body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="2-columns">

    <!-- fixed-top-->

    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light">
      <div class="navbar-wrapper">
        <div class="navbar-container content">
          <div class="collapse navbar-collapse show" id="navbar-mobile">
            <ul class="nav navbar-nav mr-auto float-left">
             
                <ul class="dropdown-menu">
                  <li class="arrow_box">
                    <form>
                      <div class="input-group search-box">
                        <div class="position-relative has-icon-right full-width">
                          <input class="form-control" id="search" type="text" placeholder="Search here...">
                          <div class="form-control-position navbar-search-close"><i class="ft-x">   </i></div>
                        </div>
                      </div>
                    </form>
                  </li>
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav float-right">         
             
                <div class="dropdown-menu" aria-labelledby="dropdown-flag">
               
                </div>
              </li>
            </ul>
            <ul class="nav navbar-nav float-right">
            
                <div class="dropdown-menu dropdown-menu-right">
                >
                </div>
              </li>
            
                <div class="dropdown-menu dropdown-menu-right">
                 
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="theme-assets/images/backgrounds/02.jpg">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">       
          <li class="nav-item mr-auto"><a class="navbar-brand" href="index.html"><img class="brand-logo" alt="Chameleon admin logo" src="../Assets/Images/logo.PNG"/>
              <h3 class="brand-text">Hogwarts</h3></a></li>
          <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
        </ul>
      </div>
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <li class=" nav-item"><a href="afficherutilisateur.php"><i class="ft-home"></i><span class="menu-title" data-i18n="">Users</span></a>
          </li>
          <li class=" active"><a href="affichermatiere.php"><i class="ft-book"></i><span class="menu-title" data-i18n="">Subjects</span></a>
          </li>
          <li class="nav-item"><a href="afficherclub.php"><i class="ft-credit-card"></i><span class="menu-title" data-i18n="">Clubs</span></a>
          </li>
          <li class=" nav-item"><a href="cards.html"><i class="ft-layers"></i><span class="menu-title" data-i18n="">Cards</span></a>
          </li>
          <li class=" nav-item"><a href="buttons.html"><i class="ft-box"></i><span class="menu-title" data-i18n="">Buttons</span></a>
          </li>
          <li class=" nav-item"><a href="typography.html"><i class="ft-bold"></i><span class="menu-title" data-i18n="">Typography</span></a>
          </li>
          <li class="nav-item"><a href="tables.html"><i class="ft-credit-card"></i><span class="menu-title" data-i18n="">Tables</span></a>
          </li>
          <li class=" nav-item"><a href="form-elements.html"><i class="ft-layout"></i><span class="menu-title" data-i18n="">Form Elements</span></a>
          </li>
          <li class=" nav-item"><a href="https://themeselection.com/demo/chameleon-admin-template/documentation"><i class="ft-book"></i><span class="menu-title" data-i18n="">Documentation</span></a>
          </li>
        </ul>
      </div>
      <div class="navigation-background"></div>
    </div>

    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
          <div class="content-header-left col-md-4 col-12 mb-2">
          
          </div>
          <div class="content-header-right col-md-8 col-12">
            <div class="breadcrumbs-top float-md-right">
              <div class="breadcrumb-wrapper mr-1">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a>
                  </li>
                  <li class="breadcrumb-item active">Tables
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>



        <div class="content-body"><!-- Basic Tables start -->
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h4 class="card-title">SUBJECTS</h4>
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
				<div class="card-body">
					<div class="table-responsive">
          <a href="ajoutermatiere.php">Ajouter matiere </a>
         <br>
						<table class="table" border='2'>
							<tr>
								<th>idmatiere</th>
								<th>titre</th>
                <th>cour</th>
                <th>student list</th>
                <th>coff</th>
                <th>hour</th>
           
							  </tr>
									<?php 
                  $i=0;
											foreach ($matiere as $matiere) {
                        $i++;
									?>
							
							
							  <tr>
								<td><?php echo $matiere['idmatiere'] ; ?></td>
								<td><?php echo $matiere['titre'] ; ?></td>
                <td><a href="affichercour.php?idmatiere=<?php echo $matiere['idmatiere'] ; ?>">afficher cour</a></td>
                <td><a href="affichernote.php?idmatiere=<?php echo $matiere['idmatiere'] ; ?>">students list</a></td>
                <td><?php echo $matiere['coff'] ; ?></td>
                <td><?php echo $matiere['hour'] ; ?></td>
							
								<td><a href="ajouterarchivematiere.php?idmatiere=<?php echo $matiere['idmatiere'] ; ?>"><img src="../Assets/Images/supp.png" witdh='25px' height='25px'></a></td>
								<td><a href="modifiermatiere.php?idmatiere=<?php echo $matiere['idmatiere'] ; ?>">modifier</a></td>
							  </tr>
							
							
									<?php
											}
                       echo (" You have $i Subjects");
									?>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Basic Tables end -->


<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h4 class="card-title">ARCHIVE</h4>
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
				<div class="card-body">
					<div class="table-responsive">
          
						<table class="table" border='2'>
							<tr>
								<th>idmatiere</th>
								<th>titre</th>
                <th>cour</th>
                <th>student list</th>
                <th>coff</th>
                <th>hour</th>
           
							  </tr>
									<?php 
											foreach ($archive as $matiere) {
									?>
							
							
							  <tr>
								<td><?php echo $matiere['idmatiere'] ; ?></td>
								<td><?php echo $matiere['titre'] ; ?></td>
                <td><a href="affichercour.php?idmatiere=<?php echo $matiere['idmatiere'] ; ?>">afficher cour</a></td>
                <td><a href="affichernote.php?idmatiere=<?php echo $matiere['idmatiere'] ; ?>">students list</a></td>
                <td><?php echo $matiere['coff'] ; ?></td>
                <td><?php echo $matiere['hour'] ; ?></td>
							
								<td><a href="supprimerarchivematiere.php?idmatiere=<?php echo $matiere['idmatiere'] ; ?>"><img src="../Assets/Images/supp.png" witdh='25px' height='25px'></a></td>
                <td><a href="restorematiere.php?idmatiere=<?php echo $matiere['idmatiere'] ; ?>">restore</a></td>
							  </tr>
							
							
									<?php
											}
									?>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Basic Tables end -->

  </body>
</html>