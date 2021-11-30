<?php
require_once "../Controller/BlogC.php";
require_once "../Model/Blog.php";
$BlogC = new BlogC();
$idp=$_GET['Idpost'];
if (isset($_POST['Title']) && isset($_FILES["Picture"]) && isset($_POST['Date']) && isset($_POST['Description'])) {
    $blog = new post(
        $_POST['Title'],
        $_FILES["Picture"]["name"],
        $_POST['Date'],
        $_POST['Description']
    );
    $BlogC->UpdateBlog($blog,$idp);
    $target_dir = "../assets/ASFO/uploads/";
    $target_file = $target_dir . basename($_FILES["Picture"]["name"]);
    if (move_uploaded_file($_FILES["Picture"]["tmp_name"], $target_file)) {
        echo "KHIDMET YA RJEL";
    }
    header('Location:GeneralViewBlogHome.php');
} else {
    $a = $BlogC->GetPostbyID($idp);
    echo $idp;
}

?>

<!-------------------------------------------------HTML CODE TO view add post ----------------------------------->
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
  <form action="" method="POST" enctype="multipart/form-data">
    <input id="input-1" name="Title" type="text" value="<?php echo $a["Title"]?>" placeholder="Title post" required autofocus />

    <label for="input-1">
      <span class="label-text">Post Title</span>
      <span class="nav-dot"></span>
    </label>

    <input id="input-2" type="file" name="Picture" required />
    <label for="input-2">
      <span class="label-text">Picture</span>
      <span class="nav-dot"></span>
    </label>

    <input id="input-3" type="date" name="Date" value="<?php echo $a["Date"]?>"readonly />
    <label for="input-3">
      <span class="label-text">Date</span>
      <span class="nav-dot"></span>
    </label>

    <input type=text id="input-4" value="<?php echo $a["Description"]?>" name="Description"/>
    <label for="input-4">
      <span class="label-text">Description</span>
      <span class="nav-dot"></span>
    </label>
    <button type="submit">Add Post</button>
    <p class="tip">Press TAB</p>
    <!--<div class="signup-button">kif kif mba3ed</div>-->
  </form>

  <script src="../assets/ASFO/js/AddBlog.js"></script>

</body>

</html>