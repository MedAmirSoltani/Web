<?php
require_once "../Controller/BlogC.php";

$BlogC = new BlogC();
$Blogs = $BlogC->ShowBlogHome();


?>
<!DOCTYPE html>
<html lang="en">



<?php

foreach ($Blogs as $blog) {

?>

    <!-- Blog post-->

    <div class="card mb-4">
        <a href="#!"><img class="card-img-top" src="../assets/ASFO/uploads/<?php echo $blog['Picture'] ?>" height="350" weight="700" alt="..." /></a>
        <div class="card-body">
            <div class="small text-muted"><?php echo $blog['Date']; ?></div>
            <h2 class="card-title h4"><?php echo $blog['Title'] ?></h2>
            <p class="card-text"><?php echo $blog['Description']; ?></p>
            <a class="btn btn-primary" href="GeneralViewBlogPost.php?Idpost=<?php echo $blog['Idpost']; ?>" target="_blank">Read more →</a>


        </div>
    </div>
<?php } ?>


</html>