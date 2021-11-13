<?php
require_once "../Controller/BlogC.php";
require_once "../Model/Blog.php";
$BlogC = new BlogC();
if (isset($_POST['Idpost']) && isset($_POST['Title']) && isset($_POST['Picture']) && isset($_POST['Date']) && isset($_POST['Description'])) {
    echo $_POST['Idpost'];
    $blog = new post(
        NULL,
        $_POST['Title'],
        $_POST['Picture'],
        $_POST['Date'],
        $_POST['Description']
    );
    $adherentC->modifierBlog($blog);
    header('Location:ViewBlogPost.php');
} else {
    $a = $BlogC->GetPostbyID($_GET['Idpost']);
}

?>

<!-------------------------------------------------HTML CODE TO view add post ----------------------------------->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

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

                <form action="" method="POST">
                    <table align="center">
                        <div>
                            <tr>
                                <td> <label>IdPost</label></td>
                            <tr></tr>
                            <td><input type="text" name="Idpost" id="Idp" class="text-input" value="<?php echo $a['Idpost']; ?>" readonly></td>
                            </tr>
                        </div>
                        <div>
                            <tr>
                                <td><label>Title</label></td>
                            <tr></tr>
                            <td><input type="text" name="Title" id="title" value="<?php echo $a['Title']; ?>" class="text-input"></td>
                            </tr>
                        </div>
                        <div>
                            <tr>
                                <td> <label>Image</label></td>
                            <tr></tr>
                            <td><input type="file" name="Picture" class="text-input" value="<?php echo $a['Picture']; ?>"></td>
                            </Tr>
                        </div>
                        <div>
                            <tr>
                                <td> <label>Date</label></td>
                            <tr></tr>
                            <td><input type="date" name="Date" class="text-input" value="<?php echo $a['Date']; ?>"></td>
                            </Tr>
                        </div>
                        <div>
                            <tr>
                                <td><label>Description</label></td>
                            <tr></tr>
                            <td><textarea name="Description" id="body" value="<?php echo $a['Description']; ?>"></textarea></td>
                            </tr>
                        </div>


                        <div>


                        </div>
                        <div>
                            <tr>

                                <td><button type="submit" class="btn btn-big">Update</button></td>
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