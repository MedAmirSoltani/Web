<?php
require_once "../Controller/BlogC.php";
require_once "../Model/Blog.php";

$BlogC = new BlogC();

if (isset($_POST['Title']) && isset($_FILES["Picture"]) && isset($_POST['Date']) && isset($_POST['Description'])) {



  $Blog = new post($_POST['Title'], $_FILES["Picture"]["name"], $_POST['Date'], $_POST['Description']);


  $BlogC->AddBlog($Blog);
  
  $target_dir = "../assets/ASFO/uploads/";
  $target_file = $target_dir . basename($_FILES["Picture"]["name"]);
  if (move_uploaded_file($_FILES["Picture"]["tmp_name"], $target_file)) {
    echo "KHIDMET YA RJEL";
  }


  header('Location:GeneralViewBlogHome.php');
}


?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Interactive Form</title>
  <link href='https://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


  <link rel="stylesheet" href="../assets/ASFO/css/style.css">


</head>

<body>
  <form action="" method="POST" enctype="multipart/form-data" onsubmit="return CheckAddBlog();">
    <input id="Title" name="Title" type="text" placeholder="Title post" autofocus />

    <label for="Title">
      <span class="label-text">Post Title</span>
      <span class="nav-dot"></span>
    </label>

    <input id="Picture" type="file" name="Picture" />
    <label for="Picture">
      <span class="label-text">Picture</span>
      <span class="nav-dot"></span>
    </label>

    <input id="date" type="date" name="Date" readonly />
    <label for="Date">
      <span class="label-text">Date</span>
      <span class="nav-dot"></span>
    </label>

    <input id="Description" type="text"  name="Description" />
    <label for="Description">
      <span class="label-text">Description</span>
      <span class="nav-dot"></span>
    </label>
    <button type="submit">Add Post</button>
    <p class="tip">Press TAB</p>
    <!--<div class="signup-button">kif kif mba3ed</div>-->
  </form>



</body>
<script src="../assets/ASFO/js/AddBlog1.js"></script>

</html>