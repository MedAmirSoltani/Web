<?php
require_once "../Controller/BlogC.php";
$BlogC = new BlogC();
if (isset($_POST['Idpost']) && isset($_POST['Title']) && isset($_POST['Picture']) && isset($_POST['Date']) && isset($_POST['Description'])) {
    echo $_POST['Idpost'];
  header('Location:GeneralViewBlogHome.php');
} 
else{$test = $BlogC->GetPostbyID($_GET['Idpost']);}
   


?>
<!doctype html>
<html>
    <head>
</head>
<table border='2'>
  <tr>
    <th>Idpost</th>
    <th>Title</th>
    <th>Date</th>
    <th>Description</th>
  </tr>
        

  <tr>
    <td><?php echo $test['Idpost'] ; ?></td>
    <td><?php echo $test['Title'] ; ?></td>
    <!--<td><img src="../assets/uploads/<?php echo $test['Picture'] ?>"></td>-->
    <td><?php echo $test['Date'] ; ?></td>
    <td><?php echo $test['Description'] ; ?></td>
    <td><a href="Updateblogpost.php?Idpost=<?php echo $test['Idpost'] ; ?>">Update</a></td>
    <td><a href="RemoveBlogPost.php?Idpost=<?php echo $test['Idpost'] ; ?>">Remove</a></td>
    <td><a href="ViewBlogPost.php?Idpost=<?php echo $test['Idpost'] ; ?>">SHOW</a></td>

  </tr>


        
</table>
</html>