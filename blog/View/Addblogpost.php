<?php
require_once "../Controller/BlogC.php";
require_once "../Model/Blog.php";

$BlogC = new BlogC();

if (/*isset($_POST['Idpost']) &&*/isset($_POST['Title']) && isset($_FILES["Picture"]) && isset($_POST['Date']) && isset($_POST['Description'])) {



    $Blog = new post(null, $_POST['Title'], $_FILES["Picture"]["name"], $_POST['Date'], $_POST['Description']);


    $BlogC->AddBlog($Blog);
    $target_dir = "../assets/ASFO/uploads/";
    $target_file = $target_dir . basename($_FILES["Picture"]["name"]);
    if (move_uploaded_file($_FILES["Picture"]["tmp_name"], $target_file)) {
        echo "KHIDMET YA RJEL";
    }


    header('Location:GeneralViewBlogHome.php');
}


?>


<!-------------------------------------------------HTML CODE TO view add post ----------------------------------->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!--script il date -->
    <script src="../assets/ASFO/js/AddBlog.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">

    <!-- Custom Styling -->
    <link rel="stylesheet" href="../assets/css/style.css">

    <!-- Admin Styling -->
    <link rel="stylesheet" href="../assets/css/admin.css">

    <title>Admin Section - Add Post</title>
</head>

<body>


    <!-- Admin Page Wrapper -->
    <div class="admin-wrapper">

        <!-- Left Sidebar -->
        <div class="left-sidebar">
            <ul>
                <li><a href="#">Manage Posts</a></li>


            </ul>
        </div>
        <!-- // Left Sidebar -->


        <!-- Admin Content-->
        <div class="admin-content">
            <!--    <div class="button-group">
                  <a href="create.html" class="btn btn-big">Add Post</a>
                    <a href="index.html" class="btn btn-big">Manage Posts</a>
                </div> -->


            <div class="content">

                <h2 class="page-title">Manage Posts</h2>

                <form action="" method="POST" enctype="multipart/form-data" onsubmit="return CheckAddBlog();">
                    <table align="center">
                        <!-- <div>
                            <tr>
                                <td> <label>IdPost</label></td>
                                <tr></tr>
                                <td><input type="text" name="Idpost" id="Idp" class="text-input"></td>
                            </tr>
                        </div>-->
                        <div>
                            <tr>
                                <td><label>Title</label></td>
                            <tr></tr>
                            <td><input type="text" name="Title" id="Title" class="text-input"></td>
                            </tr>
                        </div>
                        <div>
                            <tr>
                                <td> <label>Image</label></td>
                            <tr></tr>
                            <td><input type="file" name="Picture" id="Picture" class="text-input"></td>
                            </Tr>
                        </div>
                        <div>
                            <tr>
                                <td> <label>Date</label></td>
                            <tr></tr>
                            <td><input type="date" name="Date" id="Date" class="text-input" readonly></td>
                            </Tr>
                        </div>

                        <div class="form-group">
                            <tr>
                                <td>
                                    <label for="Description">Description:</label>
                                </td>
                            <tr></tr>
                            <td> <textarea class="form-control" rows="5" id="Description" name="Description"></textarea></td>
                            </tr>
                        </div>



                        <div>


                        </div>
                        <div>
                            <tr>

                                <td><button type="submit" class="btn btn-big">Add Post</button></td>
                            </tr>
                        </div>
                </form>

            </div>

        </div>
        <!-- // Admin Content -->

    </div>
    <!-- // Page Wrapper -->



    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Ckeditor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>
    <!-- Custom Script -->
    <script src="../assets/js//scriptaddblog.js"></script>

</body>

</html>