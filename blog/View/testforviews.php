
<?php 
require_once "../Controller/BlogC.php";

$BlogC= new BlogC();
$Blogs = $BlogC->ShowBlogHome();


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
        <?php 
                foreach ($Blogs as $blog) {
        ?>


  <tr>
    <td><?php echo $blog['Idpost'] ; ?></td>
    <td><?php echo $blog['Title'] ; ?></td>
    <!--<td><img src="../assets/uploads/<?php echo $blog['Picture'] ?>"></td>-->
    <td><?php echo $blog['Date'] ; ?></td>
    <td><?php echo $blog['Description'] ; ?></td>
    <td><a href="Updateblogpost.php?Idpost=<?php echo $blog['Idpost'] ; ?>">Update</a></td>
    <td><a href="RemoveBlogPost.php?Idpost=<?php echo $blog['Idpost'] ; ?>">Remove</a></td>
    <td><a href="ViewBlogPost.php?Idpost=<?php echo $blog['Idpost'] ; ?>">SHOW</a></td>

  </tr>


        <?php
                }
        ?>
</table>
</html>