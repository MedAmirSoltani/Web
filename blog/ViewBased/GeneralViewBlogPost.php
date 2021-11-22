<?php
require_once "../Controller/BlogC.php";
require_once "../Controller/CommentC.php";
$BlogC = new BlogC();
$CommentC = new CommentC();
if (isset($_POST['Idpost']) && isset($_POST['Title']) && isset($_POST['Picture']) && isset($_POST['Date']) && isset($_POST['Description'])) {
    echo $_POST['Idpost'];
} else {
    $test = $BlogC->GetPostbyID($_GET['Idpost']);
}


if (isset($_POST['Idpost']) && isset($_POST['Comment_text']) && isset($_POST['Date_Comment']) && isset($_POST['Idcomment'])) {



    $Comment = new Comment($_POST['Idpost'], $_POST['Date_Comment'], $_POST['Idcomment'], $_POST['Comment_text']);


    $CommentC->AddComment($Comment);
}



?>
<!DOCTYPE html>
<html lang="en">




<!-- Post title-->
<h1 class="fw-bolder mb-1"><?php echo $test["Title"]; ?></h1>
<!-- Post meta content-->
<div class="text-muted fst-italic mb-2">Posted on <?php echo $test["Date"]; ?></div>

<!-- Preview image figure-->
<figure class="mb-4"><img class="img-fluid rounded" src="../assets/ASFO/uploads/<?php echo $test['Picture']; ?>" height="350" width="800" alt="..." /></figure>
<!-- Post content-->
<section class="mb-5">

    <h2 class="fw-bolder mb-4 mt-5"><?php echo $test['Description']; ?></h2>
    <p class="fs-5 mb-4"><?php echo $test['Description']; ?></p>
    <p class="fs-5 mb-4"><?php echo $test['Description']; ?></p>
</section>
</article>
<!-- Comments section-->
<section class="mb-5">
    <div class="card bg-light">
        <div class="card-body">
            <!-- Comment form-->

            <form action='' method="POST " class="mb-4"><textarea name="comment_text" class="form-control" rows="3" placeholder="Join the discussion and leave a comment!"></textarea><input type="submit" value="comment"></form>
            <!-- Comment with nested comments-->
            <div class="d-flex mb-4">
                <!-- Single comment-->
                <div class="d-flex">
                    <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                    <div class="ms-3">
                        <div class="fw-bold">Commenter Name</div>
                        When I look at the universe and all the ways the universe wants to kill us, I find
                        it hard to reconcile that with statements of beneficence.
                    </div>
                </div>
            </div>
        </div>
</section>
</div>

</html>