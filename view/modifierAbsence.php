<?php
  session_start();
    require_once '../Controller/AbsenceC.php';
    require_once '../Model/Absence.php' ;
    include_once     '../Controller/utilisateurC.php';
    include_once '../Model/utilisateur.php';
   $userC = new utilisateurC();
    $x = $userC->getutilisateurbyID($_SESSION['a']);
    $absenceC = new AbsenceC();
    

    if (isset($_POST['Id_absence'] ) && isset($_POST['Module'] ) && isset($_POST['Date_absence'] )
        && isset($_POST['Heure_absence'] ) && isset($_POST['Description'] )) 
    {
        echo $_POST['Module'] ;
            $absence = new Absence($_POST['Id_absence'] , $_POST['Module'] ,$_POST['Date_absence'],
                    $_POST['Heure_absence'],$_POST['Description']);
            $absenceC->modifierAbsence($absence);
            header('Location:afficherAbsence.php');
    }else
    {
        $a = $absenceC->getAbsencebyID($_GET['Id_absence']) ;
    }



?>

<!DOCTYPE html>
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
<!-- body -->

<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="2-columns">

<!-- fixed-top-->
<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light">
<div class="navbar-wrapper">
  <div class="navbar-container content">
    <div class="collapse navbar-collapse show" id="navbar-mobile">
      <ul class="nav navbar-nav mr-auto float-left">
        <li class="nav-item d-block d-md-none"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
        <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
        <li class="nav-item dropdown navbar-search"><a class="nav-link dropdown-toggle hide" data-toggle="dropdown" href="#"><i class="ficon ft-search"></i></a>
          <ul class="dropdown-menu">
            <li class="arrow_box">
              <form>
                <div class="input-group search-box">
                  <div class="position-relative has-icon-right full-width">
                    <input class="form-control" id="search" type="text" placeholder="Search here...">
                    <div class="form-control-position navbar-search-close"><i class="ft-x"> </i></div>
                  </div>
                </div>
              </form>
            </li>
          </ul>
        </li>
      </ul>
     
      <ul class="nav navbar-nav float-right">
      
      <?php if (empty($conn['profilpicture']))
                                              {
                                                echo '<img src="../Assets/uploads/unknown.png" onclick="pictureclick()" id="profildisplay" style="width:100%; height:50px;border-radius:10%; display:block;"/>';
                                               }
                                            
                                             ?>
                                              <img <?php if (empty($conn['profilpicture'])){ echo 'style="display:none;"'; } ?>  id="profildisplay" style="width:25%; height:35px; float:left;margin:0 10px 0 250px; border-radius:50%; display:block;" src="../Assets/uploads/<?php echo $conn['profilpicture'] ?>">  
                                             
                                  
      </ul>
      <ul class="nav navbar-nav float-right">
       
       
          <div class="dropdown-menu dropdown-menu-right">
            <div class="arrow_box_right"><a class="dropdown-item" href="#"><span class="avatar avatar-online"><img src="../Assets/theme-assets/images/portrait/small/avatar-s-19.png" alt="avatar"><span class="user-name text-bold-700 ml-1">John Doe</span></span></a>
              <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="ft-user"></i> Edit Profile</a><a class="dropdown-item" href="#"><i class="ft-mail"></i> My Inbox</a><a class="dropdown-item" href="#"><i class="ft-check-square"></i> Task</a><a class="dropdown-item" href="#"><i class="ft-message-square"></i> Chats</a>
              <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="ft-power"></i> Logout</a>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>
</nav>

<!-- ////////////////////////////////////////////////////////////////////////////-->
      <!-- end header inner -->
   </header>
   <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="theme-assets/images/backgrounds/02.jpg">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">       
          <li class="nav-item mr-auto"><a class="navbar-brand" href="index.html"><img class="brand-logo" alt="Chameleon admin logo" src="../Assets/Images/logo.png"/>
              <h3 class="brand-text">Hogwarts</h3></a></li>
          <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
        </ul>
      </div>
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <li class=" nav-item"><a href="afficherutilisateur.php"><i class="ft-home"></i><span class="menu-title" data-i18n="">Users</span></a>
          </li>
          <li class="active"><a href="affichermatiere.php"><i class="ft-book"></i><span class="menu-title" data-i18n="">Subjects</span></a>
          </li>
          <li class="nav-item"><a href="afficherclub.php"><i class="ft-credit-card"></i><span class="menu-title" data-i18n="">Clubs</span></a>
          </li>
          <li class=" nav-item"><a href="afficherLesReclamations.php"><i class="ft-credit-card"></i><span class="menu-title" data-i18n="">Reclamation</span></a>
          </li>
          <li class=" nav-item"><a href="afficherRegistre_appel.php"><i class="ft-credit-card"></i><span class="menu-title" data-i18n="">Absence</span></a>
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
   <!-- end header -->
   <div class="about-bg">
      <div class="container">
         <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
               <div class="abouttitle">
               <br>
                   <br>
                  <h2>Registre d'appel</h2>
               </div>
            </div>
         </div>
      </div>
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
                <li class="breadcrumb-item"><a href="profiladmin.php">Home</a>
                  </li>
                 
                  </li>
                </ol>
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
				<h4 class="card-title">Modidier Reclamation Absence</h4>
				<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
			</div>
			<div class="card-content collapse show">
				<div class="table-responsive">
					<table class="table">
						<thead class="thead-dark">
							<tr>
                            <th scope="col"><label for="Id_absence"><font color="white">Id absence:</font></label></th>
                                <th scope="col"><label for="Module"><font color="white">Module:</font></label></th>
                                <th scope="col"><label for="Date_absence"><font color="white">Date d'Absence:</font></label></th>
                                <th scope="col"><label for="Heure_absence"><font color="white">Heure d'Absence:</font></label></th>
                                <th scope="col"><label for="Description"><font color="white">Description:</font></label></th>
							</tr>
						</thead>
						<tbody>
							<tr>
                            <td><input type="text" name="Id_absence" id="Id_absence" maxlength="20" value="<?php echo $a['Id_absence'];?>"  readonly></td>
                            <td><select type="text" name="Module" id="Module" value="<?php echo $a['Module'];?>" >
                            <option value=""><?php echo $a['Module'];?></option>
                            <option value="Projet Technologies web">Projet Technologies web</option>
                            <option value="Mathematique">Mathematique</option>
                            <option value="Base de Donnees">Base de Donnees</option></select></td>
       
       <td><input type="date" value="<?php echo $a['Date_absence'];?>"  name="Date_absence" id="userdate" onchange="TDate()" required 
                     min="2021-01-01" max="2022-12-31"></td>
                     <td><input type="time" value="<?php echo $a['Heure_absence'];?>" id="Heure_absence" name="Heure_absence"
       min="09:00" max="18:00" required></td>
       <td>
                    <textarea name="Description" value="<?php echo $a['Description'];?>" id="Description" cols="30" rows="5"></textarea>
                    </td>
                 
                    </tr>	
						</tbody>
                       

					</table>
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
   <script src="../Assets/js/javasu.js"></script>
</body>

</html>