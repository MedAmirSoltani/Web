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


<!-------------------------------------------------HTML CODE TO view add post ----------------------------------->
<!DOCTYPE html>
<html lang="en">


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

</html>